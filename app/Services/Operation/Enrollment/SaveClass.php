<?php

namespace App\Services\Operation\Enrollment;

use Hashids\Hashids;
use App\Models\Enrollment;
use App\Models\EnrollmentSubject;
use App\Models\ScholarCourse;
use App\Models\SchoolCampusCourseProspectus;
use App\Http\Resources\Operation\Scholar\CourseResource;
use App\Http\Resources\Operation\Enrollment\EnrollmentResource;

class SaveClass
{   
    public function enroll($request){
        $data = Enrollment::where('id',$request->id)->first();
        $attach = $this->upload($data,$request,'enrollments');
        ($data->is_missed) ? $data->is_delayed = 1 : ''; 
        ($data->is_missed) ? $data->is_missed = 0 : '';
        $data->attachment = $attach;
        $data->user_id = \Auth::user()->id;
        $data->is_enrolled = 1;
        if($data->save()){
            $lists = json_decode($request->lists,true);
            foreach($lists as $key=>$list){
                $options = [];
                EnrollmentSubject::create(array_merge($list,[
                    'options' => json_encode($options) ,
                    'enrollment_id' => $request->id,
                    'user_id' =>  \Auth::user()->id
                ]));
            }
        }
        $data = Enrollment::with('semester.semester','level','subjects')->where('id',$request->id)->first();
        return [
            'data' => new EnrollmentResource($data),
            'message' => 'Enrollment was added.', 
            'info' => 'Enrollment details have been successfully added.',
        ];
    }

    public function grade($request){
        $data = Enrollment::with('semester.semester','level','subjects')->where('id',$request->id)->first();
        $attach = $this->upload($data,$request,'grades');
        $data->attachment = $attach;
        if($data->save()){
            $count = 0;
            $subjects = json_decode($request->lists,true);
            foreach($subjects as $list){
                $enrollment_id = $list['enrollment_id'];
                ($list['grade'] == null) ? $count++ : '';
                $data = EnrollmentSubject::where('id',$list['id'])->first();
                $data->grade = $list['grade'];
                $data->is_failed = ($list['grade']== 'F' || $list['grade'] == 5) ? 1 : 0;
                if($data->isDirty('grade')){
                    $data->user_id = \Auth::user()->id;
                }
                $data->save();
            }
            $data = Enrollment::where('id',$request->id)->first();
            ($count == 0) ? $data->is_grades_completed = 1 : $data->is_grades_completed = 0;
            $data->save();
        }
        $data = Enrollment::with('semester.semester','level','subjects')->where('id',$request->id)->first();
        return [
            'data' => new EnrollmentResource($data),
            'message' => 'Enrollment was added.', 
            'info' => 'Enrollment details have been successfully added.',
        ];
    }

    public function subcourse($request){
        $prospectus = SchoolCampusCourseProspectus::where('course_id',$request->course_id)->where('is_active',1)->first();
        if($prospectus){
            $new = [
                'id' => $prospectus->id,
                'year' => $prospectus->school_year
            ];
            $subjects =  json_decode($prospectus->subjects);

            $listahan = [];
            foreach($subjects as $subject){
                $semesters = $subject->semesters;
                foreach($semesters as $semester){
                    $listahans[] = [
                        'semester' => $semester->semester,
                        'is_empty' => (count($semester->courses) > 0) ? false : true,
                        'has_enrolled' => false,
                        'is_delayed' => false
                    ];
                }
                $listahan[] = [
                    'year' => $subject->year_level,
                    'semesters' => $listahans
                ];
                $listahans = [];
            }
            $lists = [];
            array_push($lists, $new);
            $information = [
                'id' => $prospectus->id,
                'year' => $prospectus->school_year,
                'lists' => $lists,
                'is_old' => false,
                'checker' => $listahan,
                'prospectus' => json_decode($prospectus->subjects)
            ];
            $count = ScholarCourse::where('scholar_id',$request->scholar_id)->count();
            if($count == 0){
                $data = ScholarCourse::create([
                    'course_id' => $request->course_id,
                    'scholar_id' => $request->scholar_id,
                    'information' => json_encode($information)
                ]);

                $data = new CourseResource(ScholarCourse::with('course')->where('scholar_id',$request->scholar_id)->first());
            }else{
                $data = null;
            }
        }
        return [
            'data' => $data,
            'message' => 'Prospectus added successfully.', 
            'info' => 'The prospectus has been added to the scholar',
        ];
    }

    public function lock($request){
        if($request->is_locked){
            return $this->unlockGrade($request);
        }else{
            return $this->lockGrade($request);
        }
    }

    public function unlockGrade($request){
        $data = Enrollment::with('semester.semester','level','subjects')->where('id',$request->id)->first();
        $data->update($request->except('option'));
        $data = Enrollment::with('semester.semester','level','subjects')->where('id',$request->id)->first();
        return [
            'data' => new EnrollmentResource($data),
            'message' => 'Prospectus added successfully.', 
            'info' => 'The prospectus has been added to the scholar',
        ];
    }

    public function lockGrade($request){
        $enrollment_id = $request->id;
        $data = Enrollment::with('semester.semester','level','subjects')->where('id',$enrollment_id)->first();
        $data->update($request->except('option'));
        if($data->is_grades_completed){
            $scholar_id =  $data->scholar_id;
            $semester_id =  $data->semester_id;

            $p = ScholarCourse::with('course')->where('scholar_id',$scholar_id)->first();
            $years = $p->subcourse->years; 
            $semesters = 3;

            $prospectus = json_decode($p->information,true);

            for($x = 0; $x < $years; $x++){
                for($y = 0; $y < $semesters; $y++){
                    foreach($request->lists as $list){
                        $code = $list['code']; $is_lab = $list['is_lab'];
                        $results = array_filter($prospectus['prospectus'][$x]['semesters'][$y]['courses'], function($people) use ($code,$is_lab) {
                            if(array_key_exists("code",$people)){
                                return $people['code'] == $code && $people['is_lab'] == $is_lab;
                            }else{
                                return $results = [];
                            }
                        });
                        if(!empty($results)){
                            $key = array_keys($results)[0];
                            if($list['grade'] != null){
                                ($list['grade'] == 'F' || $list['grade'] == 'f' || $list['grade'] == 5) ? $failed = 1 : $failed = 0;
                                if(array_key_exists("is_failed",$prospectus['prospectus'][$x]['semesters'][$y]['courses'][$key])){
                                    if($prospectus['prospectus'][$x]['semesters'][$y]['courses'][$key]['is_failed']){
                                        $grades = $prospectus['prospectus'][$x]['semesters'][$y]['courses'][$key]['grades'];
                                        array_push($grades,strtoupper($list['grade']));
                                        $prospectus['prospectus'][$x]['semesters'][$y]['courses'][$key]['grades'] = $grades;
                                    }
                                }else{
                                    if($failed){
                                        $grades = [];
                                        array_push($grades,strtoupper($list['grade']));
                                        $prospectus['prospectus'][$x]['semesters'][$y]['courses'][$key]['grades'] = $grades;
                                    }else{
                                        $prospectus['prospectus'][$x]['semesters'][$y]['courses'][$key]['grade'] = $list['grade'];
                                    }
                                }
                                $prospectus['prospectus'][$x]['semesters'][$y]['courses'][$key]['is_failed'] = $failed;
                            }
                        }
                    }
                }
            }
            $p->information = $prospectus;
            $p->save();   
        }
        $data = Enrollment::with('semester.semester','level','subjects')->where('id',$enrollment_id)->first();
        return [
            'data' => new EnrollmentResource($data),
            'message' => 'Enrollment was lock successfully.', 
            'info' => 'The enrollment has been locked',
        ];
    }

    public function upload($data,$request,$type){
        $attach = json_decode($data->attachment,true);
        if($type == 'grades'){
            $count = count($attach['grades']);
            $name = 'Grades_'.$data->level->name.' '.$data->semester->semester->name.' '.$data->semester->academic_year;
        }else{
            $count = count($attach['enrollments']);
            $name = 'Enrollments_'.$data->level->name.' '.$data->semester->semester->name.' '.$data->semester->academic_year;
        }
        $hashids = new Hashids('krad',10);
        $code = $hashids->encode($data->scholar_id);
        
        if($request->hasFile('files'))
        {   
            $files = $request->file('files');   
            foreach ($files as $file) {
                if($count == 0){
                    $file_name = strtolower($name).'.'.$file->getClientOriginalExtension();
                }else{
                    $file_name = strtolower($name).'-'.$count.'.'.$file->getClientOriginalExtension();
                    $count++;
                }
                $file_path = ($type == 'grades') ? $file->storeAs('uploads/'.$code.'/Grades', $file_name, 'public') : $file->storeAs('uploads/'.$code.'/Enrollments', $file_name, 'public');

                $attachment = [
                    'name' => $file_name,
                    'file' => $file_path,
                    'added_by' => \Auth::user()->id,
                    'created_at' => date('M d, Y g:i a', strtotime(now()))
                ];
            }
            if($type == 'grades'){
                $attach['grades'][] = $attachment;
            }else{
                $attach['enrollments'][]= $attachment;
            }
            return $attach;
        }
    }
}
