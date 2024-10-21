<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserProfilesTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_profiles')->delete();
        
        \DB::table('user_profiles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'firstname' => 'Ra-ouf',
                'lastname' => 'Jumli',
                'middlename' => 'Indanan',
                'suffix' => NULL,
                'gender' => 'Male',
                'mobile' => '09171531652',
                'avatar' => 'avatar.jpg',
                'user_id' => 1,
                'created_at' => '2024-10-21 08:26:14',
                'updated_at' => '2024-10-21 08:26:14',
            ),
            1 => 
            array (
                'id' => 2,
                'firstname' => 'Josephine',
                'lastname' => 'Nohay',
                'middlename' => 'B',
                'suffix' => NULL,
                'gender' => 'Female',
                'mobile' => '09123654789',
                'avatar' => 'profile-pictures/aKPddFB34wqMwtmb0KdY9aFW0ASfiCXyN5eNzt0r.png',
                'user_id' => 2,
                'created_at' => '2024-10-21 09:24:24',
                'updated_at' => '2024-10-21 09:33:39',
            ),
            2 => 
            array (
                'id' => 3,
                'firstname' => 'Marc',
                'lastname' => 'Cachin',
                'middlename' => 'Guimbarda',
                'suffix' => NULL,
                'gender' => 'Male',
                'mobile' => '09123654782',
                'avatar' => 'profile-pictures/SVj0JY1TBgm79aOUaD20hYyzQt3nr78eDCMKf0Ug.jpg',
                'user_id' => 3,
                'created_at' => '2024-10-21 09:27:25',
                'updated_at' => '2024-10-21 09:49:04',
            ),
            3 => 
            array (
                'id' => 4,
                'firstname' => 'University',
                'lastname' => 'User',
                'middlename' => 'A',
                'suffix' => NULL,
                'gender' => 'Female',
                'mobile' => '09123321123',
                'avatar' => 'avatar.jpg',
                'user_id' => 4,
                'created_at' => '2024-10-21 09:28:22',
                'updated_at' => '2024-10-21 09:28:22',
            ),
        ));

        
    }
}