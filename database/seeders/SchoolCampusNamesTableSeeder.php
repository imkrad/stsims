<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SchoolCampusNamesTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('school_campus_names')->delete();
        
        \DB::table('school_campus_names')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'WESTERN MINDANAO STATE UNIVERSITY-ZAMBOANGA CITY',
                'campus_id' => 2,
                'created_at' => '2024-10-09 11:28:35',
                'updated_at' => '2024-10-09 11:28:35',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'ZAMBOANGA CITY POLYTECHNIC STATE COLLEGE',
                'campus_id' => 17,
                'created_at' => '2024-10-09 13:32:22',
                'updated_at' => '2024-10-09 13:32:22',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'MINDANAO STATE UNIVERSITY-BUUG',
                'campus_id' => 20,
                'created_at' => '2024-10-09 13:42:57',
                'updated_at' => '2024-10-09 13:42:57',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'ZAMBOANGA A.E. COLLEGE',
                'campus_id' => 33,
                'created_at' => '2024-10-09 13:43:43',
                'updated_at' => '2024-10-09 13:43:43',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'SAINT VINCENT`S COLLEGE-DIPOLOG CITY',
                'campus_id' => 35,
                'created_at' => '2024-10-09 13:50:26',
                'updated_at' => '2024-10-09 13:50:26',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'BASILAN STATE COLLEGE-ISABELA CITY',
                'campus_id' => 36,
                'created_at' => '2024-10-09 13:54:39',
                'updated_at' => '2024-10-09 13:54:39',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'JOSE RIZAL MEMORIAL STATE UNIVERSITY',
                'campus_id' => 26,
                'created_at' => '2024-10-09 13:58:35',
                'updated_at' => '2024-10-09 13:58:35',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'ATENEO DE ZAMBOANGA UNIVERSITY',
                'campus_id' => 1,
                'created_at' => '2024-10-09 13:58:53',
                'updated_at' => '2024-10-09 13:58:53',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'JOSE RIZAL MEMORIAL STATE UNIVERSITY-TAMPILISAN',
                'campus_id' => 28,
                'created_at' => '2024-10-09 14:00:01',
                'updated_at' => '2024-10-09 14:00:01',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'JOSE RIZAL MEMORIAL STATE UNIVERSITY-KATIPUNAN',
                'campus_id' => 29,
                'created_at' => '2024-10-09 14:00:28',
                'updated_at' => '2024-10-09 14:00:28',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'DIPOLOG MEDICAL CENTER COLLEGE FOUNDATION, INC.-DIPOLOG CITY',
                'campus_id' => 25,
                'created_at' => '2024-10-09 14:02:03',
                'updated_at' => '2024-10-09 14:02:03',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'ANDRES BONIFACIO COLLEGE',
                'campus_id' => 24,
                'created_at' => '2024-10-09 14:02:58',
                'updated_at' => '2024-10-09 14:02:58',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'JH CERILLES STATE COLLEGE',
                'campus_id' => 21,
                'created_at' => '2024-10-09 14:03:38',
                'updated_at' => '2024-10-09 14:03:38',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'WESTERN MINDANAO STATE UNIVERSITY-IPIL',
                'campus_id' => 5,
                'created_at' => '2024-10-09 14:04:11',
                'updated_at' => '2024-10-09 14:04:11',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'MINDANAO STATE UNIVERSITY MARAWI EXTENSION-SINDANGAN',
                'campus_id' => 19,
                'created_at' => '2024-10-09 14:07:04',
                'updated_at' => '2024-10-09 14:07:04',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'SOUTHERN MINDANAO COLLEGES-PAGADIAN CITY',
                'campus_id' => 38,
                'created_at' => '2024-10-10 17:48:16',
                'updated_at' => '2024-10-10 17:48:16',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'SAINT JOSEPH COLLEGE OF SINDANGAN',
                'campus_id' => 39,
                'created_at' => '2024-10-13 16:33:22',
                'updated_at' => '2024-10-13 16:33:22',
            ),
        ));

        
    }
}