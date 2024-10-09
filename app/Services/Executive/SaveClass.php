<?php

namespace App\Services\Executive;

use Artisan;
use App\Models\User;
use App\Models\ListRole;
use App\Models\ListMenu;
use App\Models\ListAgency;
use App\Models\SchoolCampus;
use App\Models\LocationProvince;
use App\Http\Resources\UserResource;
use App\Http\Resources\DefaultResource;

class SaveClass
{   
    public function user($request){
        $data = User::create(array_merge($request->all(), [
            'password' => bcrypt('123456789'), 
            'role' => 'Staff'
        ]));
        $profile = $data->profile()->create($request->all());
        if($profile){
            switch($request->role_id){
                case '3':
                    $type = LocationProvince::where('code',$request->province)->first();
                break;
                case '4':
                    $type = SchoolCampus::where('id',$request->school)->first();
                break;
                default:
                    $type = ListAgency::where('id',$request->agency_id)->first();

            }
            $type->role()->create([
                'agency_id' => $request->agency_id,
                'role_id' => $request->role_id,
                'user_id' => $data->id
            ]);
        }
           
        return [
            'data' => new UserResource($data),
            'message' => 'User creation was successful!', 
            'info' => "You've successfully created an account for the user."
        ];
    }

    public function role($request){
        $data = ListRole::create($request->all());
           
        return [
            'data' => new DefaultResource($data),
            'message' => 'Role creation was successful!', 
            'info' => "You've successfully created a role."
        ];
    }

    public function menu($request){
        $data = ListMenu::create($request->all());
           
        return [
            'data' => new DefaultResource($data),
            'message' => 'Menu creation was successful!', 
            'info' => "You've successfully created a menu."
        ];
    }

    public function backup($request){
        $data = Artisan::call('backup:run --only-db');
   
        return [
            'data' => ($data) ? true : false,
            'message' => 'Backup creation was successful!', 
            'info' => "You've successfully created a backup."
        ];
    }
}
