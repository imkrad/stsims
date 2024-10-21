<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'username' => 'administrator',
                'email' => 'kradjumli@gmail.com',
                'password' => '$2y$12$eDqFR3PBraQAS6ybMgAdU.meOFJV7.P/31tz4Cjv3G0WXbBYojP7i',
                'role' => 'Administrator',
                'is_active' => 1,
                'is_new' => 0,
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'email_verified_at' => '2024-05-15 08:46:33',
                'password_changed_at' => NULL,
                'two_factor_confirmed_at' => NULL,
                'created_at' => '2024-10-21 08:26:14',
                'updated_at' => '2024-10-21 08:26:14',
            ),
            1 => 
            array (
                'id' => 2,
                'username' => 'jbn',
                'email' => 'jbn@gmail.com',
                'password' => '$2y$12$iB8gCAnDdWpGYCj2Zz.6WOqacSQenz0/bIQl7iOjDHqhUIA5ETNAq',
                'role' => 'Staff',
                'is_active' => 1,
                'is_new' => 0,
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'email_verified_at' => '2024-05-15 08:46:33',
                'password_changed_at' => '2024-10-21 09:36:09',
                'two_factor_confirmed_at' => NULL,
                'created_at' => '2024-10-21 09:24:24',
                'updated_at' => '2024-10-21 09:36:09',
            ),
            2 => 
            array (
                'id' => 3,
                'username' => 'mgc',
                'email' => 'psto@gmail.com',
                'password' => '$2y$12$4hy3GGH47egLYT.5TeP23.UvF0ZiMU7ckyEqiyirXH3csrSE2kuZa',
                'role' => 'Staff',
                'is_active' => 1,
                'is_new' => 0,
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'email_verified_at' => '2024-05-15 08:46:33',
                'password_changed_at' => '2024-10-21 09:49:14',
                'two_factor_confirmed_at' => NULL,
                'created_at' => '2024-10-21 09:27:25',
                'updated_at' => '2024-10-21 09:49:14',
            ),
            3 => 
            array (
                'id' => 4,
                'username' => 'uau',
                'email' => 'university@gmail.com',
                'password' => '$2y$12$.zki4aGmnmVsmiJk4j8xFO0BZGQXh7hT5KMB4BxkVEilXrTPpaJOW',
                'role' => 'Staff',
                'is_active' => 0,
                'is_new' => 0,
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'email_verified_at' => '2024-05-15 08:46:33',
                'password_changed_at' => NULL,
                'two_factor_confirmed_at' => NULL,
                'created_at' => '2024-10-21 09:28:22',
                'updated_at' => '2024-10-21 09:29:15',
            ),
        ));

        
    }
}