<?php

namespace App\Services\Operation\Benefit;

use App\Models\Release;
use App\Models\EnrollmentBenefit;

class SaveClass
{
    public function pending($request){
        $attachment = [];
        $count = Release::whereYear('created_at',now())->count();
        $data = Release::create(
            array_merge($request->all(),[
                'count' => count($request->lists),
                'attachment' => json_encode($attachment),
                'user_id' => \Auth::user()->id,
                'agency_id' => \Auth::user()->myrole->agency_id,
                'batch' => str_pad(($count+1), 5, '0', STR_PAD_LEFT),
                'status_id' => 18
            ])
        );
        foreach($request->lists as $list){
            foreach($list['enrollments'] as $enrollment){
                foreach($enrollment['benefits'] as $benefit){
                    $benefit = EnrollmentBenefit::where('id',$benefit['id'])->first();
                    $benefit->status_id = 19;
                    $benefit->release_id = $data->id;
                    $benefit->save();
                }
            }
        }

        return [
            'data' => $data,
            'message' => 'Enrollment was added.', 
            'info' => 'Enrollment details have been successfully added.',
        ];
    }

    public function completed($request){
        $attachments = $this->upload($request);
        $benefit = EnrollmentBenefit::where('release_id',$request->id)->update(['status_id' => 20]);
        $data = Release::where('id',$request->id)->update(['status_id' => 20, 'attachment' => json_encode($attachments)]);
  
        return [
            'data' => true,
            'message' => 'Enrollment was added.', 
            'info' => 'Enrollment details have been successfully added.',
        ];
    }

    private function upload($request){
        if($request->hasFile('attachment'))
        {   
            $id = $request->batch;
            $year = date('Y');
            $files = $request->file('attachment');   
            foreach ($files as $key=>$file) {
                if($key == 0){
                    $file_name = 'release_'.$id.'_'.$year.'.'.$file->getClientOriginalExtension();
                }else{
                    $file_name = 'release_'.$id.'_'.$year.'-'.$key.'.'.$file->getClientOriginalExtension();
                }
                $file_path = $file->storeAs('benefits', $file_name, 'public');
                
                $attachment[] = [
                    'name' => $file_name,
                    'file' => $file_path,
                    'added_by' => \Auth::user()->id,
                    'created_at' => date('M d, Y g:i a', strtotime(now()))
                ];
            }
            return $attachment;
        }
    }
}
