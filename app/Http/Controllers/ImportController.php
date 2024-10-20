<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Qualifier;
use App\Models\QualifierProfile;
use App\Models\QualifierAddress;
use App\Models\ListStatus;
use App\Models\ListCourse;
use App\Models\ListProgram;
use App\Models\ListDropdown;
use App\Models\Scholar;
use App\Models\ScholarProfile;
use App\Models\ScholarAddress;
use App\Models\ScholarEducation;
use App\Models\ScholarReference;
use App\Models\ScholarInformation;
use App\Models\LocationBarangay;
use App\Models\LocationProvince;
use App\Models\LocationMunicipality;
use App\Models\School;
use App\Models\SchoolCampus;
use App\Models\SchoolCampusName;
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
            case 'qualifier':
                return $this->qualifier();
            break;
        }
    }

    public function qualifiers(){
        set_time_limit(0);
        $qualifiers = [];
        $users = array();
        $success = array();
        $failed = array();
        $duplicate = array();

        foreach($qualifiers as $list){
            $spas_id = $list['spas_no'];
            $program = $list['program'];
    
            $firstname = $list['fname'];
            $middlename = $list['mname'];
            $lastname = $list['lname'];
            $ext = $list['ext'];
            $birthday = $list['bday'];
            $sex = $list['sex'];
    
            $contact_no = $list['cnum'];
            $email = $list['email'];
    
            $region = $list['region'];
            $province = $list['prov'];
            $municipality = $list['muni'];
            $barangay = $list['brgy'];
            $village = $list['village'];
            $street = $list['street'];
    
            $avail = $list['avail'];
            $course = $list['crse'];
            $school = $list['school_name'];
            $school_region = $list['sreg'];

            if (strpos($spas_id, "testaccount") !== false) {
                $test = 'no';
            } else {
                $test = 'yes';
            }

            if($test == 'yes'){
                $count = Qualifier::where('spas_id',$spas_id)->count();
                $qualified_year = '2024';

                if($count == 0){
                    \DB::beginTransaction();
                    $scholar_data = [
                        'spas_id' => $spas_id,
                        'school' => $school,
                        'course' => $course,
                        'region' => $this->region($region),
                        'qualified_year' => $qualified_year,
                        'program_id' => $this->program($program),
                        'status_id' => 13,
                        'status_type' => 17
                    ];
                    
                    $qualifier = Qualifier::create($scholar_data);
                    if($qualifier){ 
                        $profile_data = [
                            'email' => $email,
                            'firstname' => $firstname,
                            'middlename' => $middlename,
                            'lastname' => $lastname,
                            'suffix' => $ext,
                            'sex' => $sex,
                            'contact_no' => $contact_no,
                            'birthday' => $birthday,
                            'qualifier_id' => $qualifier->id
                        ];
                        $profile = QualifierProfile::create($profile_data);
                        if($profile){
                            $address_data = $this->address2(
                                $region,
                                $province,
                                $municipality,
                                $barangay,
                                $village,
                                $street,
                                $qualifier->id,
                            );
                            $address = QualifierAddress::create($address_data);
                            if($address){
                                array_push($success,$spas_id);
                                \DB::commit();
                            }else{
                                array_push($failed,$spas_id);
                                \DB::rollback();
                            }
                        }else{
                            array_push($failed,$spas_id);
                            \DB::rollback();
                        }
                    }else{
                        array_push($failed,$spas_id);
                        \DB::rollback();
                    }
                }
            }
        }

        $result = [
            'success' => $success,
            'failed' => $failed,
            'duplicate' => $duplicate,
        ];
        return $result;
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
            $error = null;

            foreach($lists as $list){
                $count = Scholar::where('spas_id',$list['spas_id'])->count();
                if($count == 0){
                    $scholar = [
                        'spas_id' => $list['spas_id'],
                        'status_id' => $this->status($list['status']),
                        'program_id' => $this->program($list['subprogram']),
                        'category_id' => $this->category($list['category']),
                        'awarded_year' => $list['year_awarded'],
                        'created_at' => now(),
                        'updated_at' => now()
                    ];
                    \DB::beginTransaction();
                    $scholar_info = Scholar::create($scholar);
                    if($scholar_info){
                        $education = [
                            'scholar_id' => $scholar_info->id,
                            'campus_id' => $this->school($list['school']),
                            'course_id' => $this->course($list['course']),
                            'created_at' => now(),
                            'updated_at' => now()
                        ];

                        $education_info = ScholarEducation::insertOrIgnore($education);
                        if($education_info){
                            $profile = [
                                'scholar_id' => $scholar_info->id,
                                'firstname' => $list['firstname'],
                                'middlename' => $list['middlename'],
                                'lastname' => $list['lastname'],
                                'suffix' => $list['suffix'],
                                'birthday' => $list['birthday'],
                                'sex' => $list['sex'],
                                'created_at' => now(),
                                'updated_at' => now()
                            ];

                            $profile_info = ScholarProfile::insertOrIgnore($profile);
                            if($profile_info){
                                $info = [
                                    'scholar_id' => $scholar_info->id,
                                    'email' => (filter_var($list['email'], FILTER_VALIDATE_EMAIL)) ? $list['email'] : NULL,
                                    'contact_no' => $list['contact'],
                                    'created_at' => now(),
                                    'updated_at' => now()
                                ];
                                $info_info = ScholarInformation::insertOrIgnore($info);
                                if($info_info){
                                    $address = $this->address(
                                        $list['region'],
                                        $list['province'],
                                        $list['municipality'],
                                        $list['barangay'],
                                        $list['district'],
                                        $list['zipcode'],
                                        $list['address'],
                                        $scholar_info->id,
                                    );
                                    $address_info = ScholarAddress::insertOrIgnore($address[0]);
                                    if($address_info){
                                        $reference = [
                                            'scholar_id' => $scholar_info->id,
                                            'school' => $list['school'],
                                            'course' => $list['course'],
                                            'address' => $address[1],
                                            'has_address' => $address[2],
                                            'has_education' => ($this->school($list['school']) && $this->course($list['course'])) ? true : false

                                        ];
                                        $reference_info = ScholarReference::insertOrIgnore($reference);
                                        if($reference_info){
                                            array_push($success,$list['spas_id']);
                                            \DB::commit();
                                        }else{
                                            array_push($failed,[$list['spas_id'],'Reference']);
                                            \DB::rollback();
                                        }
                                    }else{
                                        array_push($failed,[$list['spas_id'],'Address']);
                                        \DB::rollback();
                                    }
                                   
                                }else{
                                    array_push($failed,[$list['spas_id'],'Information']);
                                    \DB::rollback();
                                }
                            }else{
                                array_push($failed,[$list['spas_id'],'Profile']);
                                \DB::rollback();
                            }
                        }else{
                            array_push($failed,[$list['spas_id'],'Education']);
                            \DB::rollback();
                        }
                    }else{
                        array_push($failed,[$list['spas_id'],'Scholar']);
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

    public function region($region){
        switch($region){
            case '1':
                $region_code = '010000000';
            break;
            case '2':
                $region_code = '020000000';
            break;
            case '3':
                $region_code = '030000000';
            break;
            case '4A':
                $region_code = '040000000';
            break;
            case '4B':
                $region_code = '170000000';
            break;
            case '5':
                $region_code = '050000000';
            break;
            case '6':
                $region_code = '060000000';
            break;
            case '7':
                $region_code = '070000000';
            break;
            case '8':
                $region_code = '080000000';
            break;
            case '9':
                $region_code = '090000000';
            break;
            case '10':
                $region_code = '100000000';
            break;
            case '11':
                $region_code = '110000000';
            break;
            case '12':
                $region_code = '120000000';
            break;
            case '13':
                $region_code = '130000000';
            break;
            case 'NCR':
                $region_code = '140000000';
            break;
            case 'CAR':
                $region_code = '150000000';
            break;  
            case 'BARMM':
                $region_code = '160000000';
            break;  
            case 'CARAGA':
                $region_code = '170000000';
            break; 
        }
        return $region_code;
    }

    private function address2($region,$province,$municipality,$barangay,$village,$street,$id){

        $province = rtrim($province);
        $municipality = rtrim($municipality);
        $barangay = rtrim($barangay);
        
        switch($region){
            case '1':
                $region_code = '010000000';
            break;
            case '2':
                $region_code = '020000000';
            break;
            case '3':
                $region_code = '030000000';
            break;
            case '4a':
                $region_code = '040000000';
            break;
            case '4b':
                $region_code = '170000000';
            break;
            case '5':
                $region_code = '050000000';
            break;
            case '6':
                $region_code = '060000000';
            break;
            case '7':
                $region_code = '070000000';
            break;
            case '8':
                $region_code = '080000000';
            break;
            case '9':
                $region_code = '090000000';
            break;
            case '10':
                $region_code = '100000000';
            break;
            case '11':
                $region_code = '110000000';
            break;
            case '12':
                $region_code = '120000000';
            break;
            case 'NCR':
                $region_code = '13000000';
            break;
            case 'CAR':
                $region_code = '140000000';
            break;
            case 'ARMM':
                $region_code = '150000000';
            break;  
            case 'BARMM':
                $region_code = '150000000';
            break; 
            case 'CARAGA':
                $region_code = '160000000';
            break; 
        }

        $information = [
            'address' => $village.', '.$street,
            'barangay' => $barangay,
            'municipality' => $municipality,
            'province' => $province,
            'region' => $region,
        ];

        $is_completed = 0;
        // ($municipality == 'ZAMBOANGA CITY') ? $province = 'ZAMBOANGA CITY' : $province;

        if($province){
            $data = LocationProvince::with('region')
            ->where(function($query) use ($province) {  
                $query->where('name','LIKE', '%'.$province.'%')->orWhere('old_name','LIKE', '%'.$province.'%');
            })->first();

            if($province){
                $province = $data->code;
                $region = $data->region->code;
            }else{
                $province = null;
            }
        }
        if($municipality != null){
            $m = LocationMunicipality::with('province')->where(function($query) use ($municipality) {  
                $query->where('name','LIKE', '%'.$municipality.'%')->orWhere('old_name','LIKE', '%'.$municipality.'%');
            })
            ->when($province, function ($query, $province) {
                $query->whereHas('province',function ($query) use ($province) {
                    $query->where('province_code',$province);
                });
            })
            ->first();
            
            if($m != null){
                $municipality = $m->code;
                ($province) ? $province : $m->province->code;
            }else{
                $municipality = strtolower($municipality);
                $test = strpos($municipality,'city');
                if($test){
                    $list = str_replace(" city",'',$municipality);
                    $municipality = 'City of '.$list;

                    $m = LocationMunicipality::with('province')->where(function($query) use ($municipality) {  
                        $query->where('name','LIKE', '%'.$municipality.'%');
                    })
                    ->when($province, function ($query, $province) {
                        $query->whereHas('province',function ($query) use ($province) {
                            $query->where('province_code',$province);
                        });
                    })
                    ->first();
    
                    if($m != null){
                        $municipality = $m->code;
                        ($province) ? $province :  $m->province->code;
                    }else{
                        $municipality = null;
                    }
                }else{
                    $municipality = null;
                }
            }
        }

        if($barangay != null){
            $barangay = str_replace("STO.","Santo",$barangay);
            $barangay = str_replace("STA.","Santa",$barangay);

            $b = LocationBarangay::where(function($query) use ($barangay) {  
                $query->where('name','LIKE', '%'.$barangay.'%');
            })
            ->when($municipality, function ($query, $municipality) {
                $query->whereHas('municipality',function ($query) use ($municipality) {
                    $query->where('municipality_code',$municipality);
                });
            })
            ->first();
            if($b != null){
                $barangay = $b->code;
            }else{
                $barangay = null;
            }
        }

        if($province != null && $municipality != null && $barangay != null){
            $is_completed = 1;
        }   

        $address = [
            'address' => $village.', '.$street,
            'barangay_code' => $barangay,
            'municipality_code' => $municipality,
            'province_code' => $province,
            'region_code' => $region,
            'is_completed' => $is_completed,
            'created_at' => now(),
            'updated_at' => now(),
            'information' => json_encode($information),
            'qualifier_id' => $id
        ];
        return $address;
    
    }

    private function address($region,$province,$municipality,$barangay,$district,$zipcode,$address,$id){
        switch($region){
            case '1':
                $region_code = '010000000';
            break;
            case '2':
                $region_code = '020000000';
            break;
            case '3':
                $region_code = '030000000';
            break;
            case '4a':
                $region_code = '040000000';
            break;
            case '4b':
                $region_code = '170000000';
            break;
            case '5':
                $region_code = '050000000';
            break;
            case '6':
                $region_code = '060000000';
            break;
            case '7':
                $region_code = '070000000';
            break;
            case '8':
                $region_code = '080000000';
            break;
            case '9':
                $region_code = '090000000';
            break;
            case '10':
                $region_code = '100000000';
            break;
            case '11':
                $region_code = '110000000';
            break;
            case '12':
                $region_code = '120000000';
            break;
            case 'NCR':
                $region_code = '13000000';
            break;
            case 'CAR':
                $region_code = '14000000';
            break;
            case 'ARMM':
                $region_code = '15000000';
            break;  
            case 'BARMM':
                $region_code = '15000000';
            break; 
            case 'CARAGA':
                $region_code = '16000000';
            break; 
        }

        $information = [
            'address' => $address,
            'barangay' => $barangay,
            'municipality' => $municipality,
            'province' => $province,
            'region' => $region
        ];

        $completed_address = (($address) ? $address.', ' : '-,').(($barangay) ? $barangay.', ' : ' -,').(($municipality) ? $municipality.', ' : ' -,').(($province) ? $province.', ' : ' -,').(($region) ? $region : '');

        $is_completed = 0;
        $is_within = 1;
        $district = null;
        // ($municipality == 'ZAMBOANGA CITY') ? $province = 'ZAMBOANGA CITY' : $province;

        if($province){
            $data = LocationProvince::with('region')
            ->where(function($query) use ($province) {  
                $query->where('name','LIKE', '%'.$province.'%');
            })->first();
            $province = $data->code;
            $region = $data->region->code;
            if($region_code != $region){
                $is_within = 0;
            }
        }
        if($municipality){
            $m = LocationMunicipality::where(function($query) use ($municipality) {  
                $query->where('name','LIKE', '%'.$municipality.'%');
            })
            ->when($province, function ($query, $province) {
                $query->whereHas('province',function ($query) use ($province) {
                    $query->where('province_code',$province);
                });
            })
            ->first();
            
            if($m != null){
                if($zipcode){
                    $m->zipcode = $zipcode;
                    $m->save();
                }
                $municipality = $m->code;
                if(!$m->is_chartered){
                    $district = $m->district;
                }
            }else{
                $municipality = strtolower($municipality);
                $test = strpos($municipality,'city');
                if($test){
                    $list = str_replace(" city",'',$municipality);
                    $municipality = 'City of '.$list;

                    $m = LocationMunicipality::where(function($query) use ($municipality) {  
                        $query->where('name','LIKE', '%'.$municipality.'%');
                    })
                    ->when($province, function ($query, $province) {
                        $query->whereHas('province',function ($query) use ($province) {
                            $query->where('province_code',$province);
                        });
                    })
                    ->first();
    
                    if($m != null){
                        if($zipcode){
                            $m->zipcode = $zipcode;
                            $m->save();
                        }
                        $municipality = $m->code;
                        if(!$m->is_chartered){
                            $district = $m->district;
                        }
                    }else{
                        $municipality = null;
                        $barangay = null;
                    }
                }else{
                    $municipality = null;
                    $barangay = null;
                }
            }

            if($municipality){
                if($barangay){
                    $b = LocationBarangay::where('name',$barangay)->orWhere('old_name',$barangay)
                    ->where('municipality_code',$municipality)
                    ->first();
                    if($b){
                        $barangay = $b->code;
                    }else{
                        $barangay = null;
                    }
                }else{
                    $barangay = null;
                }
            }
        }else{
            $barangay = null;
        }

        if($province != null && $municipality != null && $barangay != null && $address != null){
            $is_completed = 1;
        }   

        $address = [
            'address' => $address,
            'barangay_code' => $barangay,
            'municipality_code' => $municipality,
            'province_code' => $province,
            'region_code' => $region,
            'created_at' => now(),
            'updated_at' => now(),
            'scholar_id' => $id
        ];

        return [$address,$completed_address,$is_completed];
    }

}
