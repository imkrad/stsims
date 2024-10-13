<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SchoolsTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('schools')->delete();
        
        \DB::table('schools')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Ateneo de Zamboanga University',
                'shortcut' => 'ADZU',
                'combiner' => '-',
                'avatar' => 'school.jpg',
                'is_upsystem' => 0,
                'is_active' => 1,
                'class_id' => 4,
                'created_at' => '2024-10-07 11:15:37',
                'updated_at' => '2024-10-07 11:15:37',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Western Mindanao State Unversity',
                'shortcut' => 'WMSU',
                'combiner' => '-',
                'avatar' => 'school.jpg',
                'is_upsystem' => 0,
                'is_active' => 1,
                'class_id' => 2,
                'created_at' => '2024-10-07 11:27:13',
                'updated_at' => '2024-10-07 11:27:13',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Zamboanga Peninsula Polytechnic State University',
                'shortcut' => 'ZPPSU',
                'combiner' => '-',
                'avatar' => 'school.jpg',
                'is_upsystem' => 0,
                'is_active' => 1,
                'class_id' => 2,
                'created_at' => '2024-10-07 11:33:42',
                'updated_at' => '2024-10-07 11:33:42',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Mindanao State University',
                'shortcut' => 'MSU',
                'combiner' => '-',
                'avatar' => 'school.jpg',
                'is_upsystem' => 0,
                'is_active' => 1,
                'class_id' => 2,
                'created_at' => '2024-10-07 11:40:42',
                'updated_at' => '2024-10-07 11:40:42',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'J.H. Cerilles State College',
                'shortcut' => 'JHCSC',
                'combiner' => '-',
                'avatar' => 'school.jpg',
                'is_upsystem' => 0,
                'is_active' => 1,
                'class_id' => 2,
                'created_at' => '2024-10-07 11:52:54',
                'updated_at' => '2024-10-07 11:52:54',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Andres Bonifacio College',
                'shortcut' => 'ABC',
                'combiner' => NULL,
                'avatar' => 'school.jpg',
                'is_upsystem' => 0,
                'is_active' => 1,
                'class_id' => 4,
                'created_at' => '2024-10-07 11:54:47',
                'updated_at' => '2024-10-07 11:54:47',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'DMC College Foundanction Inc.',
                'shortcut' => 'DMC',
                'combiner' => NULL,
                'avatar' => 'school.jpg',
                'is_upsystem' => 0,
                'is_active' => 1,
                'class_id' => 4,
                'created_at' => '2024-10-07 11:56:25',
                'updated_at' => '2024-10-07 11:56:25',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Jose Rizal Memorial State University',
                'shortcut' => 'JRMSU',
                'combiner' => '-',
                'avatar' => 'school.jpg',
                'is_upsystem' => 0,
                'is_active' => 1,
                'class_id' => 2,
                'created_at' => '2024-10-07 12:04:01',
                'updated_at' => '2024-10-07 12:04:01',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Dipolog City Institute of Technology',
                'shortcut' => 'DCIT',
                'combiner' => NULL,
                'avatar' => 'school.jpg',
                'is_upsystem' => 0,
                'is_active' => 1,
                'class_id' => 4,
                'created_at' => '2024-10-09 13:39:15',
                'updated_at' => '2024-10-09 13:39:15',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Universidad de Zamboanga',
                'shortcut' => 'UZ',
                'combiner' => '-',
                'avatar' => 'school.jpg',
                'is_upsystem' => 0,
                'is_active' => 1,
                'class_id' => 4,
                'created_at' => '2024-10-09 13:42:10',
                'updated_at' => '2024-10-09 13:42:10',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Zamboanga State College of Marine Science and Technology',
                'shortcut' => 'ZSCMST',
                'combiner' => '-',
                'avatar' => 'school.jpg',
                'is_upsystem' => 0,
                'is_active' => 1,
                'class_id' => 2,
                'created_at' => '2024-10-09 13:46:19',
                'updated_at' => '2024-10-09 13:46:19',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'St. Vincent\'s College Incorporated',
                'shortcut' => 'SVC',
                'combiner' => NULL,
                'avatar' => 'school.jpg',
                'is_upsystem' => 0,
                'is_active' => 1,
                'class_id' => 4,
                'created_at' => '2024-10-09 13:49:48',
                'updated_at' => '2024-10-09 13:49:48',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Basilan State College',
                'shortcut' => 'BSC',
                'combiner' => '-',
                'avatar' => 'school.jpg',
                'is_upsystem' => 0,
                'is_active' => 1,
                'class_id' => 2,
                'created_at' => '2024-10-09 13:53:59',
                'updated_at' => '2024-10-09 13:53:59',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Saint Columban College',
                'shortcut' => 'SCC',
                'combiner' => '-',
                'avatar' => 'school.jpg',
                'is_upsystem' => 0,
                'is_active' => 1,
                'class_id' => 4,
                'created_at' => '2024-10-09 13:57:04',
                'updated_at' => '2024-10-09 13:57:04',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Southern Mindanao Colleges',
                'shortcut' => 'SMC',
                'combiner' => NULL,
                'avatar' => 'school.jpg',
                'is_upsystem' => 0,
                'is_active' => 1,
                'class_id' => 4,
                'created_at' => '2024-10-10 17:47:45',
                'updated_at' => '2024-10-10 17:47:45',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Saint Joseph College of Sindangan Incorporated',
                'shortcut' => 'SJCSI',
                'combiner' => '-',
                'avatar' => 'school.jpg',
                'is_upsystem' => 0,
                'is_active' => 1,
                'class_id' => 4,
                'created_at' => '2024-10-13 16:31:55',
                'updated_at' => '2024-10-13 16:31:55',
            ),
        ));

        
    }
}