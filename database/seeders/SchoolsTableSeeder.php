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
        ));

        
    }
}