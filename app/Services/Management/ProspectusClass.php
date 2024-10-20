<?php

namespace App\Services\Management;

use App\Models\SchoolCampusCourseProspectus;

class ProspectusClass
{
    public function save($request,$levels,$semesters){
        $group = []; $courses = [];

        for ($i = 0; $i < $request->years; ++$i) {
            $sem = [];
            foreach($semesters as $key=>$semester){
                $sem[] = ['semester' => $semester['name'],'total' => 0,'courses' => $courses];
            }
            $group[] = [
                'year_level' => $levels[$i]['others'],
                'year_ordinal' => $levels[$i]['name'],
                'semesters' => $sem
            ];
        }
        $request['subjects'] = json_encode($group,true);
        
        $data = SchoolCampusCourseProspectus::create($request->all());

        return [
            'data' => $data,
            'message' => 'Prospecus created successfully.', 
            'info' => 'The new prospectus has been added.',
        ];
    }

    public function update($request){
        switch($request->type){
            case 'subjects':
                $data = SchoolCampusCourseProspectus::where('id',$request->id)->update([
                    'subjects' => $request->subjects,
                    'is_completed' => $request->is_completed
                ]);
            break;
            case 'status':
                $data = SchoolCampusCourseProspectus::where('id',$request->id)->update([
                    'is_active' => $request->is_active
                ]);
                if($data){
                    if($request->is_active){
                        $this->status($request->id);
                    }
                }
            break;
            case 'lock':
                $data = SchoolCampusCourseProspectus::where('id',$request->id)->update([
                    'is_locked' => $request->is_locked
                ]);
            break;
        }
       
        return [
            'data' => $data,
            'message' => 'Prospecus updated successfully.', 
            'info' => 'The prospectus has been updated.',
        ];
    }

    private function status($id){
        $data = SchoolCampusCourseProspectus::where('id','!=',$id)->update([
            'is_active' => 0
        ]);
    }
}
