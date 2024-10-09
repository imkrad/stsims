<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SchoolCampusGradingsTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('school_campus_gradings')->delete();
        
        \DB::table('school_campus_gradings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'grade' => '1',
                'lower_limit' => '95',
                'upper_limit' => '100',
                'is_incomplete' => 0,
                'is_failed' => 0,
                'is_active' => 1,
                'campus_id' => 2,
                'created_at' => '2024-10-09 13:16:29',
                'updated_at' => '2024-10-09 13:16:29',
            ),
            1 => 
            array (
                'id' => 2,
                'grade' => '4',
                'lower_limit' => '70',
                'upper_limit' => '75',
                'is_incomplete' => 1,
                'is_failed' => 0,
                'is_active' => 1,
                'campus_id' => 2,
                'created_at' => '2024-10-09 13:18:11',
                'updated_at' => '2024-10-09 13:18:11',
            ),
            2 => 
            array (
                'id' => 3,
                'grade' => '5',
                'lower_limit' => '65',
                'upper_limit' => '70',
                'is_incomplete' => 0,
                'is_failed' => 1,
                'is_active' => 1,
                'campus_id' => 2,
                'created_at' => '2024-10-09 13:18:24',
                'updated_at' => '2024-10-09 13:18:24',
            ),
        ));

        
    }
}