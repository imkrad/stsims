<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Scholar;
use App\Models\ScholarProfile;
use App\Models\ScholarEducation;
use App\Models\ListStatus;
use App\Models\ListProgram;
use App\Models\ListDropdown;
use App\Models\ListCourse;
use App\Models\School;
use App\Models\SchoolCampusName;
use App\Models\SchoolCampus;
use App\Imports\ScholarImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class ImportController extends Controller
{
    public function store(Request $request){
        $option = $request->option;
        switch($option){
            case 'scholar-preview':
                return $this->preview($request);
            break;
            case 'scholar-upload':
                return $this->upload($request);
            break;
        }
    }

    private function preview($request){
        $data =  Excel::toCollection(new ScholarImport,$request->import_file);
        $rows = $data[0]; 
        foreach($rows as $row){ 
            if($row[1] != ''){
                $information[] = [
                    'spas_id' => $row[0],
                    'firstname' => strtoupper(strtolower($row[1])),
                    'middlename' => strtoupper(strtolower($row[2])),
                    'lastname' => strtoupper(strtolower($row[3])),
                    'suffix' => strtoupper(strtolower($row[4])),
                    'sex' => $row[5],
                    'birthday' =>  Carbon::parse($row[6])->format('Y-m-d'),
                    'address' => strtoupper(strtolower($row[7])), strtoupper(strtolower($row[8])),
                    'barangay' => strtoupper(strtolower($row[9])),
                    'municipality' => strtoupper(strtolower($row[10])),
                    'province' => strtoupper(strtolower($row[11])),
                    'region' => strtoupper(strtolower($row[12])),
                    'district' => strtoupper(strtolower($row[13])),
                    'zipcode' => strtoupper(strtolower($row[14])),
                    'email' => strtolower($row[15]),
                    'contact' => strtoupper(strtolower($row[16])),
                    'year_awarded' => $row[17],
                    'program' => strtoupper(strtolower($row[18])),
                    'subprogram' => strtoupper(strtolower($row[19])),
                    'category' => strtoupper(strtolower($row[20])),
                    'schp_award' => strtoupper(strtolower($row[21])),
                    'course' => strtoupper(strtolower($row[22])),
                    'school' => strtoupper(strtolower($row[23])),
                    'status' => strtoupper(strtolower($row[25]))
                ];
            }
        }
        return $information;
    }

    private function upload($request){
        set_time_limit(0);

        $result = \DB::transaction(function () use ($request){
            $lists = $request->lists;
            $success = array();
            $failed = array();
            $duplicate = array();

            foreach($lists as $list){
                $count = Scholar::where('spas_id',$list['spas_id'])->count();
                if($count == 0){
                    $scholar = [
                        'spas_id' => $list['spas_id'],
                        'status_id' => $this->status($list['status']),
                        'program_id' => $this->program($list['subprogram']),
                        'category_id' => $this->category($list['category']),
                        'awarded_year' => $list['year_awarded'],
                    ];
                    \DB::beginTransaction();
                    $scholar_info = Scholar::create($scholar);
                    if($scholar_info){
                        $education = [
                            'scholar_id' => $scholar_info->id,
                            'campus_id' => $this->school($list['school']),
                            'course_id' => $this->course($list['course'])
                        ];

                        $education_json = [
                            'school' => $list['school'],
                            'course' => $list['course'],
                        ];

                        $education_info = ScholarEducation::insertOrIgnore($education);
                        if($education_info){
                            $profile = [
                                'scholar_id' => $scholar_info->id,
                                // 'email' => (filter_var($list['email'], FILTER_VALIDATE_EMAIL)) ? $list['email'] : NULL,
                                'firstname' => $list['firstname'],
                                'middlename' => $list['middlename'],
                                'lastname' => $list['lastname'],
                                'suffix' => $list['suffix'],
                                'birthday' => $list['birthday'],
                                'sex' => $list['sex'],
                                // 'contact_no' => $list['contact'],
                            ];

                            $profile_info = ScholarProfile::insertOrIgnore($profile);
                            if($profile_info){
                                array_push($success,$list['spas_id']);
                                \DB::commit();
                            }else{
                                array_push($failed,$list['spas_id']);
                                \DB::rollback();
                            }
                        }else{
                            array_push($failed,$education);
                            \DB::rollback();
                        }
                    }else{
                        array_push($failed,$list['spas_id']);
                        \DB::rollback();
                    }
                }else{
                    array_push($duplicate,$list['spas_id']);
                    \DB::rollback();
                }
            }
            $result = [
                'success' => $success,
                'failed' => $failed,
                'duplicate' => $duplicate,
            ];
            return $result;
        });
        return $result;
    }

    private function status($status){
        if($status == 'NEW' || $status == 'ONGOING'){
            return 7;
        }else{
            $status = ListStatus::select('id')->where('name',$status)->first();
            return $status->id;
        }
    }

    private function program($program){
        $data = ListProgram::select('id')->where('name',$program)->first();
        $data = ($data) ? $data->id : '';
        return $data;
    }

    private function category($category){
        $data = ListDropdown::select('id')->where('name',$category)->where('classification','Category')->first();
        $data = ($data) ? $data->id : '';
        return $data;
    }

    private function course($course){
        $data = ListCourse::select('id')->where('shortcut',$course)->first();
        $data = ($data) ? $data->id : '';
        return $data;
    }

    private function school($name){
        $school = SchoolCampusName::select('campus_id')->where('name',$name)->first();
        if($school){
            $school_id = $school->campus_id; 
        }else{
            $school2 = School::where('name',$name)->first();
            if($school2){
                $school3 = SchoolCampus::where('school_id',$school2->id)->first();
                if($school3){
                    $school_id = $school3->id; 
                }else{
                    $school_id = null;
                }
            }else{
                $school_id = null;
            }
        }
        return $school_id;
    }

}
