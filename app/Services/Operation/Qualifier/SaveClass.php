<?php

namespace App\Services\Operation\Qualifier;

use App\Models\Scholar;
use App\Models\ScholarProfile;
use App\Models\ScholarEducation;
use App\Models\ScholarAddress;
use App\Models\ScholarInformation;
use App\Models\Qualifier;

class SaveClass
{
    public function enroll($request){ 
        $scholar = $request->user;
        $count = Scholar::where('spas_id',$scholar['spas_id'])->count();
  
        if($count == 0){
            $info = [
                'spas_id' => $scholar['spas_id'],
                'program_id' => $scholar['program']['id'],
                'category_id' => 25,
                'status_id' => 7,
                'awarded_year' =>  $scholar['qualified_year'],
                'created_at' => now(),
                'updated_at' => now()
            ];

            \DB::beginTransaction();
            $scholar_info = Scholar::create($info);

            if($scholar_info){
                $education = [
                    'campus_id' => $request->school_id,
                    'course_id' => $request->course_id,
                    'level_id' => 11,
                    'scholar_id' => $scholar_info->id,
                    'created_at' => now(),
                    'updated_at' => now()
                ];

                $education_info = ScholarEducation::insertOrIgnore($education);

                if($education_info){
                    $profile = [
                        'firstname' => $scholar['profile']['firstname'],
                        'middlename' => $scholar['profile']['middlename'],
                        'lastname' => $scholar['profile']['lastname'],
                        'suffix' => $scholar['profile']['suffix'],
                        'sex' => $scholar['profile']['sex'],
                        'birthday' => $scholar['profile']['birthday'],
                        'scholar_id' => $scholar_info->id,
                        'created_at' => now(),
                        'updated_at' => now()
                    ];

                    $profile_info = ScholarProfile::insertOrIgnore($profile);

                    if($profile_info){
                        $address = [
                            'address' => $scholar['address']['address'],
                            'region_code' => $scholar['address']['region']['code'],
                            'province_code' => $scholar['address']['province']['code'],
                            'municipality_code' => $scholar['address']['municipality']['code'],
                            'barangay_code' => $scholar['address']['barangay']['code'],
                            'scholar_id' => $scholar_info->id,
                            'created_at' => now(),
                            'updated_at' => now()
                        ];

                        $address_info = ScholarAddress::insertOrIgnore($address);
                        if($address_info){
                            $info = [
                                'email' => $scholar['profile']['email'],
                                'contact_no' => $scholar['profile']['contact_no'],
                                'scholar_id' => $scholar_info->id,
                            ];

                            $info_info = ScholarInformation::insertOrIgnore($info);

                            if($info_info){
                                $qualifier = Qualifier::where('id',$scholar['id'])->update(['status_id' => 16]);
                                if($qualifier){
                                    $data =  Qualifier::with('address.region','address.province','address.municipality','address.barangay')
                                        ->with('profile','program','status')
                                        ->where('id',$scholar['id'])->first();
                                    $type = 'bxs-x-circle';
                                    $message = 'Qualifier was added';
                                }
                                
                                \DB::commit();
                               
                            }else{
                                $type = 'bxs-x-circle';
                                $message = 'Info';
                                \DB::rollback();
                            }
                        }else{
                            $type = 'bxs-x-circle';
                            $message = 'Address';
                            \DB::rollback();
                        }
                    }else{
                        $type = 'bxs-x-circle';
                        $message = 'Profile';
                        \DB::rollback();
                    }
                }else{
                    $type = 'bxs-x-circle';
                    $message = 'Education';
                    \DB::rollback();
                }
            }else{
                $type = 'bxs-x-circle';
                $message = 'Scholar';
                \DB::rollback();
            }
        }else{
            $type = 'bxs-x-circle';
            $message = 'Duplicate Entry';
        }

        return [
            'data' => '',
            'message' => $message, 
            'info' => 'The new semester has been added.',
        ];
    }
}
