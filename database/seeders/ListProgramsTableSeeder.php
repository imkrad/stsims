<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ListProgramsTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('list_programs')->delete();
        
        \DB::table('list_programs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'RA 7687',
                'others' => 'n/a',
                'is_sub' => 0,
                'is_active' => 1,
                'program_id' => 45,
                'type_id' => 48,
                'created_at' => '2024-10-04 09:03:07',
                'updated_at' => '2024-10-10 14:45:35',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'RA 10612',
                'others' => 'n/a',
                'is_sub' => 0,
                'is_active' => 1,
                'program_id' => 46,
                'type_id' => 49,
                'created_at' => '2024-10-04 09:04:33',
                'updated_at' => '2024-10-10 14:50:57',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'MERIT',
                'others' => 'n/a',
                'is_sub' => 0,
                'is_active' => 1,
                'program_id' => 47,
                'type_id' => 48,
                'created_at' => '2024-10-04 09:04:43',
                'updated_at' => '2024-10-10 14:46:54',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'BANGON MARAWI',
                'others' => 'n/a',
                'is_sub' => 1,
                'is_active' => 1,
                'program_id' => 45,
                'type_id' => 48,
                'created_at' => '2024-10-04 09:12:56',
                'updated_at' => '2024-10-10 14:47:38',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'BRIDGING',
                'others' => 'n/a',
                'is_sub' => 1,
                'is_active' => 1,
                'program_id' => 45,
                'type_id' => 48,
                'created_at' => '2024-10-04 09:13:11',
                'updated_at' => '2024-10-10 14:47:59',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'CSF',
                'others' => 'n/a',
                'is_sub' => 1,
                'is_active' => 1,
                'program_id' => 45,
                'type_id' => 48,
                'created_at' => '2024-10-04 09:13:17',
                'updated_at' => '2024-10-10 14:48:10',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'GIFTS',
                'others' => 'n/a',
                'is_sub' => 1,
                'is_active' => 1,
                'program_id' => 45,
                'type_id' => 48,
                'created_at' => '2024-10-04 09:14:03',
                'updated_at' => '2024-10-10 14:48:51',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'GRANT',
                'others' => 'n/a',
                'is_sub' => 1,
                'is_active' => 1,
                'program_id' => 45,
                'type_id' => 48,
                'created_at' => '2024-10-04 09:14:11',
                'updated_at' => '2024-10-10 14:49:48',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'GREAT-M',
                'others' => 'n/a',
                'is_sub' => 1,
                'is_active' => 1,
                'program_id' => 45,
                'type_id' => 48,
                'created_at' => '2024-10-04 09:14:22',
                'updated_at' => '2024-10-10 14:50:28',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'IP',
                'others' => 'n/a',
                'is_sub' => 1,
                'is_active' => 1,
                'program_id' => 45,
                'type_id' => 48,
                'created_at' => '2024-10-04 09:14:28',
                'updated_at' => '2024-10-10 14:50:33',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'JLAP-RA',
                'others' => 'n/a',
                'is_sub' => 1,
                'is_active' => 1,
                'program_id' => 45,
                'type_id' => 49,
                'created_at' => '2024-10-04 09:14:43',
                'updated_at' => '2024-10-10 14:43:41',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'JLSS',
                'others' => 'n/a',
                'is_sub' => 1,
                'is_active' => 1,
                'program_id' => 45,
                'type_id' => 49,
                'created_at' => '2024-10-04 09:14:53',
                'updated_at' => '2024-10-10 14:43:54',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'JLSS-BS MET',
                'others' => 'n/a',
                'is_sub' => 1,
                'is_active' => 1,
                'program_id' => 45,
                'type_id' => 49,
                'created_at' => '2024-10-04 09:15:07',
                'updated_at' => '2024-10-10 14:43:59',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'LADDERIZED',
                'others' => 'n/a',
                'is_sub' => 1,
                'is_active' => 1,
                'program_id' => 45,
                'type_id' => 48,
                'created_at' => '2024-10-04 09:15:21',
                'updated_at' => '2024-10-04 09:15:21',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'MAINSTREAM',
                'others' => 'n/a',
                'is_sub' => 1,
                'is_active' => 1,
                'program_id' => 45,
                'type_id' => 48,
                'created_at' => '2024-10-04 09:15:33',
                'updated_at' => '2024-10-04 09:15:33',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'MERIT-B',
                'others' => 'n/a',
                'is_sub' => 1,
                'is_active' => 1,
                'program_id' => 45,
                'type_id' => 48,
                'created_at' => '2024-10-04 09:15:42',
                'updated_at' => '2024-10-04 09:15:42',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'NAPOCOR',
                'others' => 'n/a',
                'is_sub' => 1,
                'is_active' => 1,
                'program_id' => 45,
                'type_id' => 48,
                'created_at' => '2024-10-04 09:15:51',
                'updated_at' => '2024-10-04 09:15:51',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'PROJECT 2004-01 ED.',
                'others' => 'n/a',
                'is_sub' => 1,
                'is_active' => 1,
                'program_id' => 45,
                'type_id' => 48,
                'created_at' => '2024-10-04 09:16:09',
                'updated_at' => '2024-10-04 09:16:09',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'RA-SS',
                'others' => 'n/a',
                'is_sub' => 1,
                'is_active' => 1,
                'program_id' => 45,
                'type_id' => 48,
                'created_at' => '2024-10-04 09:16:20',
                'updated_at' => '2024-10-04 09:16:20',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'RA-SSSG',
                'others' => 'n/a',
                'is_sub' => 1,
                'is_active' => 1,
                'program_id' => 45,
                'type_id' => 48,
                'created_at' => '2024-10-04 09:16:31',
                'updated_at' => '2024-10-04 09:16:31',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'SFA',
                'others' => 'n/a',
                'is_sub' => 1,
                'is_active' => 1,
                'program_id' => 45,
                'type_id' => 48,
                'created_at' => '2024-10-04 09:16:39',
                'updated_at' => '2024-10-04 09:16:39',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'SOPHOMORE',
                'others' => 'n/a',
                'is_sub' => 1,
                'is_active' => 1,
                'program_id' => 45,
                'type_id' => 48,
                'created_at' => '2024-10-04 09:16:51',
                'updated_at' => '2024-10-04 09:16:51',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'BEST FOR IP',
                'others' => 'n/a',
                'is_sub' => 1,
                'is_active' => 1,
                'program_id' => 45,
                'type_id' => 48,
                'created_at' => '2024-10-04 09:17:00',
                'updated_at' => '2024-10-04 09:17:00',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'INTAPS',
                'others' => 'n/a',
                'is_sub' => 1,
                'is_active' => 1,
                'program_id' => 47,
                'type_id' => 48,
                'created_at' => '2024-10-04 09:17:20',
                'updated_at' => '2024-10-04 09:17:20',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'IPSED',
                'others' => 'n/a',
                'is_sub' => 1,
                'is_active' => 1,
                'program_id' => 47,
                'type_id' => 48,
                'created_at' => '2024-10-04 09:17:39',
                'updated_at' => '2024-10-04 09:17:39',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'JLAP',
                'others' => 'n/a',
                'is_sub' => 1,
                'is_active' => 1,
                'program_id' => 47,
                'type_id' => 49,
                'created_at' => '2024-10-04 09:17:52',
                'updated_at' => '2024-10-10 14:44:15',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'JLAP-MERIT',
                'others' => 'n/a',
                'is_sub' => 1,
                'is_active' => 1,
                'program_id' => 47,
                'type_id' => 49,
                'created_at' => '2024-10-04 09:18:02',
                'updated_at' => '2024-10-10 14:44:20',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'JLSS',
                'others' => 'n/a',
                'is_sub' => 1,
                'is_active' => 1,
                'program_id' => 47,
                'type_id' => 49,
                'created_at' => '2024-10-04 09:18:17',
                'updated_at' => '2024-10-10 14:44:26',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'MERIT-ALT',
                'others' => 'n/a',
                'is_sub' => 1,
                'is_active' => 1,
                'program_id' => 47,
                'type_id' => 48,
                'created_at' => '2024-10-04 09:18:43',
                'updated_at' => '2024-10-04 09:18:43',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'MERIT-SS',
                'others' => 'n/a',
                'is_sub' => 1,
                'is_active' => 1,
                'program_id' => 47,
                'type_id' => 48,
                'created_at' => '2024-10-04 09:18:55',
                'updated_at' => '2024-10-04 09:18:55',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'MERIT-SSSG',
                'others' => 'n/a',
                'is_sub' => 1,
                'is_active' => 1,
                'program_id' => 47,
                'type_id' => 48,
                'created_at' => '2024-10-04 09:19:07',
                'updated_at' => '2024-10-04 09:19:07',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'NAPOCOR',
                'others' => 'n/a',
                'is_sub' => 1,
                'is_active' => 1,
                'program_id' => 47,
                'type_id' => 48,
                'created_at' => '2024-10-04 09:19:19',
                'updated_at' => '2024-10-04 09:19:19',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'NSDB',
                'others' => 'n/a',
                'is_sub' => 1,
                'is_active' => 1,
                'program_id' => 47,
                'type_id' => 48,
                'created_at' => '2024-10-04 09:19:28',
                'updated_at' => '2024-10-04 09:19:28',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'NSTA',
                'others' => 'n/a',
                'is_sub' => 1,
                'is_active' => 1,
                'program_id' => 47,
                'type_id' => 48,
                'created_at' => '2024-10-04 09:19:35',
                'updated_at' => '2024-10-04 09:19:35',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'PROJECT 7405 ED.',
                'others' => 'n/a',
                'is_sub' => 1,
                'is_active' => 1,
                'program_id' => 47,
                'type_id' => 48,
                'created_at' => '2024-10-04 09:19:54',
                'updated_at' => '2024-10-04 09:19:54',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'PROJECT 7707 ED.',
                'others' => 'n/a',
                'is_sub' => 1,
                'is_active' => 1,
                'program_id' => 47,
                'type_id' => 48,
                'created_at' => '2024-10-04 09:20:12',
                'updated_at' => '2024-10-04 09:20:12',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'PROJECT 8102 ED.',
                'others' => 'n/a',
                'is_sub' => 1,
                'is_active' => 1,
                'program_id' => 47,
                'type_id' => 48,
                'created_at' => '2024-10-04 09:20:25',
                'updated_at' => '2024-10-04 09:20:25',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'PROJECT 884-121D',
                'others' => 'n/a',
                'is_sub' => 1,
                'is_active' => 1,
                'program_id' => 47,
                'type_id' => 48,
                'created_at' => '2024-10-04 09:20:47',
                'updated_at' => '2024-10-04 09:20:47',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'PROJECT 8901 ED.',
                'others' => 'n/a',
                'is_sub' => 1,
                'is_active' => 1,
                'program_id' => 47,
                'type_id' => 48,
                'created_at' => '2024-10-04 09:21:04',
                'updated_at' => '2024-10-04 09:21:04',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'PROJECT 9001 ED.',
                'others' => 'n/a',
                'is_sub' => 1,
                'is_active' => 1,
                'program_id' => 47,
                'type_id' => 48,
                'created_at' => '2024-10-04 09:21:14',
                'updated_at' => '2024-10-04 09:21:14',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'REPLACEMENT',
                'others' => 'n/a',
                'is_sub' => 1,
                'is_active' => 1,
                'program_id' => 47,
                'type_id' => 48,
                'created_at' => '2024-10-04 09:21:24',
                'updated_at' => '2024-10-04 09:21:24',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'SFA',
                'others' => 'n/a',
                'is_sub' => 1,
                'is_active' => 1,
                'program_id' => 47,
                'type_id' => 48,
                'created_at' => '2024-10-04 09:21:33',
                'updated_at' => '2024-10-10 14:44:48',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'SOPHOMORE',
                'others' => 'n/a',
                'is_sub' => 1,
                'is_active' => 1,
                'program_id' => 47,
                'type_id' => 48,
                'created_at' => '2024-10-04 09:21:47',
                'updated_at' => '2024-10-10 14:44:45',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'SSSG',
                'others' => 'n/a',
                'is_sub' => 1,
                'is_active' => 1,
                'program_id' => 47,
                'type_id' => 48,
                'created_at' => '2024-10-04 09:21:57',
                'updated_at' => '2024-10-10 14:44:42',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'CSF',
                'others' => 'n/a',
                'is_sub' => 1,
                'is_active' => 1,
                'program_id' => 46,
                'type_id' => 49,
                'created_at' => '2024-10-04 09:22:04',
                'updated_at' => '2024-10-10 14:51:01',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'SFA',
                'others' => 'n/a',
                'is_sub' => 1,
                'is_active' => 1,
                'program_id' => 46,
                'type_id' => 49,
                'created_at' => '2024-10-04 09:22:11',
                'updated_at' => '2024-10-10 14:51:05',
            ),
        ));

        
    }
}