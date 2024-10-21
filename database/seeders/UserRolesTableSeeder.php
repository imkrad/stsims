<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserRolesTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_roles')->delete();
        
        \DB::table('user_roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'roleable_type' => 'App\\Models\\ListAgency',
                'roleable_id' => 10,
                'agency_id' => 10,
                'role_id' => 1,
                'user_id' => 2,
                'created_at' => '2024-10-21 09:24:24',
                'updated_at' => '2024-10-21 09:24:24',
            ),
            1 => 
            array (
                'id' => 2,
                'roleable_type' => 'App\\Models\\LocationProvince',
                'roleable_id' => 97200000,
                'agency_id' => 10,
                'role_id' => 3,
                'user_id' => 3,
                'created_at' => '2024-10-21 09:27:25',
                'updated_at' => '2024-10-21 09:27:25',
            ),
            2 => 
            array (
                'id' => 3,
                'roleable_type' => 'App\\Models\\SchoolCampus',
                'roleable_id' => 2,
                'agency_id' => 10,
                'role_id' => 4,
                'user_id' => 4,
                'created_at' => '2024-10-21 09:28:22',
                'updated_at' => '2024-10-21 09:28:22',
            ),
        ));

        
    }
}