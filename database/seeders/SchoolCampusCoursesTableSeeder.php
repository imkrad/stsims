<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SchoolCampusCoursesTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('school_campus_courses')->delete();
        
        \DB::table('school_campus_courses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'type' => '-',
                'years' => 4,
                'is_active' => 0,
                'course_id' => 77,
                'campus_id' => 1,
                'created_at' => '2024-10-08 13:54:49',
                'updated_at' => '2024-10-08 13:54:49',
            ),
            1 => 
            array (
                'id' => 2,
                'type' => '-',
                'years' => 4,
                'is_active' => 0,
                'course_id' => 51,
                'campus_id' => 1,
                'created_at' => '2024-10-08 14:02:40',
                'updated_at' => '2024-10-08 14:02:40',
            ),
            2 => 
            array (
                'id' => 3,
                'type' => '-',
                'years' => 4,
                'is_active' => 0,
                'course_id' => 50,
                'campus_id' => 1,
                'created_at' => '2024-10-08 14:02:59',
                'updated_at' => '2024-10-08 14:02:59',
            ),
            3 => 
            array (
                'id' => 4,
                'type' => '-',
                'years' => 4,
                'is_active' => 0,
                'course_id' => 55,
                'campus_id' => 1,
                'created_at' => '2024-10-08 14:03:14',
                'updated_at' => '2024-10-08 14:03:14',
            ),
            4 => 
            array (
                'id' => 5,
                'type' => '-',
                'years' => 4,
                'is_active' => 0,
                'course_id' => 123,
                'campus_id' => 1,
                'created_at' => '2024-10-08 14:05:23',
                'updated_at' => '2024-10-08 14:05:23',
            ),
            5 => 
            array (
                'id' => 6,
                'type' => '-',
                'years' => 4,
                'is_active' => 0,
                'course_id' => 130,
                'campus_id' => 1,
                'created_at' => '2024-10-08 14:05:34',
                'updated_at' => '2024-10-08 14:05:34',
            ),
            6 => 
            array (
                'id' => 7,
                'type' => '-',
                'years' => 4,
                'is_active' => 0,
                'course_id' => 125,
                'campus_id' => 1,
                'created_at' => '2024-10-08 14:06:40',
                'updated_at' => '2024-10-08 14:06:40',
            ),
            7 => 
            array (
                'id' => 8,
                'type' => '-',
                'years' => 4,
                'is_active' => 1,
                'course_id' => 47,
                'campus_id' => 2,
                'created_at' => '2024-10-08 14:55:56',
                'updated_at' => '2024-10-08 14:55:56',
            ),
            8 => 
            array (
                'id' => 9,
                'type' => '-',
                'years' => 4,
                'is_active' => 1,
                'course_id' => 55,
                'campus_id' => 2,
                'created_at' => '2024-10-08 14:56:06',
                'updated_at' => '2024-10-08 14:56:06',
            ),
            9 => 
            array (
                'id' => 10,
                'type' => '-',
                'years' => 4,
                'is_active' => 1,
                'course_id' => 69,
                'campus_id' => 2,
                'created_at' => '2024-10-08 14:56:19',
                'updated_at' => '2024-10-08 14:56:19',
            ),
            10 => 
            array (
                'id' => 11,
                'type' => '-',
                'years' => 4,
                'is_active' => 1,
                'course_id' => 92,
                'campus_id' => 2,
                'created_at' => '2024-10-08 14:56:29',
                'updated_at' => '2024-10-08 14:56:29',
            ),
            11 => 
            array (
                'id' => 12,
                'type' => '-',
                'years' => 4,
                'is_active' => 1,
                'course_id' => 23,
                'campus_id' => 2,
                'created_at' => '2024-10-08 14:56:43',
                'updated_at' => '2024-10-08 14:56:43',
            ),
            12 => 
            array (
                'id' => 13,
                'type' => '-',
                'years' => 4,
                'is_active' => 1,
                'course_id' => 56,
                'campus_id' => 2,
                'created_at' => '2024-10-08 14:57:02',
                'updated_at' => '2024-10-08 14:57:02',
            ),
            13 => 
            array (
                'id' => 14,
                'type' => '-',
                'years' => 4,
                'is_active' => 1,
                'course_id' => 73,
                'campus_id' => 2,
                'created_at' => '2024-10-08 14:57:16',
                'updated_at' => '2024-10-08 14:57:16',
            ),
            14 => 
            array (
                'id' => 15,
                'type' => '-',
                'years' => 4,
                'is_active' => 1,
                'course_id' => 50,
                'campus_id' => 2,
                'created_at' => '2024-10-08 14:57:29',
                'updated_at' => '2024-10-08 14:57:29',
            ),
            15 => 
            array (
                'id' => 16,
                'type' => '-',
                'years' => 4,
                'is_active' => 1,
                'course_id' => 51,
                'campus_id' => 2,
                'created_at' => '2024-10-08 14:57:39',
                'updated_at' => '2024-10-08 14:57:39',
            ),
            16 => 
            array (
                'id' => 17,
                'type' => '-',
                'years' => 4,
                'is_active' => 1,
                'course_id' => 77,
                'campus_id' => 2,
                'created_at' => '2024-10-08 14:57:53',
                'updated_at' => '2024-10-08 14:57:53',
            ),
            17 => 
            array (
                'id' => 18,
                'type' => '-',
                'years' => 4,
                'is_active' => 1,
                'course_id' => 36,
                'campus_id' => 2,
                'created_at' => '2024-10-08 14:58:46',
                'updated_at' => '2024-10-08 14:58:46',
            ),
            18 => 
            array (
                'id' => 19,
                'type' => '-',
                'years' => 4,
                'is_active' => 1,
                'course_id' => 42,
                'campus_id' => 2,
                'created_at' => '2024-10-08 14:58:58',
                'updated_at' => '2024-10-08 14:58:58',
            ),
            19 => 
            array (
                'id' => 20,
                'type' => '-',
                'years' => 4,
                'is_active' => 1,
                'course_id' => 104,
                'campus_id' => 2,
                'created_at' => '2024-10-08 14:59:10',
                'updated_at' => '2024-10-08 14:59:10',
            ),
            20 => 
            array (
                'id' => 21,
                'type' => '-',
                'years' => 4,
                'is_active' => 1,
                'course_id' => 89,
                'campus_id' => 2,
                'created_at' => '2024-10-08 14:59:20',
                'updated_at' => '2024-10-08 14:59:20',
            ),
            21 => 
            array (
                'id' => 22,
                'type' => '-',
                'years' => 4,
                'is_active' => 1,
                'course_id' => 109,
                'campus_id' => 2,
                'created_at' => '2024-10-08 14:59:31',
                'updated_at' => '2024-10-08 14:59:31',
            ),
            22 => 
            array (
                'id' => 23,
                'type' => '-',
                'years' => 4,
                'is_active' => 1,
                'course_id' => 101,
                'campus_id' => 2,
                'created_at' => '2024-10-08 14:59:43',
                'updated_at' => '2024-10-08 14:59:43',
            ),
            23 => 
            array (
                'id' => 24,
                'type' => '-',
                'years' => 4,
                'is_active' => 1,
                'course_id' => 47,
                'campus_id' => 17,
                'created_at' => '2024-10-08 15:01:31',
                'updated_at' => '2024-10-08 15:01:31',
            ),
            24 => 
            array (
                'id' => 25,
                'type' => '-',
                'years' => 4,
                'is_active' => 1,
                'course_id' => 47,
                'campus_id' => 5,
                'created_at' => '2024-10-08 15:01:53',
                'updated_at' => '2024-10-08 15:01:53',
            ),
            25 => 
            array (
                'id' => 26,
                'type' => '-',
                'years' => 4,
                'is_active' => 1,
                'course_id' => 55,
                'campus_id' => 5,
                'created_at' => '2024-10-08 15:02:04',
                'updated_at' => '2024-10-08 15:02:04',
            ),
            26 => 
            array (
                'id' => 27,
                'type' => '-',
                'years' => 4,
                'is_active' => 1,
                'course_id' => 130,
                'campus_id' => 20,
                'created_at' => '2024-10-08 15:02:40',
                'updated_at' => '2024-10-08 15:02:40',
            ),
            27 => 
            array (
                'id' => 28,
                'type' => '-',
                'years' => 4,
                'is_active' => 1,
                'course_id' => 123,
                'campus_id' => 21,
                'created_at' => '2024-10-08 15:03:10',
                'updated_at' => '2024-10-08 15:03:10',
            ),
            28 => 
            array (
                'id' => 29,
                'type' => '-',
                'years' => 4,
                'is_active' => 1,
                'course_id' => 47,
                'campus_id' => 21,
                'created_at' => '2024-10-08 15:03:18',
                'updated_at' => '2024-10-08 15:03:18',
            ),
            29 => 
            array (
                'id' => 30,
                'type' => '-',
                'years' => 4,
                'is_active' => 1,
                'course_id' => 77,
                'campus_id' => 22,
                'created_at' => '2024-10-08 15:03:36',
                'updated_at' => '2024-10-08 15:03:36',
            ),
            30 => 
            array (
                'id' => 31,
                'type' => '-',
                'years' => 4,
                'is_active' => 1,
                'course_id' => 109,
                'campus_id' => 19,
                'created_at' => '2024-10-08 15:04:06',
                'updated_at' => '2024-10-08 15:04:06',
            ),
            31 => 
            array (
                'id' => 32,
                'type' => '-',
                'years' => 4,
                'is_active' => 1,
                'course_id' => 47,
                'campus_id' => 19,
                'created_at' => '2024-10-08 15:04:17',
                'updated_at' => '2024-10-08 15:04:17',
            ),
            32 => 
            array (
                'id' => 33,
                'type' => '-',
                'years' => 4,
                'is_active' => 1,
                'course_id' => 23,
                'campus_id' => 19,
                'created_at' => '2024-10-08 15:04:31',
                'updated_at' => '2024-10-08 15:04:31',
            ),
            33 => 
            array (
                'id' => 34,
                'type' => '-',
                'years' => 4,
                'is_active' => 1,
                'course_id' => 42,
                'campus_id' => 19,
                'created_at' => '2024-10-08 15:04:41',
                'updated_at' => '2024-10-08 15:04:41',
            ),
            34 => 
            array (
                'id' => 35,
                'type' => '-',
                'years' => 4,
                'is_active' => 1,
                'course_id' => 111,
                'campus_id' => 19,
                'created_at' => '2024-10-08 15:04:49',
                'updated_at' => '2024-10-08 15:04:49',
            ),
            35 => 
            array (
                'id' => 36,
                'type' => '-',
                'years' => 4,
                'is_active' => 1,
                'course_id' => 89,
                'campus_id' => 19,
                'created_at' => '2024-10-08 15:04:57',
                'updated_at' => '2024-10-08 15:04:57',
            ),
            36 => 
            array (
                'id' => 37,
                'type' => '-',
                'years' => 4,
                'is_active' => 0,
                'course_id' => 69,
                'campus_id' => 24,
                'created_at' => '2024-10-08 15:05:41',
                'updated_at' => '2024-10-08 15:05:41',
            ),
            37 => 
            array (
                'id' => 38,
                'type' => '-',
                'years' => 4,
                'is_active' => 0,
                'course_id' => 47,
                'campus_id' => 24,
                'created_at' => '2024-10-08 15:05:48',
                'updated_at' => '2024-10-08 15:05:48',
            ),
            38 => 
            array (
                'id' => 39,
                'type' => '-',
                'years' => 4,
                'is_active' => 0,
                'course_id' => 77,
                'campus_id' => 25,
                'created_at' => '2024-10-08 15:06:09',
                'updated_at' => '2024-10-08 15:06:09',
            ),
            39 => 
            array (
                'id' => 40,
                'type' => '-',
                'years' => 4,
                'is_active' => 1,
                'course_id' => 84,
                'campus_id' => 26,
                'created_at' => '2024-10-08 15:06:40',
                'updated_at' => '2024-10-08 15:06:40',
            ),
            40 => 
            array (
                'id' => 41,
                'type' => '-',
                'years' => 4,
                'is_active' => 1,
                'course_id' => 47,
                'campus_id' => 26,
                'created_at' => '2024-10-08 15:06:48',
                'updated_at' => '2024-10-08 15:06:48',
            ),
            41 => 
            array (
                'id' => 42,
                'type' => '-',
                'years' => 4,
                'is_active' => 1,
                'course_id' => 23,
                'campus_id' => 26,
                'created_at' => '2024-10-08 15:06:59',
                'updated_at' => '2024-10-08 15:06:59',
            ),
            42 => 
            array (
                'id' => 43,
                'type' => '-',
                'years' => 4,
                'is_active' => 1,
                'course_id' => 51,
                'campus_id' => 26,
                'created_at' => '2024-10-08 15:07:07',
                'updated_at' => '2024-10-08 15:07:07',
            ),
            43 => 
            array (
                'id' => 44,
                'type' => '-',
                'years' => 4,
                'is_active' => 1,
                'course_id' => 130,
                'campus_id' => 26,
                'created_at' => '2024-10-08 15:07:21',
                'updated_at' => '2024-10-08 15:07:21',
            ),
            44 => 
            array (
                'id' => 45,
                'type' => '-',
                'years' => 4,
                'is_active' => 1,
                'course_id' => 123,
                'campus_id' => 26,
                'created_at' => '2024-10-08 15:07:27',
                'updated_at' => '2024-10-08 15:07:27',
            ),
            45 => 
            array (
                'id' => 46,
                'type' => '-',
                'years' => 4,
                'is_active' => 1,
                'course_id' => 125,
                'campus_id' => 26,
                'created_at' => '2024-10-08 15:07:41',
                'updated_at' => '2024-10-08 15:07:41',
            ),
            46 => 
            array (
                'id' => 47,
                'type' => '-',
                'years' => 4,
                'is_active' => 1,
                'course_id' => 130,
                'campus_id' => 27,
                'created_at' => '2024-10-08 15:08:01',
                'updated_at' => '2024-10-08 15:08:01',
            ),
            47 => 
            array (
                'id' => 48,
                'type' => '-',
                'years' => 4,
                'is_active' => 1,
                'course_id' => 123,
                'campus_id' => 28,
                'created_at' => '2024-10-08 15:08:26',
                'updated_at' => '2024-10-08 15:08:26',
            ),
        ));

        
    }
}