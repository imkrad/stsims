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
        

        \DB::table('school_campus_names')->truncate();
        
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
            17 => 
            array (
                'id' => 18,
                'name' => 'MINDANAO STATE UNIVERSITY-MARAWI CITY',
                'campus_id' => 18,
                'created_at' => '2024-11-30 23:35:24',
                'updated_at' => '2024-11-30 23:35:24',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'MINDANAO STATE UNIVERSITY-MARAWI',
                'campus_id' => 18,
                'created_at' => '2024-12-03 08:35:54',
                'updated_at' => '2024-12-03 08:35:54',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'SULU STATE COLLEGE LABORATORY HIGH SCHOOL',
                'campus_id' => 46,
                'created_at' => '2024-12-03 09:06:35',
                'updated_at' => '2024-12-03 09:06:35',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'COLAND SYSTEMS TECHNOLOGY, INC',
                'campus_id' => 48,
                'created_at' => '2024-12-03 09:14:02',
                'updated_at' => '2024-12-03 09:14:02',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'UNIVERSITY OF THE PHILIPPINES-BAGUIO',
                'campus_id' => 52,
                'created_at' => '2024-12-03 09:46:05',
                'updated_at' => '2024-12-03 09:46:05',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'DR. P. OCAMPO COLLEGES, INC.-COTABATO CITY',
                'campus_id' => 49,
                'created_at' => '2024-12-03 09:51:08',
                'updated_at' => '2024-12-03 09:51:08',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'MINDANAO STATE UNIVERSITY-TAWI-TAWI',
                'campus_id' => 43,
                'created_at' => '2024-12-03 09:51:26',
                'updated_at' => '2024-12-03 09:51:26',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'MINDANAO STATE UNIVERSITY-MAGUINDANAO',
                'campus_id' => 42,
                'created_at' => '2024-12-03 09:52:08',
                'updated_at' => '2024-12-03 09:52:08',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'HADJI BATU SCHOOL OF ARTS AND TRADES',
                'campus_id' => 44,
                'created_at' => '2024-12-03 09:53:20',
                'updated_at' => '2024-12-03 09:53:20',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'MINDANAO STATE UNIVERSITY-SULU',
                'campus_id' => 41,
                'created_at' => '2024-12-03 09:53:57',
                'updated_at' => '2024-12-03 09:53:57',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'BENGUET STATE UNIVERSITY',
                'campus_id' => 53,
                'created_at' => '2024-12-03 09:57:30',
                'updated_at' => '2024-12-03 09:57:30',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'ABRA STATE INSTITUTE OF SCIENCE AND TECHNOLOGY',
                'campus_id' => 54,
                'created_at' => '2024-12-03 10:04:58',
                'updated_at' => '2024-12-03 10:04:58',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'IFUGAO STATE COLLEGE OF AGRICULTURE AND FORESTRY',
                'campus_id' => 55,
                'created_at' => '2024-12-03 10:12:10',
                'updated_at' => '2024-12-03 10:12:10',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'GOV. BADO DANGWA INDUSTRIAL SCHOOL',
                'campus_id' => 56,
                'created_at' => '2024-12-03 10:27:30',
                'updated_at' => '2024-12-03 10:27:30',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'UNIVERSITY OF BAGUIO',
                'campus_id' => 57,
                'created_at' => '2024-12-03 10:53:26',
                'updated_at' => '2024-12-03 10:53:26',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'MOUNTAIN PROVINCE STATE POLYTECHNIC COLLEGE',
                'campus_id' => 58,
                'created_at' => '2024-12-03 11:02:55',
                'updated_at' => '2024-12-03 11:02:55',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'BETI COLLEGE OF TECHNOLOGY',
                'campus_id' => 59,
                'created_at' => '2024-12-03 11:10:27',
                'updated_at' => '2024-12-03 11:10:27',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'KALINGA-APAYAO STATE COLLEGE',
                'campus_id' => 60,
                'created_at' => '2024-12-03 11:21:08',
                'updated_at' => '2024-12-03 11:21:08',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'AMA COMPUTER LEARNING CENTER-BAGUIO CITY',
                'campus_id' => 61,
                'created_at' => '2024-12-03 13:32:31',
                'updated_at' => '2024-12-03 13:32:31',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'UNIVERSITY OF THE CORDILLERAS',
                'campus_id' => 62,
                'created_at' => '2024-12-03 13:36:21',
                'updated_at' => '2024-12-03 13:36:21',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'DATA CENTER OF THE PHILIPPINES',
                'campus_id' => 63,
                'created_at' => '2024-12-03 13:43:39',
                'updated_at' => '2024-12-03 13:43:39',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'APAYAO STATE COLLEGE',
                'campus_id' => 64,
                'created_at' => '2024-12-03 13:48:16',
                'updated_at' => '2024-12-03 13:48:16',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'PHILIPPINE SCIENCE AND TECHNOLOGY CENTER-BAGUIO',
                'campus_id' => 65,
                'created_at' => '2024-12-03 13:54:20',
                'updated_at' => '2024-12-03 13:54:20',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'SENTRO NG AGHAM PILIPINO-BENGUET',
                'campus_id' => 66,
                'created_at' => '2024-12-03 14:05:44',
                'updated_at' => '2024-12-03 14:05:44',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'IFUGAO STATE UNIVERSITY',
                'campus_id' => 55,
                'created_at' => '2024-12-03 14:06:47',
                'updated_at' => '2024-12-03 14:06:47',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'MT. PROVINCE STATE POLYTECHNIC COLLEGE',
                'campus_id' => 58,
                'created_at' => '2024-12-03 14:07:15',
                'updated_at' => '2024-12-03 14:07:15',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'CARAGA STATE UNIVERSITY-BUTUAN CITY',
                'campus_id' => 67,
                'created_at' => '2024-12-04 10:20:51',
                'updated_at' => '2024-12-04 10:20:51',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'SURIGAO DEL NORTE STATE UNIVERSITY-SURIGAO CITY',
                'campus_id' => 68,
                'created_at' => '2024-12-04 10:26:32',
                'updated_at' => '2024-12-04 10:26:32',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'SAINT JOSEPH INSTITUTE OF TECHNOLOGY-BUTUAN CITY',
                'campus_id' => 69,
                'created_at' => '2024-12-04 10:33:41',
                'updated_at' => '2024-12-04 10:33:41',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'URIOS COLLEGE',
                'campus_id' => 70,
                'created_at' => '2024-12-04 10:36:45',
                'updated_at' => '2024-12-04 10:36:45',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'FATHER SATURNINO URIOS UNIVERSITY',
                'campus_id' => 70,
                'created_at' => '2024-12-04 10:36:56',
                'updated_at' => '2024-12-04 10:36:56',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'SAN NICOLAS COLLEGE-SURIGAO CITY',
                'campus_id' => 71,
                'created_at' => '2024-12-04 10:42:24',
                'updated_at' => '2024-12-04 10:42:24',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'SURIGAO DEL NORTE STATE UNIVERSITY-MAINIT',
                'campus_id' => 72,
                'created_at' => '2024-12-04 10:45:58',
                'updated_at' => '2024-12-04 10:45:58',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'SYSTEMS TECHNOLOGY INSTITUTE',
                'campus_id' => 73,
                'created_at' => '2024-12-04 10:49:02',
                'updated_at' => '2024-12-04 10:49:02',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'COMPUTER REASEARCH NETWORK INC.',
                'campus_id' => 74,
                'created_at' => '2024-12-04 10:53:45',
                'updated_at' => '2024-12-04 10:53:45',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'NORTH EASTERN MINDANAO STATE UNIVERSITY-TANDAG CITY',
                'campus_id' => 75,
                'created_at' => '2024-12-04 11:02:05',
                'updated_at' => '2024-12-04 11:02:05',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'NORTH EASTERN MINDANAO STATE UNIVERSITY-LIANGA',
                'campus_id' => 76,
                'created_at' => '2024-12-04 11:02:16',
                'updated_at' => '2024-12-04 11:02:16',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'NORTH EASTERN MINDANAO STATE UNIVERSITY-CANTILAN',
                'campus_id' => 77,
                'created_at' => '2024-12-04 11:02:28',
                'updated_at' => '2024-12-04 11:02:28',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'NORTH EASTERN MINDANAO STATE UNIVERSITY-BISLIG',
                'campus_id' => 78,
                'created_at' => '2024-12-04 11:02:41',
                'updated_at' => '2024-12-04 11:02:41',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'SAINT PAUL UNIVERSITY-SURIGAO CITY',
                'campus_id' => 71,
                'created_at' => '2024-12-04 11:05:02',
                'updated_at' => '2024-12-04 11:05:02',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'SYSTEMS TECHNOLOGY INSTITUTE COLLEGE-SURIGAO CITY',
                'campus_id' => 79,
                'created_at' => '2024-12-04 11:09:11',
                'updated_at' => '2024-12-04 11:09:11',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'PHILIPPINE NORMAL UNIVERSITY-MINDANAO',
                'campus_id' => 81,
                'created_at' => '2024-12-04 11:15:06',
                'updated_at' => '2024-12-04 11:15:06',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'AGUSAN DEL SUR STATE COLLEGE OF AGRICULTURE AND TECHNOLOGY',
                'campus_id' => 82,
                'created_at' => '2024-12-04 11:16:10',
                'updated_at' => '2024-12-04 11:16:10',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'UNIVERSITY OF SOUTHEASTERN PHILIPPINES-BISLIG',
                'campus_id' => 84,
                'created_at' => '2024-12-04 11:21:00',
                'updated_at' => '2024-12-04 11:21:00',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'CARAGA STATE UNIVERSITY-CABADBARAN',
                'campus_id' => 85,
                'created_at' => '2024-12-04 11:23:46',
                'updated_at' => '2024-12-04 11:23:46',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'SURIGAO DOCTOR`S COLLEGE',
                'campus_id' => 86,
                'created_at' => '2024-12-04 11:26:36',
                'updated_at' => '2024-12-04 11:26:36',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'BUTUAN DOCTORS COLLEGE',
                'campus_id' => 87,
                'created_at' => '2024-12-04 11:31:36',
                'updated_at' => '2024-12-04 11:31:36',
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'NOTRE DAME OF MARBEL UNIVERSITY',
                'campus_id' => 88,
                'created_at' => '2024-12-04 11:40:41',
                'updated_at' => '2024-12-04 11:40:41',
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'UNIVERSITY OF SOUTHERN MINDANAO-KABACAN',
                'campus_id' => 89,
                'created_at' => '2024-12-04 11:46:19',
                'updated_at' => '2024-12-04 11:46:19',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'UNIVERSITY OF SOUTHERN MINDANAO',
                'campus_id' => 89,
                'created_at' => '2024-12-04 11:46:25',
                'updated_at' => '2024-12-04 11:46:25',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'UNIVERSITY OF SOUTHERN MINDANAO-KIDAPAWAN',
                'campus_id' => 90,
                'created_at' => '2024-12-04 11:46:36',
                'updated_at' => '2024-12-04 11:46:36',
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'AMA COMPUTER LEARNING CENTER-CAGAYAN DE ORO',
                'campus_id' => 91,
                'created_at' => '2024-12-05 12:50:48',
                'updated_at' => '2024-12-05 12:50:48',
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'BUKIDNON MIDLAND COLLEGE',
                'campus_id' => 92,
                'created_at' => '2024-12-05 13:23:54',
                'updated_at' => '2024-12-05 13:23:54',
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'BUKIDNON STATE UNIVERSITY',
                'campus_id' => 93,
                'created_at' => '2024-12-06 09:26:53',
                'updated_at' => '2024-12-06 09:26:53',
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'CAGAYAN CAPITOL COLLEGE',
                'campus_id' => 94,
                'created_at' => '2024-12-06 09:28:59',
                'updated_at' => '2024-12-06 09:28:59',
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'CAGAYAN DE ORO COLLEGE',
                'campus_id' => 95,
                'created_at' => '2024-12-06 09:32:09',
                'updated_at' => '2024-12-06 09:32:09',
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'CAMIGUIN POLYTECHNIC STATE COLLEGE',
                'campus_id' => 96,
                'created_at' => '2024-12-06 09:35:42',
                'updated_at' => '2024-12-06 09:35:42',
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'CAPITOL UNIVERSITY',
                'campus_id' => 94,
                'created_at' => '2024-12-06 09:44:34',
                'updated_at' => '2024-12-06 09:44:34',
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'CENTRAL MINDANAO UNIVERSITY',
                'campus_id' => 97,
                'created_at' => '2024-12-06 11:44:31',
                'updated_at' => '2024-12-06 11:44:31',
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'FATIMA COLLEGE OF CAMIGUIN',
                'campus_id' => 98,
                'created_at' => '2024-12-07 13:45:06',
                'updated_at' => '2024-12-07 13:45:06',
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'GOVERNOR ALFONSO D. TAN COLLEGE',
                'campus_id' => 99,
                'created_at' => '2024-12-07 13:48:31',
                'updated_at' => '2024-12-07 13:48:31',
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'LICEO DE CAGAYAN UNIVERSITY',
                'campus_id' => 100,
                'created_at' => '2024-12-07 13:51:27',
                'updated_at' => '2024-12-07 13:51:27',
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'LOURDES COLLEGE-CAGAYAN DE ORO CITY',
                'campus_id' => 101,
                'created_at' => '2024-12-07 13:54:18',
                'updated_at' => '2024-12-07 13:54:18',
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'MINDANAO STATE UNIVERSITY-IIT',
                'campus_id' => 102,
                'created_at' => '2024-12-07 13:58:39',
                'updated_at' => '2024-12-07 13:58:39',
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'MINDANAO STATE UNIVERSITY-MAIGO',
                'campus_id' => 103,
                'created_at' => '2024-12-07 14:01:17',
                'updated_at' => '2024-12-07 14:01:17',
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'MINDANAO STATE UNIVERSITY-NAAWAN',
                'campus_id' => 104,
                'created_at' => '2024-12-07 14:04:07',
                'updated_at' => '2024-12-07 14:04:07',
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'MISAMIS ORIENTAL STATE COLLEGE OF AGRICULTURE AND TECHNOLOGY',
                'campus_id' => 105,
                'created_at' => '2024-12-07 14:08:28',
                'updated_at' => '2024-12-07 14:08:28',
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'MISAMIS UNIVERSITY-OZAMIS CITY',
                'campus_id' => 106,
                'created_at' => '2024-12-07 14:11:10',
                'updated_at' => '2024-12-07 14:11:10',
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'MOUNTAIN VIEW COLLEGE',
                'campus_id' => 107,
                'created_at' => '2024-12-07 14:13:30',
                'updated_at' => '2024-12-07 14:13:30',
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'NORTHWESTERN MINDANAO STATE COLLEGE OF SCIENCE AND TECHNOLOGY',
                'campus_id' => 108,
                'created_at' => '2024-12-07 14:17:09',
                'updated_at' => '2024-12-07 14:17:09',
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'OPOL NATIONAL SECONDARY TECH SCHOOL',
                'campus_id' => 109,
                'created_at' => '2024-12-07 14:20:37',
                'updated_at' => '2024-12-07 14:20:37',
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'OZAMIS CITY SCHOOL OF ARTS AND TRADES',
                'campus_id' => 110,
                'created_at' => '2024-12-07 14:23:31',
                'updated_at' => '2024-12-07 14:23:31',
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'SAN ISIDRO COLLEGE-MALAYBALAY',
                'campus_id' => 111,
                'created_at' => '2024-12-07 14:25:43',
                'updated_at' => '2024-12-07 14:25:43',
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'SOUTHERN PHILIPPINE COLLEGE-CAGAYAN DE ORO CITY',
                'campus_id' => 112,
                'created_at' => '2024-12-07 14:39:30',
                'updated_at' => '2024-12-07 14:39:30',
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'UNIVERSITY OF SCIENCE AND TECHNOLOGY OF SOUTHERN PHILIPPINES-CAGAYAN DE ORO CITY',
                'campus_id' => 113,
                'created_at' => '2024-12-07 14:42:06',
                'updated_at' => '2024-12-07 14:42:06',
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'XAVIER UNIVERSITY-ATENEO DE CAGAYAN',
                'campus_id' => 114,
                'created_at' => '2024-12-07 14:43:59',
                'updated_at' => '2024-12-07 14:43:59',
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'AMA COMPUTER COLLEGE-CEBU',
                'campus_id' => 115,
                'created_at' => '2024-12-07 17:02:45',
                'updated_at' => '2024-12-07 17:02:45',
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'ASIAN COLLEGE DUMAGUETE',
                'campus_id' => 116,
                'created_at' => '2024-12-07 17:05:46',
                'updated_at' => '2024-12-07 17:05:46',
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'ASIAN COLLEGE OF SCIENCE AND TECHNOLOGY-DUMAGUETE CITY',
                'campus_id' => 116,
                'created_at' => '2024-12-07 17:07:09',
                'updated_at' => '2024-12-07 17:07:09',
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'ASIAN COLLEGE OF TECHNOLOGY-TALISAY CITY',
                'campus_id' => 117,
                'created_at' => '2024-12-07 17:10:09',
                'updated_at' => '2024-12-07 17:10:09',
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'BOHOL ISLAND STATE UNIVERSITY',
                'campus_id' => 118,
                'created_at' => '2024-12-09 08:38:28',
                'updated_at' => '2024-12-09 08:38:28',
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'BOHOL ISLAND STATE UNIVERSITY-BILAR',
                'campus_id' => 118,
                'created_at' => '2024-12-09 08:38:38',
                'updated_at' => '2024-12-09 08:38:38',
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'BOHOL ISLAND STATE UNIVERSITY-BALILIHAN',
                'campus_id' => 119,
                'created_at' => '2024-12-09 08:38:54',
                'updated_at' => '2024-12-09 08:38:54',
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'BOHOL ISLAND STATE UNIVERSITY-CALAPE',
                'campus_id' => 120,
                'created_at' => '2024-12-09 08:39:09',
                'updated_at' => '2024-12-09 08:39:09',
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'BOHOL ISLAND STATE UNIVERSITY-CANDIJAY',
                'campus_id' => 121,
                'created_at' => '2024-12-09 08:39:22',
                'updated_at' => '2024-12-09 08:39:22',
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'BOHOL ISLAND STATE UNIVERSITY-CLARIN',
                'campus_id' => 122,
                'created_at' => '2024-12-09 08:39:32',
                'updated_at' => '2024-12-09 08:39:32',
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'BOHOL ISLAND STATE UNIVERSITY-TAGBILARAN CITY',
                'campus_id' => 123,
                'created_at' => '2024-12-09 08:39:42',
                'updated_at' => '2024-12-09 08:39:42',
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'BOHOL WISDOM SCHOOL',
                'campus_id' => 124,
                'created_at' => '2024-12-09 08:45:54',
                'updated_at' => '2024-12-09 08:45:54',
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'CEBU EASTERN COLLEGE',
                'campus_id' => 125,
                'created_at' => '2024-12-09 08:48:57',
                'updated_at' => '2024-12-09 08:48:57',
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'CEBU INSTITUTE OF TECHNOLOGY-UNIVERSITY',
                'campus_id' => 126,
                'created_at' => '2024-12-09 08:51:41',
                'updated_at' => '2024-12-09 08:51:41',
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'CEBU NORMAL UNIVERSITY',
                'campus_id' => 127,
                'created_at' => '2024-12-09 08:55:03',
                'updated_at' => '2024-12-09 08:55:03',
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'CEBU TECHNOLOGICAL UNIVERSITY-TUBURAN',
                'campus_id' => 140,
                'created_at' => '2024-12-09 09:19:13',
                'updated_at' => '2024-12-09 09:19:13',
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'CEBU TECHNOLOGICAL UNIVERSITY-TABOGON',
                'campus_id' => 139,
                'created_at' => '2024-12-09 09:19:24',
                'updated_at' => '2024-12-09 09:19:24',
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'CEBU TECHNOLOGICAL UNIVERSITY-SAN REMEGIO',
                'campus_id' => 138,
                'created_at' => '2024-12-09 09:19:42',
                'updated_at' => '2024-12-09 09:19:42',
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'CEBU TECHNOLOGICAL UNIVERSITY-SAN FRANCISCO',
                'campus_id' => 137,
                'created_at' => '2024-12-09 09:19:56',
                'updated_at' => '2024-12-09 09:19:56',
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'CEBU TECHNOLOGICAL UNIVERSITY-MOALBOAL',
                'campus_id' => 136,
                'created_at' => '2024-12-09 09:20:21',
                'updated_at' => '2024-12-09 09:20:21',
            ),
            113 => 
            array (
                'id' => 114,
                'name' => 'CEBU TECHNOLOGICAL UNIVERSITY-DUMANJUG',
                'campus_id' => 135,
                'created_at' => '2024-12-09 09:20:37',
                'updated_at' => '2024-12-09 09:20:37',
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'CEBU TECHNOLOGICAL UNIVERSITY-DANAO CITY',
                'campus_id' => 134,
                'created_at' => '2024-12-09 09:21:27',
                'updated_at' => '2024-12-09 09:21:27',
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'CEBU TECHNOLOGICAL UNIVERSITY-DAANBANTAYAN',
                'campus_id' => 133,
                'created_at' => '2024-12-09 09:21:46',
                'updated_at' => '2024-12-09 09:21:46',
            ),
            116 => 
            array (
                'id' => 117,
                'name' => 'CEBU TECHNOLOGICAL UNIVERSITY-CARMEN',
                'campus_id' => 132,
                'created_at' => '2024-12-09 09:22:05',
                'updated_at' => '2024-12-09 09:22:05',
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'CEBU TECHNOLOGICAL UNIVERSITY-BARILI',
                'campus_id' => 131,
                'created_at' => '2024-12-09 09:22:22',
                'updated_at' => '2024-12-09 09:22:22',
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'CEBU TECHNOLOGICAL UNIVERSITY-BANTAYAN',
                'campus_id' => 130,
                'created_at' => '2024-12-09 09:22:44',
                'updated_at' => '2024-12-09 09:22:44',
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'CEBU TECHNOLOGICAL UNIVERSITY-ARGAO',
                'campus_id' => 129,
                'created_at' => '2024-12-09 09:23:01',
                'updated_at' => '2024-12-09 09:23:01',
            ),
            120 => 
            array (
                'id' => 121,
                'name' => 'CEBU TECHNOLOGICAL UNIVERSITY',
                'campus_id' => 128,
                'created_at' => '2024-12-09 09:23:19',
                'updated_at' => '2024-12-09 09:23:19',
            ),
            121 => 
            array (
                'id' => 122,
                'name' => 'CEBU TECHNICAL SCHOOL',
                'campus_id' => 128,
                'created_at' => '2024-12-09 09:23:28',
                'updated_at' => '2024-12-09 09:23:28',
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'CEBU TECHNOLOGICAL UNIVERSITY-CEBU CITY',
                'campus_id' => 128,
                'created_at' => '2024-12-09 09:23:38',
                'updated_at' => '2024-12-09 09:23:38',
            ),
            123 => 
            array (
                'id' => 124,
                'name' => 'CENTER FOR INDUSTRIAL TECHNOLOGY AND ENTERPRISE',
                'campus_id' => 141,
                'created_at' => '2024-12-09 09:57:38',
                'updated_at' => '2024-12-09 09:57:38',
            ),
            124 => 
            array (
                'id' => 125,
                'name' => 'CONSOLACION COMMUNITY COLLEGE',
                'campus_id' => 142,
                'created_at' => '2024-12-09 10:06:16',
                'updated_at' => '2024-12-09 10:06:16',
            ),
            125 => 
            array (
                'id' => 126,
                'name' => 'CRISTAL E-COLLEGE',
                'campus_id' => 143,
                'created_at' => '2024-12-09 10:18:03',
                'updated_at' => '2024-12-09 10:18:03',
            ),
            126 => 
            array (
                'id' => 127,
                'name' => 'FOUNDATION UNIVERSITY',
                'campus_id' => 144,
                'created_at' => '2024-12-09 10:20:16',
                'updated_at' => '2024-12-09 10:20:16',
            ),
            127 => 
            array (
                'id' => 128,
                'name' => 'HOLY NAME UNIVERSITY',
                'campus_id' => 145,
                'created_at' => '2024-12-09 10:23:48',
                'updated_at' => '2024-12-09 10:23:48',
            ),
            128 => 
            array (
                'id' => 129,
                'name' => 'MATER DEI COLLEGE-TUBIGON',
                'campus_id' => 146,
                'created_at' => '2024-12-09 10:26:11',
                'updated_at' => '2024-12-09 10:26:11',
            ),
            129 => 
            array (
                'id' => 130,
                'name' => 'MAXINO COLLEGE-DUMAGUETE',
                'campus_id' => 147,
                'created_at' => '2024-12-09 10:28:22',
                'updated_at' => '2024-12-09 10:28:22',
            ),
            130 => 
            array (
                'id' => 131,
                'name' => 'NEGROS ORIENTAL STATE UNIVERSITY',
                'campus_id' => 148,
                'created_at' => '2024-12-09 10:50:31',
                'updated_at' => '2024-12-09 10:50:31',
            ),
            131 => 
            array (
                'id' => 132,
                'name' => 'NEGROS ORIENTAL STATE UNIVERSITY-DUMAGUETE CITY',
                'campus_id' => 148,
                'created_at' => '2024-12-09 10:50:40',
                'updated_at' => '2024-12-09 10:50:40',
            ),
            132 => 
            array (
                'id' => 133,
                'name' => 'NEGROS ORIENTAL STATE UNIVERSITY-BAIS CITY',
                'campus_id' => 149,
                'created_at' => '2024-12-09 10:51:01',
                'updated_at' => '2024-12-09 10:51:01',
            ),
            133 => 
            array (
                'id' => 134,
                'name' => 'NEGROS ORIENTAL STATE UNIVERSITY-BAYAWAN CITY',
                'campus_id' => 151,
                'created_at' => '2024-12-09 10:51:39',
                'updated_at' => '2024-12-09 10:51:39',
            ),
            134 => 
            array (
                'id' => 135,
                'name' => 'NEGROS ORIENTAL STATE UNIVERSITY-GUIHULNGAN',
                'campus_id' => 153,
                'created_at' => '2024-12-09 10:52:09',
                'updated_at' => '2024-12-09 10:52:09',
            ),
            135 => 
            array (
                'id' => 136,
                'name' => 'NEGROS ORIENTAL STATE UNIVERSITY-MAIN',
                'campus_id' => 148,
                'created_at' => '2024-12-09 10:52:25',
                'updated_at' => '2024-12-09 10:52:25',
            ),
            136 => 
            array (
                'id' => 137,
                'name' => 'NEGROS ORIENTAL STATE UNIVERSITY-PAMPLONA',
                'campus_id' => 154,
                'created_at' => '2024-12-09 10:52:41',
                'updated_at' => '2024-12-09 10:52:41',
            ),
            137 => 
            array (
                'id' => 138,
                'name' => 'NEGROS ORIENTAL STATE UNIVERSITY-SIATON',
                'campus_id' => 152,
                'created_at' => '2024-12-09 10:52:54',
                'updated_at' => '2024-12-09 10:52:54',
            ),
            138 => 
            array (
                'id' => 139,
                'name' => 'PHILIPPINE STATE COLLEGE OF AERONAUTICS-MACTAN',
                'campus_id' => 156,
                'created_at' => '2024-12-09 10:59:59',
                'updated_at' => '2024-12-09 10:59:59',
            ),
            139 => 
            array (
                'id' => 140,
                'name' => 'SAINT PAUL UNIVERSITY-DUMAGUETE CITY',
                'campus_id' => 157,
                'created_at' => '2024-12-09 11:05:29',
                'updated_at' => '2024-12-09 11:05:29',
            ),
            140 => 
            array (
                'id' => 141,
                'name' => 'SILLIMAN UNIVERSITY',
                'campus_id' => 158,
                'created_at' => '2024-12-09 11:07:38',
                'updated_at' => '2024-12-09 11:07:38',
            ),
            141 => 
            array (
                'id' => 142,
                'name' => 'SIQUIJOR STATE COLLEGE',
                'campus_id' => 159,
                'created_at' => '2024-12-09 11:09:28',
                'updated_at' => '2024-12-09 11:09:28',
            ),
            142 => 
            array (
                'id' => 143,
                'name' => 'SOUTHWESTERN UNIVERSITY PHINMA',
                'campus_id' => 160,
                'created_at' => '2024-12-09 11:12:49',
                'updated_at' => '2024-12-09 11:12:49',
            ),
            143 => 
            array (
                'id' => 144,
                'name' => 'ST. PAUL COLLEGE FOUNDATION, INC.BULACAO',
                'campus_id' => 161,
                'created_at' => '2024-12-09 11:17:42',
                'updated_at' => '2024-12-09 11:17:42',
            ),
            144 => 
            array (
                'id' => 145,
                'name' => 'ST. THERESA\'S COLLEGE-CEBU',
                'campus_id' => 162,
                'created_at' => '2024-12-09 11:24:30',
                'updated_at' => '2024-12-09 11:24:30',
            ),
            145 => 
            array (
                'id' => 146,
                'name' => 'SYSTEMS TECHNOLOGY INSTITUTE-BOHOL',
                'campus_id' => 163,
                'created_at' => '2024-12-09 11:27:19',
                'updated_at' => '2024-12-09 11:27:19',
            ),
            146 => 
            array (
                'id' => 147,
                'name' => 'TALISAY CITY COLLEGE-CEBU',
                'campus_id' => 164,
                'created_at' => '2024-12-09 11:29:04',
                'updated_at' => '2024-12-09 11:29:04',
            ),
            147 => 
            array (
                'id' => 148,
                'name' => 'UNIVERSITY OF BOHOL',
                'campus_id' => 165,
                'created_at' => '2024-12-09 11:30:46',
                'updated_at' => '2024-12-09 11:30:46',
            ),
            148 => 
            array (
                'id' => 149,
                'name' => 'UNIVERSITY OF CEBU',
                'campus_id' => 166,
                'created_at' => '2024-12-09 11:33:18',
                'updated_at' => '2024-12-09 11:33:18',
            ),
            149 => 
            array (
                'id' => 150,
                'name' => 'UNIVERSITY OF SAN CARLOS',
                'campus_id' => 167,
                'created_at' => '2024-12-09 11:35:59',
                'updated_at' => '2024-12-09 11:35:59',
            ),
            150 => 
            array (
                'id' => 151,
                'name' => 'UNIVERSITY OF SAN JOSE-RECOLETOS',
                'campus_id' => 168,
                'created_at' => '2024-12-09 11:39:22',
                'updated_at' => '2024-12-09 11:39:22',
            ),
            151 => 
            array (
                'id' => 152,
                'name' => 'UNIVERSITY OF SOUTHERN PHILIPPINES FOUNDATION',
                'campus_id' => 169,
                'created_at' => '2024-12-09 11:42:34',
                'updated_at' => '2024-12-09 11:42:34',
            ),
            152 => 
            array (
                'id' => 153,
                'name' => 'UNIVERSITY OF THE PHILIPPINES-CEBU',
                'campus_id' => 170,
                'created_at' => '2024-12-09 11:45:47',
                'updated_at' => '2024-12-09 11:45:47',
            ),
            153 => 
            array (
                'id' => 154,
                'name' => 'UNIVERSITY OF THE VISAYAS-CEBU CITY',
                'campus_id' => 171,
                'created_at' => '2024-12-09 11:53:46',
                'updated_at' => '2024-12-09 11:53:46',
            ),
            154 => 
            array (
                'id' => 155,
                'name' => 'VELEZ COLLEGE-CEBU',
                'campus_id' => 172,
                'created_at' => '2024-12-09 11:55:58',
                'updated_at' => '2024-12-09 11:55:58',
            ),
            155 => 
            array (
                'id' => 156,
                'name' => 'AKLAN CATHOLIC COLLEGE',
                'campus_id' => 173,
                'created_at' => '2024-12-09 12:01:19',
                'updated_at' => '2024-12-09 12:01:19',
            ),
            156 => 
            array (
                'id' => 157,
                'name' => 'AKLAN POLYTECHNIC INSTITUTE',
                'campus_id' => 173,
                'created_at' => '2024-12-09 12:02:49',
                'updated_at' => '2024-12-09 12:02:49',
            ),
            157 => 
            array (
                'id' => 158,
                'name' => 'AKLAN STATE UNIVERSITY',
                'campus_id' => 174,
                'created_at' => '2024-12-09 12:07:42',
                'updated_at' => '2024-12-09 12:07:42',
            ),
            158 => 
            array (
                'id' => 159,
                'name' => 'AKLAN STATE UNIVERSITY-BANGA',
                'campus_id' => 174,
                'created_at' => '2024-12-09 12:07:48',
                'updated_at' => '2024-12-09 12:07:48',
            ),
            159 => 
            array (
                'id' => 160,
                'name' => 'AKLAN STATE UNIVERSITY-IBAJAY',
                'campus_id' => 175,
                'created_at' => '2024-12-09 12:07:53',
                'updated_at' => '2024-12-09 12:07:53',
            ),
            160 => 
            array (
                'id' => 161,
                'name' => 'AKLAN STATE UNIVERSITY-KALIBO',
                'campus_id' => 176,
                'created_at' => '2024-12-09 12:08:30',
                'updated_at' => '2024-12-09 12:08:30',
            ),
            161 => 
            array (
                'id' => 162,
                'name' => 'AMA COMPUTER COLLEGE-BACOLOD CITY',
                'campus_id' => 177,
                'created_at' => '2024-12-09 12:38:52',
                'updated_at' => '2024-12-09 12:38:52',
            ),
            162 => 
            array (
                'id' => 163,
                'name' => 'AMA COMPUTER LEARNING CENTER-ILOILO',
                'campus_id' => 178,
                'created_at' => '2024-12-09 13:03:42',
                'updated_at' => '2024-12-09 13:03:42',
            ),
            163 => 
            array (
                'id' => 164,
                'name' => 'AMA COMPUTER LEARNING CENTER-KALIBO',
                'campus_id' => 179,
                'created_at' => '2024-12-09 13:03:55',
                'updated_at' => '2024-12-09 13:03:55',
            ),
            164 => 
            array (
                'id' => 165,
                'name' => 'AMA COMPUTER LEARNING CENTER-ROXAS CITY',
                'campus_id' => 180,
                'created_at' => '2024-12-09 13:04:05',
                'updated_at' => '2024-12-09 13:04:05',
            ),
            165 => 
            array (
                'id' => 166,
                'name' => 'ANTIQUE COLLEGE OF AGRICULTURE',
                'campus_id' => 181,
                'created_at' => '2024-12-09 13:06:02',
                'updated_at' => '2024-12-09 13:06:02',
            ),
            166 => 
            array (
                'id' => 167,
                'name' => 'ASSOCIATED COMPUTER SYSTEMS INSTITUTE',
                'campus_id' => 182,
                'created_at' => '2024-12-09 13:08:04',
                'updated_at' => '2024-12-09 13:08:04',
            ),
            167 => 
            array (
                'id' => 168,
                'name' => 'CABALUM WESTERN COLLEGE',
                'campus_id' => 183,
                'created_at' => '2024-12-09 13:09:38',
                'updated_at' => '2024-12-09 13:09:38',
            ),
            168 => 
            array (
                'id' => 169,
                'name' => 'CAPIZ INSTITUTE OF TECHNOLOGY',
                'campus_id' => 184,
                'created_at' => '2024-12-09 13:11:21',
                'updated_at' => '2024-12-09 13:11:21',
            ),
            169 => 
            array (
                'id' => 170,
                'name' => 'CAPIZ STATE UNIVERSITY',
                'campus_id' => 185,
                'created_at' => '2024-12-09 13:23:17',
                'updated_at' => '2024-12-09 13:23:17',
            ),
            170 => 
            array (
                'id' => 171,
                'name' => 'CAPIZ STATE UNIVERSITY-ROXAS CITY',
                'campus_id' => 185,
                'created_at' => '2024-12-09 13:23:28',
                'updated_at' => '2024-12-09 13:23:28',
            ),
            171 => 
            array (
                'id' => 172,
                'name' => 'CAPIZ STATE UNIVERSITY-BAILAN',
                'campus_id' => 190,
                'created_at' => '2024-12-09 13:23:41',
                'updated_at' => '2024-12-09 13:23:41',
            ),
            172 => 
            array (
                'id' => 173,
                'name' => 'CAPIZ STATE UNIVERSITY-PONTEVEDRA',
                'campus_id' => 190,
                'created_at' => '2024-12-09 13:23:48',
                'updated_at' => '2024-12-09 13:23:48',
            ),
            173 => 
            array (
                'id' => 174,
                'name' => 'CAPIZ STATE UNIVERSITY-BURIAS',
                'campus_id' => 186,
                'created_at' => '2024-12-09 13:24:01',
                'updated_at' => '2024-12-09 13:24:01',
            ),
            174 => 
            array (
                'id' => 175,
                'name' => 'CAPIZ STATE UNIVERSITY-DAYAO',
                'campus_id' => 187,
                'created_at' => '2024-12-09 13:24:13',
                'updated_at' => '2024-12-09 13:24:13',
            ),
            175 => 
            array (
                'id' => 176,
                'name' => 'CAPIZ STATE UNIVERSITY-DUMARAO',
                'campus_id' => 188,
                'created_at' => '2024-12-09 13:24:29',
                'updated_at' => '2024-12-09 13:24:29',
            ),
            176 => 
            array (
                'id' => 177,
                'name' => 'CAPIZ STATE UNIVERSITY-PILAR',
                'campus_id' => 189,
                'created_at' => '2024-12-09 13:24:51',
                'updated_at' => '2024-12-09 13:24:51',
            ),
            177 => 
            array (
                'id' => 178,
                'name' => 'CARLOS HILADO MEMORIAL STATE UNIVERSITY',
                'campus_id' => 191,
                'created_at' => '2024-12-09 13:31:18',
                'updated_at' => '2024-12-09 13:31:18',
            ),
            178 => 
            array (
                'id' => 179,
                'name' => 'CARLOS HILADO MEMORIAL STATE UNIVERSITY-TALISAY',
                'campus_id' => 191,
                'created_at' => '2024-12-09 13:31:28',
                'updated_at' => '2024-12-09 13:31:28',
            ),
            179 => 
            array (
                'id' => 180,
                'name' => 'CARLOS HILADO MEMORIAL STATE UNIVERSITY-ALIJIS',
                'campus_id' => 192,
                'created_at' => '2024-12-09 13:31:41',
                'updated_at' => '2024-12-09 13:31:41',
            ),
            180 => 
            array (
                'id' => 181,
                'name' => 'CARLOS HILADO MEMORIAL STATE UNIVERSITY-BINALBAGAN',
                'campus_id' => 193,
                'created_at' => '2024-12-09 13:31:54',
                'updated_at' => '2024-12-09 13:31:54',
            ),
            181 => 
            array (
                'id' => 182,
                'name' => 'CENTRAL PHILIPPINE UNIVERSITY',
                'campus_id' => 194,
                'created_at' => '2024-12-09 13:34:13',
                'updated_at' => '2024-12-09 13:34:13',
            ),
            182 => 
            array (
                'id' => 183,
                'name' => 'CENTRAL PHILIPPINES STATE UNIVERSITY',
                'campus_id' => 195,
                'created_at' => '2024-12-09 13:40:05',
                'updated_at' => '2024-12-09 13:40:05',
            ),
            183 => 
            array (
                'id' => 184,
                'name' => 'CENTRAL PHILIPPINES STATE UNIVERSITY-KABANKALAN CITY',
                'campus_id' => 195,
                'created_at' => '2024-12-09 13:40:16',
                'updated_at' => '2024-12-09 13:40:16',
            ),
            184 => 
            array (
                'id' => 185,
                'name' => 'COLEGIO DE SAN AGUSTIN-BACOLOD',
                'campus_id' => 196,
                'created_at' => '2024-12-09 13:42:48',
                'updated_at' => '2024-12-09 13:42:48',
            ),
            185 => 
            array (
                'id' => 186,
                'name' => 'COLEGIO SAN AGUSTIN',
                'campus_id' => 196,
                'created_at' => '2024-12-09 13:47:55',
                'updated_at' => '2024-12-09 13:47:55',
            ),
            186 => 
            array (
                'id' => 187,
                'name' => 'COMPUTER COLLEGE OF THE VISAYAS',
                'campus_id' => 197,
                'created_at' => '2024-12-09 13:52:08',
                'updated_at' => '2024-12-09 13:52:08',
            ),
            187 => 
            array (
                'id' => 188,
                'name' => 'DE PAUL COLLEGE',
                'campus_id' => 198,
                'created_at' => '2024-12-09 13:58:24',
                'updated_at' => '2024-12-09 13:58:24',
            ),
            188 => 
            array (
                'id' => 189,
                'name' => 'DOMINICAN COLLEGE OF ILOILO',
                'campus_id' => 199,
                'created_at' => '2024-12-09 14:01:50',
                'updated_at' => '2024-12-09 14:01:50',
            ),
            189 => 
            array (
                'id' => 190,
                'name' => 'FILAMER CHRISTIAN COLLEGE',
                'campus_id' => 200,
                'created_at' => '2024-12-09 14:05:15',
                'updated_at' => '2024-12-09 14:05:15',
            ),
            190 => 
            array (
                'id' => 191,
                'name' => 'GARCIA COLLEGE OF TECHNOLOGY',
                'campus_id' => 201,
                'created_at' => '2024-12-09 14:06:42',
                'updated_at' => '2024-12-09 14:06:42',
            ),
            191 => 
            array (
                'id' => 192,
                'name' => 'GUIMARAS STATE UNIVERSITY',
                'campus_id' => 202,
                'created_at' => '2024-12-09 14:11:50',
                'updated_at' => '2024-12-09 14:11:50',
            ),
            192 => 
            array (
                'id' => 193,
                'name' => 'GUIMARAS STATE UNIVERSITY-BUENAVISTA',
                'campus_id' => 202,
                'created_at' => '2024-12-09 14:11:56',
                'updated_at' => '2024-12-09 14:11:56',
            ),
            193 => 
            array (
                'id' => 194,
                'name' => 'ILOILO SCIENCE AND TECHNOLOGY UNIVERSITY',
                'campus_id' => 205,
                'created_at' => '2024-12-09 14:19:09',
                'updated_at' => '2024-12-09 14:19:09',
            ),
            194 => 
            array (
                'id' => 195,
                'name' => 'ILOILO SCIENCE AND TECHNOLOGY UNIVERSITY-LEON',
                'campus_id' => 206,
                'created_at' => '2024-12-09 14:19:21',
                'updated_at' => '2024-12-09 14:19:21',
            ),
            195 => 
            array (
                'id' => 196,
                'name' => 'ILOILO SCIENCE AND TECHNOLOGY UNIVERSITY-MIAG-AO',
                'campus_id' => 207,
                'created_at' => '2024-12-09 14:19:37',
                'updated_at' => '2024-12-09 14:19:37',
            ),
            196 => 
            array (
                'id' => 197,
                'name' => 'ILOILO STATE UNIVERSITY OF FISHERIES SCIENCE AND TECHNOLOGY-TIWI',
                'campus_id' => 208,
                'created_at' => '2024-12-09 14:30:52',
                'updated_at' => '2024-12-09 14:30:52',
            ),
            197 => 
            array (
                'id' => 198,
                'name' => 'ILOILO STATE UNIVERSITY OF FISHERIES SCIENCE AND TECHNOLOGY-DINGLE',
                'campus_id' => 209,
                'created_at' => '2024-12-09 14:31:09',
                'updated_at' => '2024-12-09 14:31:09',
            ),
            198 => 
            array (
                'id' => 199,
                'name' => 'ILOILO STATE UNIVERSITY OF FISHERIES SCIENCE AND TECHNOLOGY-DUMANGAS',
                'campus_id' => 210,
                'created_at' => '2024-12-09 14:31:25',
                'updated_at' => '2024-12-09 14:31:25',
            ),
            199 => 
            array (
                'id' => 200,
                'name' => 'ILOILO STATE UNIVERSITY OF FISHERIES SCIENCE AND TECHNOLOGY-BAROTAC NUEVO',
                'campus_id' => 211,
                'created_at' => '2024-12-09 14:31:42',
                'updated_at' => '2024-12-09 14:31:42',
            ),
            200 => 
            array (
                'id' => 201,
                'name' => 'INTERFACE COMPUTER COLLEGE-ILOILO',
                'campus_id' => 212,
                'created_at' => '2024-12-09 14:35:19',
                'updated_at' => '2024-12-09 14:35:19',
            ),
            201 => 
            array (
                'id' => 202,
                'name' => 'LA CARLOTA CITY COLLEGE',
                'campus_id' => 213,
                'created_at' => '2024-12-09 14:39:34',
                'updated_at' => '2024-12-09 14:39:34',
            ),
            202 => 
            array (
                'id' => 203,
                'name' => 'LASALTECH, INC.',
                'campus_id' => 214,
                'created_at' => '2024-12-09 14:43:26',
                'updated_at' => '2024-12-09 14:43:26',
            ),
            203 => 
            array (
                'id' => 204,
                'name' => 'NEGROS OCCIDENTAL AGRICULTURAL COLLEGE',
                'campus_id' => 195,
                'created_at' => '2024-12-09 14:51:56',
                'updated_at' => '2024-12-09 14:51:56',
            ),
            204 => 
            array (
                'id' => 205,
                'name' => 'NEGROS STATE COLLEGE OF AGRICULTURE',
                'campus_id' => 195,
                'created_at' => '2024-12-09 14:52:04',
                'updated_at' => '2024-12-09 14:52:04',
            ),
            205 => 
            array (
                'id' => 206,
                'name' => 'NORTHERN ILOILO STATE UNIVERSITY-ESTANCIA',
                'campus_id' => 215,
                'created_at' => '2024-12-09 14:57:21',
                'updated_at' => '2024-12-09 14:57:21',
            ),
            206 => 
            array (
                'id' => 207,
                'name' => 'NORTHERN ILOILO STATE UNIVERSITY-AJUY',
                'campus_id' => 216,
                'created_at' => '2024-12-09 14:57:29',
                'updated_at' => '2024-12-09 14:57:29',
            ),
            207 => 
            array (
                'id' => 208,
                'name' => 'NORTHERN ILOILO STATE UNIVERSITY-BAROTAC VIEJO',
                'campus_id' => 217,
                'created_at' => '2024-12-09 14:57:41',
                'updated_at' => '2024-12-09 14:57:41',
            ),
            208 => 
            array (
                'id' => 209,
                'name' => 'NORTHERN NEGROS STATE COLLEGE OF SCIENCE AND TECHNOLOGY',
                'campus_id' => 218,
                'created_at' => '2024-12-09 15:03:44',
                'updated_at' => '2024-12-09 15:03:44',
            ),
            209 => 
            array (
                'id' => 210,
                'name' => 'PANAY STATE POLYTECHNIC COLLEGE-PONTEVEDRA',
                'campus_id' => 190,
                'created_at' => '2024-12-09 15:17:56',
                'updated_at' => '2024-12-09 15:17:56',
            ),
            210 => 
            array (
                'id' => 211,
                'name' => 'PANAY STATE POLYTECHNIC COLLEGE-ROXAS',
                'campus_id' => 185,
                'created_at' => '2024-12-09 15:18:21',
                'updated_at' => '2024-12-09 15:18:21',
            ),
            211 => 
            array (
                'id' => 212,
                'name' => 'PANAY STATE POLYTECHNIC COLLEGE-CAPIZ',
                'campus_id' => 185,
                'created_at' => '2024-12-09 15:18:27',
                'updated_at' => '2024-12-09 15:18:27',
            ),
            212 => 
            array (
                'id' => 213,
                'name' => 'PANAY TECHNOLOGICAL COLLEGE',
                'campus_id' => 219,
                'created_at' => '2024-12-09 15:23:25',
                'updated_at' => '2024-12-09 15:23:25',
            ),
            213 => 
            array (
                'id' => 214,
                'name' => 'PHILIPPINE NORMAL UNIVERSITY-CADIZ',
                'campus_id' => 220,
                'created_at' => '2024-12-09 15:27:34',
                'updated_at' => '2024-12-09 15:27:34',
            ),
            214 => 
            array (
                'id' => 215,
                'name' => 'PHILIPPINE NORMAL UNIVERSITY-VISAYAS',
                'campus_id' => 220,
                'created_at' => '2024-12-09 15:27:39',
                'updated_at' => '2024-12-09 15:27:39',
            ),
            215 => 
            array (
                'id' => 216,
                'name' => 'PROFESSIONAL ELECTRONICS INSTITUTE-ILOILO',
                'campus_id' => 221,
                'created_at' => '2024-12-09 15:35:34',
                'updated_at' => '2024-12-09 15:35:34',
            ),
            216 => 
            array (
                'id' => 217,
                'name' => 'Roxas Memorial College of Arts and Trades',
                'campus_id' => 174,
                'created_at' => '2024-12-09 15:39:21',
                'updated_at' => '2024-12-09 15:39:21',
            ),
            217 => 
            array (
                'id' => 218,
                'name' => 'SAINT ANTHONY`S COLLEGE-ANTIQUE',
                'campus_id' => 222,
                'created_at' => '2024-12-09 16:56:47',
                'updated_at' => '2024-12-09 16:56:47',
            ),
            218 => 
            array (
                'id' => 219,
                'name' => 'SOUTHERN ILOILO POLYTECHNIC COLLEGE',
                'campus_id' => 207,
                'created_at' => '2024-12-09 16:58:21',
                'updated_at' => '2024-12-09 16:58:21',
            ),
            219 => 
            array (
                'id' => 220,
                'name' => 'SYSTEMS TECHNOLOGY INSTITUTE-BACOLOD',
                'campus_id' => 223,
                'created_at' => '2024-12-09 17:04:38',
                'updated_at' => '2024-12-09 17:04:38',
            ),
            220 => 
            array (
                'id' => 221,
                'name' => 'SYSTEMS TECHNOLOGY INSTITUTE-CAPIZ',
                'campus_id' => 224,
                'created_at' => '2024-12-09 17:04:49',
                'updated_at' => '2024-12-09 17:04:49',
            ),
            221 => 
            array (
                'id' => 222,
                'name' => 'SYSTEMS TECHNOLOGY INSTITUTE-ILOILO',
                'campus_id' => 225,
                'created_at' => '2024-12-09 17:04:59',
                'updated_at' => '2024-12-09 17:04:59',
            ),
            222 => 
            array (
                'id' => 223,
                'name' => 'SYSTEMS TECHNOLOGY INSTITUTE-KALIBO',
                'campus_id' => 226,
                'created_at' => '2024-12-09 17:05:09',
                'updated_at' => '2024-12-09 17:05:09',
            ),
            223 => 
            array (
                'id' => 224,
                'name' => 'SYSTEMS TECHNOLOGY INSTITUTE-ROXAS CITY',
                'campus_id' => 227,
                'created_at' => '2024-12-09 17:05:20',
                'updated_at' => '2024-12-09 17:05:20',
            ),
            224 => 
            array (
                'id' => 225,
                'name' => 'TECHNOLOGICAL UNIVERSITY OF THE PHILIPPINES-VISAYAS',
                'campus_id' => 229,
                'created_at' => '2024-12-09 17:10:24',
                'updated_at' => '2024-12-09 17:10:24',
            ),
            225 => 
            array (
                'id' => 226,
                'name' => 'TECHNOLOGICAL UNIVERSITY OF THE PHILIPPINES-SAGAY',
                'campus_id' => 230,
                'created_at' => '2024-12-09 17:13:11',
                'updated_at' => '2024-12-09 17:13:11',
            ),
            226 => 
            array (
                'id' => 227,
                'name' => 'TARIO LIM MEMORIAL SCHOOL OF FISHERIES',
                'campus_id' => 231,
                'created_at' => '2024-12-09 17:18:04',
                'updated_at' => '2024-12-09 17:18:04',
            ),
            227 => 
            array (
                'id' => 228,
                'name' => 'UNIVERSITY OF ANTIQUE',
                'campus_id' => 231,
                'created_at' => '2024-12-09 17:18:11',
                'updated_at' => '2024-12-09 17:18:11',
            ),
            228 => 
            array (
                'id' => 229,
                'name' => 'UNIVERSITY OF ANTIQUE-SIBALOM',
                'campus_id' => 231,
                'created_at' => '2024-12-09 17:18:22',
                'updated_at' => '2024-12-09 17:18:22',
            ),
            229 => 
            array (
                'id' => 230,
                'name' => 'UNIVERSITY OF ANTIQUE-HAMTIC',
                'campus_id' => 232,
                'created_at' => '2024-12-09 17:18:37',
                'updated_at' => '2024-12-09 17:18:37',
            ),
            230 => 
            array (
                'id' => 231,
                'name' => 'UNIVERSITY OF ANTIQUE-TIBIAO',
                'campus_id' => 233,
                'created_at' => '2024-12-09 17:18:48',
                'updated_at' => '2024-12-09 17:18:48',
            ),
            231 => 
            array (
                'id' => 232,
                'name' => 'UNIVERSITY OF ILOILO',
                'campus_id' => 234,
                'created_at' => '2024-12-09 17:20:54',
                'updated_at' => '2024-12-09 17:20:54',
            ),
            232 => 
            array (
                'id' => 233,
                'name' => 'UNIVERSITY OF NEGROS OCCIDENTAL-RECOLETOS',
                'campus_id' => 235,
                'created_at' => '2024-12-09 17:22:20',
                'updated_at' => '2024-12-09 17:22:20',
            ),
            233 => 
            array (
                'id' => 234,
                'name' => 'University of Saint La Salle',
                'campus_id' => 236,
                'created_at' => '2024-12-09 17:23:28',
                'updated_at' => '2024-12-09 17:23:28',
            ),
            234 => 
            array (
                'id' => 235,
                'name' => 'UNIVERSITY OF SAN AGUSTIN',
                'campus_id' => 237,
                'created_at' => '2024-12-09 17:25:07',
                'updated_at' => '2024-12-09 17:25:07',
            ),
            235 => 
            array (
                'id' => 236,
                'name' => 'WEST NEGROS COLLEGE',
                'campus_id' => 239,
                'created_at' => '2024-12-09 17:27:34',
                'updated_at' => '2024-12-09 17:27:34',
            ),
            236 => 
            array (
                'id' => 237,
                'name' => 'WEST VISAYAS STATE UNIVERSITY-CALINOG',
                'campus_id' => 243,
                'created_at' => '2024-12-09 17:33:26',
                'updated_at' => '2024-12-09 17:33:26',
            ),
            237 => 
            array (
                'id' => 238,
                'name' => 'WEST VISAYAS STATE UNIVERSITY-JANIUAY',
                'campus_id' => 244,
                'created_at' => '2024-12-09 17:33:37',
                'updated_at' => '2024-12-09 17:33:37',
            ),
            238 => 
            array (
                'id' => 239,
                'name' => 'WESTERN INSTITUTE OF TECHNOLOGY',
                'campus_id' => 245,
                'created_at' => '2024-12-09 17:34:36',
                'updated_at' => '2024-12-09 17:34:36',
            ),
            239 => 
            array (
                'id' => 240,
                'name' => 'WESTERN VISAYAS COLLEGE OF SCIENCE AND TECHNOLOGY',
                'campus_id' => 205,
                'created_at' => '2024-12-09 17:36:10',
                'updated_at' => '2024-12-09 17:36:10',
            ),
            240 => 
            array (
                'id' => 241,
                'name' => 'SYSTEMS TECHNOLOGY INSTITUTE-GEN. SANTOS CITY',
                'campus_id' => 249,
                'created_at' => '2024-12-10 10:01:47',
                'updated_at' => '2024-12-10 10:01:47',
            ),
            241 => 
            array (
                'id' => 242,
                'name' => 'SYSTEMS TECHNOLOGY INSTITUTE-TACURONG',
                'campus_id' => 247,
                'created_at' => '2024-12-10 10:01:58',
                'updated_at' => '2024-12-10 10:01:58',
            ),
            242 => 
            array (
                'id' => 243,
                'name' => 'SYSTEMS TECHNOLOGY INSTITUTE-KORONADAL',
                'campus_id' => 248,
                'created_at' => '2024-12-10 10:02:09',
                'updated_at' => '2024-12-10 10:02:09',
            ),
            243 => 
            array (
                'id' => 244,
                'name' => 'MINDANAO STATE UNIVERSITY-GENERAL SANTOS CITY',
                'campus_id' => 246,
                'created_at' => '2024-12-10 10:03:01',
                'updated_at' => '2024-12-10 10:03:01',
            ),
            244 => 
            array (
                'id' => 245,
                'name' => 'SYSTEMS TECHNOLOGY INSTITUTE-MARBEL',
                'campus_id' => 248,
                'created_at' => '2024-12-10 10:07:05',
                'updated_at' => '2024-12-10 10:07:05',
            ),
            245 => 
            array (
                'id' => 246,
                'name' => 'NORTH COTABATO COLLEGE OF ARTS AND TRADES',
                'campus_id' => 90,
                'created_at' => '2024-12-10 10:27:20',
                'updated_at' => '2024-12-10 10:27:20',
            ),
            246 => 
            array (
                'id' => 247,
                'name' => 'QUEZON COLLEGE OF SOUTHERN PHILIPPINES',
                'campus_id' => 251,
                'created_at' => '2024-12-10 10:31:22',
                'updated_at' => '2024-12-10 10:31:22',
            ),
            247 => 
            array (
                'id' => 248,
                'name' => 'NOTRE DAME OF KIDAPAWAN COLLEGE',
                'campus_id' => 252,
                'created_at' => '2024-12-10 10:39:37',
                'updated_at' => '2024-12-10 10:39:37',
            ),
            248 => 
            array (
                'id' => 249,
                'name' => 'NOTRE DAME OF DADIANGAS UNIVERSITY',
                'campus_id' => 253,
                'created_at' => '2024-12-10 10:40:43',
                'updated_at' => '2024-12-10 10:40:43',
            ),
            249 => 
            array (
                'id' => 250,
                'name' => 'NOTRE DAME OF MIDSAYAP COLLEGE',
                'campus_id' => 255,
                'created_at' => '2024-12-10 10:43:42',
                'updated_at' => '2024-12-10 10:43:42',
            ),
            250 => 
            array (
                'id' => 251,
                'name' => 'INTERFACE COMPUTER COLLEGE-KORONADAL',
                'campus_id' => 254,
                'created_at' => '2024-12-10 10:43:54',
                'updated_at' => '2024-12-10 10:43:54',
            ),
            251 => 
            array (
                'id' => 252,
                'name' => 'SULTAN KUDARAT STATE UNIVERSITY',
                'campus_id' => 256,
                'created_at' => '2024-12-10 10:46:05',
                'updated_at' => '2024-12-10 10:46:05',
            ),
            252 => 
            array (
                'id' => 253,
                'name' => 'SULTAN KUDARAT POLYTECHNIC STATE COLLEGE',
                'campus_id' => 256,
                'created_at' => '2024-12-10 10:46:12',
                'updated_at' => '2024-12-10 10:46:12',
            ),
            253 => 
            array (
                'id' => 254,
                'name' => 'SOUTHERN CHRISTIAN COLLEGE-MIDSAYAP',
                'campus_id' => 257,
                'created_at' => '2024-12-10 10:47:24',
                'updated_at' => '2024-12-10 10:47:24',
            ),
            254 => 
            array (
                'id' => 255,
                'name' => 'SOUTH EAST ASIAN INSTITUTE OF TECHNOLOGY-TUPI',
                'campus_id' => 258,
                'created_at' => '2024-12-10 10:50:52',
                'updated_at' => '2024-12-10 10:50:52',
            ),
            255 => 
            array (
                'id' => 256,
                'name' => 'RAMON MAGSAYSAY MEMORIAL COLLEGES-GENERAL SANTOS CITY',
                'campus_id' => 259,
                'created_at' => '2024-12-10 11:03:02',
                'updated_at' => '2024-12-10 11:03:02',
            ),
            256 => 
            array (
                'id' => 257,
                'name' => 'AMA COMPUTER LEARNING CENTER-GEN. SANTOS CITY',
                'campus_id' => 260,
                'created_at' => '2024-12-10 11:07:28',
                'updated_at' => '2024-12-10 11:07:28',
            ),
            257 => 
            array (
                'id' => 258,
                'name' => 'AMA COMPUTER LEARNING CENTER-MARBEL',
                'campus_id' => 261,
                'created_at' => '2024-12-10 11:10:18',
                'updated_at' => '2024-12-10 11:10:18',
            ),
            258 => 
            array (
                'id' => 259,
                'name' => 'Aces Tagum College',
                'campus_id' => 262,
                'created_at' => '2024-12-10 11:13:59',
                'updated_at' => '2024-12-10 11:13:59',
            ),
            259 => 
            array (
                'id' => 260,
                'name' => 'AMA COMPUTER LEARNING CENTER-TAGUM',
                'campus_id' => 264,
                'created_at' => '2024-12-10 11:19:11',
                'updated_at' => '2024-12-10 11:19:11',
            ),
            260 => 
            array (
                'id' => 261,
                'name' => 'ARRIESGADO COLLEGE FOUNDATION, INC.',
                'campus_id' => 265,
                'created_at' => '2024-12-10 11:19:20',
                'updated_at' => '2024-12-10 11:19:20',
            ),
            261 => 
            array (
                'id' => 262,
                'name' => 'ATENEO DE DAVAO UNIVERSITY',
                'campus_id' => 266,
                'created_at' => '2024-12-10 11:20:19',
                'updated_at' => '2024-12-10 11:20:19',
            ),
            262 => 
            array (
                'id' => 263,
                'name' => 'BROKENSHIRE COLLEGE',
                'campus_id' => 267,
                'created_at' => '2024-12-10 11:21:48',
                'updated_at' => '2024-12-10 11:21:48',
            ),
            263 => 
            array (
                'id' => 264,
                'name' => 'CARE COMPUTER SCHOOL, INC.-DIGOS CITY',
                'campus_id' => 268,
                'created_at' => '2024-12-10 11:24:01',
                'updated_at' => '2024-12-10 11:24:01',
            ),
            264 => 
            array (
                'id' => 265,
                'name' => 'COR JESU COLLEGE',
                'campus_id' => 269,
                'created_at' => '2024-12-10 11:25:12',
                'updated_at' => '2024-12-10 11:25:12',
            ),
            265 => 
            array (
                'id' => 266,
                'name' => 'DAVAO DE ORO STATE COLLEGE-COMPOSTELA',
                'campus_id' => 270,
                'created_at' => '2024-12-10 11:27:46',
                'updated_at' => '2024-12-10 11:27:46',
            ),
            266 => 
            array (
                'id' => 267,
                'name' => 'DAVAO DEL NORTE STATE COLLEGE',
                'campus_id' => 271,
                'created_at' => '2024-12-10 11:29:02',
                'updated_at' => '2024-12-10 11:29:02',
            ),
            267 => 
            array (
                'id' => 268,
                'name' => 'DAVAO DEL SUR STATE COLLEGE',
                'campus_id' => 272,
                'created_at' => '2024-12-10 11:30:35',
                'updated_at' => '2024-12-10 11:30:35',
            ),
            268 => 
            array (
                'id' => 269,
                'name' => 'DAVAO DOCTORS COLLEGE',
                'campus_id' => 273,
                'created_at' => '2024-12-10 11:31:39',
                'updated_at' => '2024-12-10 11:31:39',
            ),
            269 => 
            array (
                'id' => 270,
                'name' => 'DAVAO ORIENTAL STATE UNIVERSITY',
                'campus_id' => 274,
                'created_at' => '2024-12-10 11:32:55',
                'updated_at' => '2024-12-10 11:32:55',
            ),
            270 => 
            array (
                'id' => 271,
                'name' => 'DIGITAL INTERFACE',
                'campus_id' => 275,
                'created_at' => '2024-12-10 11:39:15',
                'updated_at' => '2024-12-10 11:39:15',
            ),
            271 => 
            array (
                'id' => 272,
                'name' => 'G. TABORIN TECHNICAL SCHOOL FOUDATION INC.',
                'campus_id' => 276,
                'created_at' => '2024-12-10 11:42:00',
                'updated_at' => '2024-12-10 11:42:00',
            ),
            272 => 
            array (
                'id' => 273,
                'name' => 'GOVERNOR GENEROSO COLLEGE OF ARTS SCIENCES AND TECHNOLOGY',
                'campus_id' => 277,
                'created_at' => '2024-12-10 11:44:02',
                'updated_at' => '2024-12-10 11:44:02',
            ),
            273 => 
            array (
                'id' => 274,
                'name' => 'HOLY CROSS OF DAVAO COLLEGE',
                'campus_id' => 278,
                'created_at' => '2024-12-10 11:45:13',
                'updated_at' => '2024-12-10 11:45:13',
            ),
            274 => 
            array (
                'id' => 275,
                'name' => 'KAPALONG COLLEGE OF AGRICULTURE SCIENCES AND TECHNOLOGY',
                'campus_id' => 280,
                'created_at' => '2024-12-10 11:47:48',
                'updated_at' => '2024-12-10 11:47:48',
            ),
            275 => 
            array (
                'id' => 276,
                'name' => 'KOLEHIYO NG PANTUKAN',
                'campus_id' => 281,
                'created_at' => '2024-12-10 11:49:12',
                'updated_at' => '2024-12-10 11:49:12',
            ),
            276 => 
            array (
                'id' => 277,
                'name' => 'MATS COLLEGE OF TECHNOLOGY',
                'campus_id' => 282,
                'created_at' => '2024-12-10 11:50:37',
                'updated_at' => '2024-12-10 11:50:37',
            ),
            277 => 
            array (
                'id' => 278,
                'name' => 'MONKAYO COLLEGE OF ARTS, SCIENCES AND TECHNOLOGY',
                'campus_id' => 283,
                'created_at' => '2024-12-10 11:53:47',
                'updated_at' => '2024-12-10 11:53:47',
            ),
            278 => 
            array (
                'id' => 279,
                'name' => 'PHILIPPINE SCHOOL OF TECHNOLOGY',
                'campus_id' => 284,
                'created_at' => '2024-12-10 11:56:07',
                'updated_at' => '2024-12-10 11:56:07',
            ),
            279 => 
            array (
                'id' => 280,
                'name' => 'SAINT JOHN PAUL II COLLEGE OF DAVAO',
                'campus_id' => 285,
                'created_at' => '2024-12-10 11:58:59',
                'updated_at' => '2024-12-10 11:58:59',
            ),
            280 => 
            array (
                'id' => 281,
                'name' => 'SAN PEDRO COLLEGE-DAVAO',
                'campus_id' => 286,
                'created_at' => '2024-12-10 12:04:49',
                'updated_at' => '2024-12-10 12:04:49',
            ),
            281 => 
            array (
                'id' => 282,
                'name' => 'SOUTHERN MINDANAO AQUAMARINE SCIENCE AND TECHNOLOGY',
                'campus_id' => 287,
                'created_at' => '2024-12-10 13:12:20',
                'updated_at' => '2024-12-10 13:12:20',
            ),
            282 => 
            array (
                'id' => 283,
                'name' => 'SOUTHERN PHILIPPINES AGRI BUSINESS MARINE, AQUATIC SCHOOL OF TECHNOLOGY',
                'campus_id' => 287,
                'created_at' => '2024-12-10 13:13:00',
                'updated_at' => '2024-12-10 13:13:00',
            ),
            283 => 
            array (
                'id' => 284,
                'name' => 'SOUTHERN PHILIPPINES AGRI-BUSINESS, MARINE AND AQUATIC S&T',
                'campus_id' => 287,
                'created_at' => '2024-12-10 13:13:08',
                'updated_at' => '2024-12-10 13:13:08',
            ),
            284 => 
            array (
                'id' => 285,
                'name' => 'SYSTEMS TECHNOLOGY INSTITUTE-DAVAO',
                'campus_id' => 288,
                'created_at' => '2024-12-10 13:14:35',
                'updated_at' => '2024-12-10 13:14:35',
            ),
            285 => 
            array (
                'id' => 286,
                'name' => 'SYSTEMS TECHNOLOGY INSTITUTE-DIGOS',
                'campus_id' => 289,
                'created_at' => '2024-12-10 13:14:45',
                'updated_at' => '2024-12-10 13:14:45',
            ),
            286 => 
            array (
                'id' => 287,
                'name' => 'TAGUM NATIONAL TRADE SCHOOL',
                'campus_id' => 290,
                'created_at' => '2024-12-10 13:16:27',
                'updated_at' => '2024-12-10 13:16:27',
            ),
            287 => 
            array (
                'id' => 288,
                'name' => 'UNIVERSITY OF IMMACULATE CONCEPTION-DAVAO',
                'campus_id' => 291,
                'created_at' => '2024-12-10 13:17:40',
                'updated_at' => '2024-12-10 13:17:40',
            ),
            288 => 
            array (
                'id' => 289,
                'name' => 'UNIVERSITY OF THE IMMACULATE CONCEPTION',
                'campus_id' => 291,
                'created_at' => '2024-12-10 13:18:02',
                'updated_at' => '2024-12-10 13:18:02',
            ),
            289 => 
            array (
                'id' => 290,
                'name' => 'UNIVERSITY OF MINDANAO-TAGUM',
                'campus_id' => 296,
                'created_at' => '2024-12-10 13:24:47',
                'updated_at' => '2024-12-10 13:24:47',
            ),
            290 => 
            array (
                'id' => 291,
                'name' => 'UNIVERSITY OF MINDANAO-MATINA',
                'campus_id' => 295,
                'created_at' => '2024-12-10 13:24:58',
                'updated_at' => '2024-12-10 13:24:58',
            ),
            291 => 
            array (
                'id' => 292,
                'name' => 'UNIVERSITY OF MINDANAO-DIGOS',
                'campus_id' => 294,
                'created_at' => '2024-12-10 13:25:10',
                'updated_at' => '2024-12-10 13:25:10',
            ),
            292 => 
            array (
                'id' => 294,
                'name' => 'UNIVERSITY OF MINDANAO-BOLTON',
                'campus_id' => 292,
                'created_at' => '2024-12-10 13:26:04',
                'updated_at' => '2024-12-10 13:26:04',
            ),
            293 => 
            array (
                'id' => 295,
                'name' => 'UNIVERSITY OF SOUTHEASTERN PHILIPPINES-OBRERO',
                'campus_id' => 83,
                'created_at' => '2024-12-10 13:29:30',
                'updated_at' => '2024-12-10 13:29:30',
            ),
            294 => 
            array (
                'id' => 296,
                'name' => 'AEMILIANUM COLLEGE',
                'campus_id' => 300,
                'created_at' => '2024-12-10 13:33:53',
                'updated_at' => '2024-12-10 13:33:53',
            ),
            295 => 
            array (
                'id' => 297,
                'name' => 'AMA COMPUTER COLLEGE-LEGAZPI CITY',
                'campus_id' => 301,
                'created_at' => '2024-12-10 13:41:35',
                'updated_at' => '2024-12-10 13:41:35',
            ),
            296 => 
            array (
                'id' => 298,
                'name' => 'AMA COMPUTER LEARNING CENTER-NAGA CITY',
                'campus_id' => 302,
                'created_at' => '2024-12-10 13:41:46',
                'updated_at' => '2024-12-10 13:41:46',
            ),
            297 => 
            array (
                'id' => 299,
                'name' => 'ATENEO DE NAGA UNIVERSITY',
                'campus_id' => 303,
                'created_at' => '2024-12-10 13:43:09',
                'updated_at' => '2024-12-10 13:43:09',
            ),
            298 => 
            array (
                'id' => 300,
                'name' => 'BAAO COMMUNITY COLLEGE',
                'campus_id' => 304,
                'created_at' => '2024-12-10 13:44:15',
                'updated_at' => '2024-12-10 13:44:15',
            ),
            299 => 
            array (
                'id' => 301,
                'name' => 'BICOL COLLEGE',
                'campus_id' => 305,
                'created_at' => '2024-12-10 13:46:07',
                'updated_at' => '2024-12-10 13:46:07',
            ),
            300 => 
            array (
                'id' => 302,
                'name' => 'BICOL STATE COLLEGE OF APPLIED SCIENCES AND TECHNOLOGY-NAGA CITY',
                'campus_id' => 306,
                'created_at' => '2024-12-10 13:50:17',
                'updated_at' => '2024-12-10 13:50:17',
            ),
            301 => 
            array (
                'id' => 303,
                'name' => 'BICOL STATE COLLEGE OF APPLIED SCIENCES AND TECHNOLOGY-PENAFRANCIA',
                'campus_id' => 306,
                'created_at' => '2024-12-10 13:50:24',
                'updated_at' => '2024-12-10 13:50:24',
            ),
            302 => 
            array (
                'id' => 304,
                'name' => 'BICOL UNIVERSITY',
                'campus_id' => 307,
                'created_at' => '2024-12-10 13:56:53',
                'updated_at' => '2024-12-10 13:56:53',
            ),
            303 => 
            array (
                'id' => 305,
                'name' => 'BICOL UNIVERSITY-LEGAZPI CITY',
                'campus_id' => 307,
                'created_at' => '2024-12-10 13:57:00',
                'updated_at' => '2024-12-10 13:57:00',
            ),
            304 => 
            array (
                'id' => 306,
                'name' => 'BICOL UNIVERSITY-MAIN',
                'campus_id' => 307,
                'created_at' => '2024-12-10 13:57:08',
                'updated_at' => '2024-12-10 13:57:08',
            ),
            305 => 
            array (
                'id' => 307,
                'name' => 'BICOL UNIVERSITY-DARAGA',
                'campus_id' => 308,
                'created_at' => '2024-12-10 13:57:21',
                'updated_at' => '2024-12-10 13:57:21',
            ),
            306 => 
            array (
                'id' => 308,
                'name' => 'BICOL UNIVERSITY-GUBAT',
                'campus_id' => 309,
                'created_at' => '2024-12-10 13:57:31',
                'updated_at' => '2024-12-10 13:57:31',
            ),
            307 => 
            array (
                'id' => 309,
                'name' => 'BICOL UNIVERSITY-GUINOBATAN',
                'campus_id' => 310,
                'created_at' => '2024-12-10 13:57:41',
                'updated_at' => '2024-12-10 13:57:41',
            ),
            308 => 
            array (
                'id' => 310,
                'name' => 'BICOL UNIVERSITY-POLANGUI',
                'campus_id' => 312,
                'created_at' => '2024-12-10 13:57:58',
                'updated_at' => '2024-12-10 13:57:58',
            ),
            309 => 
            array (
                'id' => 311,
                'name' => 'BICOL UNIVERSITY-TABACO',
                'campus_id' => 311,
                'created_at' => '2024-12-10 13:58:08',
                'updated_at' => '2024-12-10 13:58:08',
            ),
            310 => 
            array (
                'id' => 312,
                'name' => 'CATANDUANES COLLEGE',
                'campus_id' => 313,
                'created_at' => '2024-12-10 14:04:15',
                'updated_at' => '2024-12-10 14:04:15',
            ),
            311 => 
            array (
                'id' => 313,
                'name' => 'CATANDUANES INSTITUTE OF TECHNOLOGY',
                'campus_id' => 314,
                'created_at' => '2024-12-10 14:08:33',
                'updated_at' => '2024-12-10 14:08:33',
            ),
            312 => 
            array (
                'id' => 314,
                'name' => 'CATANDUANES STATE COLLEGE',
                'campus_id' => 315,
                'created_at' => '2024-12-10 14:10:30',
                'updated_at' => '2024-12-10 14:10:30',
            ),
            313 => 
            array (
                'id' => 315,
                'name' => 'CATANDUANES STATE UNIVERSITY',
                'campus_id' => 315,
                'created_at' => '2024-12-10 14:10:37',
                'updated_at' => '2024-12-10 14:10:37',
            ),
            314 => 
            array (
                'id' => 316,
                'name' => 'CENTRAL BICOL STATE UNIVERSITY OF AGRICULTURE-PILI',
                'campus_id' => 316,
                'created_at' => '2024-12-10 14:13:21',
                'updated_at' => '2024-12-10 14:13:21',
            ),
            315 => 
            array (
                'id' => 317,
                'name' => 'CENTRAL BICOL STATE UNIVERSITY OF AGRICULTURE-SIPOCOT',
                'campus_id' => 317,
                'created_at' => '2024-12-10 14:13:34',
                'updated_at' => '2024-12-10 14:13:34',
            ),
            316 => 
            array (
                'id' => 318,
                'name' => 'CENTRAL BICOL STATE UNIVERSITY OF AGRICULTURE-CALABANGA',
                'campus_id' => 318,
                'created_at' => '2024-12-10 14:13:46',
                'updated_at' => '2024-12-10 14:13:46',
            ),
            317 => 
            array (
                'id' => 319,
                'name' => 'CENTRAL BICOL STATE UNIVERSITY OF AGRICULTURE-PASACAO',
                'campus_id' => 319,
                'created_at' => '2024-12-10 14:14:00',
                'updated_at' => '2024-12-10 14:14:00',
            ),
            318 => 
            array (
                'id' => 320,
                'name' => 'CENTRAL TECHNOLOGY INSTITUTE',
                'campus_id' => 320,
                'created_at' => '2024-12-10 14:16:58',
                'updated_at' => '2024-12-10 14:16:58',
            ),
            319 => 
            array (
                'id' => 321,
                'name' => 'CHRISTIAN POLYTECHNIC INSTITUTE OF CATANDUANES',
                'campus_id' => 321,
                'created_at' => '2024-12-10 14:18:05',
                'updated_at' => '2024-12-10 14:18:05',
            ),
            320 => 
            array (
                'id' => 322,
                'name' => 'COLEGIO DE SANTA ISABEL',
                'campus_id' => 322,
                'created_at' => '2024-12-10 14:21:33',
                'updated_at' => '2024-12-10 14:21:33',
            ),
            321 => 
            array (
                'id' => 323,
                'name' => 'COMPUTER ARTS AND TECHNOLOGICAL COLLEGE',
                'campus_id' => 323,
                'created_at' => '2024-12-10 14:25:05',
                'updated_at' => '2024-12-10 14:25:05',
            ),
            322 => 
            array (
                'id' => 324,
                'name' => 'COMPUTER COMM. DEV`T. INSTITUTE-NAGA',
                'campus_id' => 324,
                'created_at' => '2024-12-10 14:27:06',
                'updated_at' => '2024-12-10 14:27:06',
            ),
            323 => 
            array (
                'id' => 325,
                'name' => 'DANIEL B. PENA MEMORIAL SCHOOL',
                'campus_id' => 325,
                'created_at' => '2024-12-10 14:28:23',
                'updated_at' => '2024-12-10 14:28:23',
            ),
            324 => 
            array (
                'id' => 326,
                'name' => 'DARAGA COMMUNITY COLLEGE',
                'campus_id' => 326,
                'created_at' => '2024-12-10 14:29:25',
                'updated_at' => '2024-12-10 14:29:25',
            ),
            325 => 
            array (
                'id' => 327,
                'name' => 'DATABYTE INSTITUTE OF TECHNOLOGY',
                'campus_id' => 327,
                'created_at' => '2024-12-10 14:31:25',
                'updated_at' => '2024-12-10 14:31:25',
            ),
            326 => 
            array (
                'id' => 328,
                'name' => 'DIVINE WORD COLLEGE OF LEGAZPI',
                'campus_id' => 328,
                'created_at' => '2024-12-10 14:34:54',
                'updated_at' => '2024-12-10 14:34:54',
            ),
            327 => 
            array (
                'id' => 329,
                'name' => 'DR. CARLOS S. LANTING COLLEGE',
                'campus_id' => 329,
                'created_at' => '2024-12-10 14:38:56',
                'updated_at' => '2024-12-10 14:38:56',
            ),
            328 => 
            array (
                'id' => 330,
                'name' => 'DR. EMILIO B. ESPINOSA SR. MEMORIAL STATE COLLEGE OF AGRICULTURE AND TECHNOLOGY',
                'campus_id' => 330,
                'created_at' => '2024-12-10 14:40:42',
                'updated_at' => '2024-12-10 14:40:42',
            ),
            329 => 
            array (
                'id' => 331,
                'name' => 'FORBES COLLEGE',
                'campus_id' => 331,
                'created_at' => '2024-12-10 14:42:12',
                'updated_at' => '2024-12-10 14:42:12',
            ),
            330 => 
            array (
                'id' => 332,
                'name' => 'La Consolacion College-Daet',
                'campus_id' => 332,
                'created_at' => '2024-12-10 14:45:05',
                'updated_at' => '2024-12-10 14:45:05',
            ),
            331 => 
            array (
                'id' => 333,
                'name' => 'LICEO DE MASBATE',
                'campus_id' => 333,
                'created_at' => '2024-12-10 14:47:10',
                'updated_at' => '2024-12-10 14:47:10',
            ),
            332 => 
            array (
                'id' => 334,
                'name' => 'MABA COMPUTER COLLEGE',
                'campus_id' => 334,
                'created_at' => '2024-12-10 14:50:32',
                'updated_at' => '2024-12-10 14:50:32',
            ),
            333 => 
            array (
                'id' => 335,
                'name' => 'MABINI COLLEGE',
                'campus_id' => 335,
                'created_at' => '2024-12-10 14:52:18',
                'updated_at' => '2024-12-10 14:52:18',
            ),
            334 => 
            array (
                'id' => 336,
                'name' => 'NAGA COLLEGE FOUNDATION',
                'campus_id' => 336,
                'created_at' => '2024-12-10 14:54:34',
                'updated_at' => '2024-12-10 14:54:34',
            ),
            335 => 
            array (
                'id' => 337,
                'name' => 'OSMENA COLLEGES',
                'campus_id' => 337,
                'created_at' => '2024-12-10 14:55:47',
                'updated_at' => '2024-12-10 14:55:47',
            ),
            336 => 
            array (
                'id' => 338,
                'name' => 'OUR LADY OF LOURDES COLLEGE FOUNDATION-DAET',
                'campus_id' => 338,
                'created_at' => '2024-12-10 14:57:36',
                'updated_at' => '2024-12-10 14:57:36',
            ),
            337 => 
            array (
                'id' => 339,
                'name' => 'OVILLA TECHNICAL COLLEGE',
                'campus_id' => 339,
                'created_at' => '2024-12-10 14:58:50',
                'updated_at' => '2024-12-10 14:58:50',
            ),
            338 => 
            array (
                'id' => 340,
                'name' => 'PARTIDO STATE UNIVERSITY',
                'campus_id' => 340,
                'created_at' => '2024-12-10 15:01:04',
                'updated_at' => '2024-12-10 15:01:04',
            ),
            339 => 
            array (
                'id' => 341,
                'name' => 'POLYTECHNIC INSTITUTE OF TABACO',
                'campus_id' => 341,
                'created_at' => '2024-12-10 15:02:15',
                'updated_at' => '2024-12-10 15:02:15',
            ),
            340 => 
            array (
                'id' => 342,
                'name' => 'POLYTECHNIC UNIVERSITY OF THE PHILIPPINES-RAGAY',
                'campus_id' => 343,
                'created_at' => '2024-12-10 15:18:53',
                'updated_at' => '2024-12-10 15:18:53',
            ),
            341 => 
            array (
                'id' => 343,
                'name' => 'SAINT LOUISE DE MARILLAC SCHOOL',
                'campus_id' => 344,
                'created_at' => '2024-12-10 15:24:34',
                'updated_at' => '2024-12-10 15:24:34',
            ),
            342 => 
            array (
                'id' => 344,
                'name' => 'SAN FRANCISCO INSTITUTE OF TECHNOLOGY-MALILIPOT',
                'campus_id' => 345,
                'created_at' => '2024-12-10 15:26:41',
                'updated_at' => '2024-12-10 15:26:41',
            ),
            343 => 
            array (
                'id' => 345,
                'name' => 'SAN JOSE COMMUNITY COLLEGE-MALILIPOT',
                'campus_id' => 346,
                'created_at' => '2024-12-10 15:29:23',
                'updated_at' => '2024-12-10 15:29:23',
            ),
            344 => 
            array (
                'id' => 346,
                'name' => 'SORSOGON STATE UNIVERSITY-SORSOGON CITY',
                'campus_id' => 347,
                'created_at' => '2024-12-10 15:32:56',
                'updated_at' => '2024-12-10 15:32:56',
            ),
            345 => 
            array (
                'id' => 347,
                'name' => 'SORSOGON STATE UNIVERSITY-BULAN',
                'campus_id' => 348,
                'created_at' => '2024-12-10 15:33:07',
                'updated_at' => '2024-12-10 15:33:07',
            ),
            346 => 
            array (
                'id' => 348,
                'name' => 'SORSOGON STATE UNIVERSITY-MAGALLANES',
                'campus_id' => 349,
                'created_at' => '2024-12-10 15:33:17',
                'updated_at' => '2024-12-10 15:33:17',
            ),
            347 => 
            array (
                'id' => 349,
                'name' => 'TABACO COLLEGE',
                'campus_id' => 352,
                'created_at' => '2024-12-10 15:38:35',
                'updated_at' => '2024-12-10 15:38:35',
            ),
            348 => 
            array (
                'id' => 350,
                'name' => 'THE LEWIS COLLEGE',
                'campus_id' => 353,
                'created_at' => '2024-12-10 15:39:36',
                'updated_at' => '2024-12-10 15:39:36',
            ),
            349 => 
            array (
                'id' => 351,
                'name' => 'UNIVERSIDAD DE SANTA ISABEL-NAGA',
                'campus_id' => 354,
                'created_at' => '2024-12-10 15:40:54',
                'updated_at' => '2024-12-10 15:40:54',
            ),
            350 => 
            array (
                'id' => 352,
                'name' => 'UNIVERSITY OF CAMARINES NORTE',
                'campus_id' => 355,
                'created_at' => '2024-12-10 15:47:08',
                'updated_at' => '2024-12-10 15:47:08',
            ),
            351 => 
            array (
                'id' => 353,
                'name' => 'UNIVERSITY OF CAMARINES NORTE-DAET',
                'campus_id' => 355,
                'created_at' => '2024-12-10 15:47:14',
                'updated_at' => '2024-12-10 15:47:14',
            ),
            352 => 
            array (
                'id' => 354,
                'name' => 'UNIVERSITY OF CAMARINES NORTE-LABO',
                'campus_id' => 356,
                'created_at' => '2024-12-10 15:47:23',
                'updated_at' => '2024-12-10 15:47:23',
            ),
            353 => 
            array (
                'id' => 355,
                'name' => 'UNIVERSITY OF NUEVA CACERES',
                'campus_id' => 357,
                'created_at' => '2024-12-10 15:48:16',
                'updated_at' => '2024-12-10 15:48:16',
            ),
            354 => 
            array (
                'id' => 356,
                'name' => 'UNIVERSITY OF SAINT ANTHONY-IRIGA CITY',
                'campus_id' => 358,
                'created_at' => '2024-12-10 15:49:15',
                'updated_at' => '2024-12-10 15:49:15',
            ),
            355 => 
            array (
                'id' => 357,
                'name' => 'UNIVERSITY OF SANTO TOMAS-LEGAZPI CITY',
                'campus_id' => 359,
                'created_at' => '2024-12-10 15:50:13',
                'updated_at' => '2024-12-10 15:50:13',
            ),
            356 => 
            array (
                'id' => 358,
                'name' => 'UNVERSITY OF ST. ANTHONY-IRIGA CITY',
                'campus_id' => 358,
                'created_at' => '2024-12-10 15:50:29',
                'updated_at' => '2024-12-10 15:50:29',
            ),
            357 => 
            array (
                'id' => 359,
                'name' => 'AMA COMPUTER LEARNING CENTER-PUERTO PRINCESA CITY',
                'campus_id' => 360,
                'created_at' => '2024-12-10 15:54:18',
                'updated_at' => '2024-12-10 15:54:18',
            ),
            358 => 
            array (
                'id' => 360,
                'name' => 'CITY COLLEGE OF CALAPAN',
                'campus_id' => 361,
                'created_at' => '2024-12-10 15:58:38',
                'updated_at' => '2024-12-10 15:58:38',
            ),
            359 => 
            array (
                'id' => 361,
                'name' => 'COMPUTER LEARNING CENTER CALAPAN-INSTITUTE COMPUTER ARTS AND TECHNOLOGY',
                'campus_id' => 362,
                'created_at' => '2024-12-10 16:01:10',
                'updated_at' => '2024-12-10 16:01:10',
            ),
            360 => 
            array (
                'id' => 362,
                'name' => 'DIVINE WORD COLLEGE OF CALAPAN',
                'campus_id' => 363,
                'created_at' => '2024-12-10 16:02:51',
                'updated_at' => '2024-12-10 16:02:51',
            ),
            361 => 
            array (
                'id' => 363,
                'name' => 'DIVINE WORD COLLEGE OF SAN JOSE',
                'campus_id' => 364,
                'created_at' => '2024-12-10 16:03:41',
                'updated_at' => '2024-12-10 16:03:41',
            ),
            362 => 
            array (
                'id' => 364,
                'name' => 'EDUCATIONAL SCIENCE AND TECHNOLOGY INSTITUTE-MARINDUQUE',
                'campus_id' => 365,
                'created_at' => '2024-12-10 16:06:20',
                'updated_at' => '2024-12-10 16:06:20',
            ),
            363 => 
            array (
                'id' => 365,
                'name' => 'EDUCATIONAL SCIENCE AND TECHNOLOGY INSTITUTE-ROMBLON',
                'campus_id' => 366,
                'created_at' => '2024-12-10 16:06:29',
                'updated_at' => '2024-12-10 16:06:29',
            ),
            364 => 
            array (
                'id' => 366,
                'name' => 'FILIPINO ACADEMY OF SCIENTIFIC TRADES-MINDORO',
                'campus_id' => 367,
                'created_at' => '2024-12-10 16:08:54',
                'updated_at' => '2024-12-10 16:08:54',
            ),
            365 => 
            array (
                'id' => 367,
                'name' => 'FULLBRIGHT COLLEGE-PUERTO PRINCESA CITY',
                'campus_id' => 368,
                'created_at' => '2024-12-10 16:09:58',
                'updated_at' => '2024-12-10 16:09:58',
            ),
            366 => 
            array (
                'id' => 368,
                'name' => 'LOYOLA COLLEGE OF CULLION',
                'campus_id' => 369,
                'created_at' => '2024-12-10 16:12:50',
                'updated_at' => '2024-12-10 16:12:50',
            ),
            367 => 
            array (
                'id' => 369,
                'name' => 'MARINDUQUE STATE UNIVERSITY-TORRIJOS',
                'campus_id' => 371,
                'created_at' => '2024-12-10 16:14:22',
                'updated_at' => '2024-12-10 16:14:22',
            ),
            368 => 
            array (
                'id' => 370,
                'name' => 'MARINDUQUE STATE UNIVERSITY-BOAC',
                'campus_id' => 370,
                'created_at' => '2024-12-10 16:14:33',
                'updated_at' => '2024-12-10 16:14:33',
            ),
            369 => 
            array (
                'id' => 371,
                'name' => 'MINDORO STATE UNIVERSITY-VICTORIA',
                'campus_id' => 372,
                'created_at' => '2024-12-10 16:17:42',
                'updated_at' => '2024-12-10 16:17:42',
            ),
            370 => 
            array (
                'id' => 372,
                'name' => 'MINDORO STATE UNIVERSITY-CALAPAN CITY',
                'campus_id' => 373,
                'created_at' => '2024-12-10 16:17:54',
                'updated_at' => '2024-12-10 16:17:54',
            ),
            371 => 
            array (
                'id' => 373,
                'name' => 'MINDORO STATE UNIVERSITY-BONGABONG',
                'campus_id' => 374,
                'created_at' => '2024-12-10 16:18:10',
                'updated_at' => '2024-12-10 16:18:10',
            ),
            372 => 
            array (
                'id' => 374,
                'name' => 'OCCIDENTAL MINDORO NATIONAL COLLEGE',
                'campus_id' => 375,
                'created_at' => '2024-12-10 16:20:50',
                'updated_at' => '2024-12-10 16:20:50',
            ),
            373 => 
            array (
                'id' => 375,
                'name' => 'OCCIDENTAL MINDORO STATE COLLEGE',
                'campus_id' => 375,
                'created_at' => '2024-12-10 16:20:56',
                'updated_at' => '2024-12-10 16:20:56',
            ),
            374 => 
            array (
                'id' => 376,
                'name' => 'ORIENTAL MINDORO STATE COLLEGE',
                'campus_id' => 372,
                'created_at' => '2024-12-10 16:22:33',
                'updated_at' => '2024-12-10 16:22:33',
            ),
            375 => 
            array (
                'id' => 377,
                'name' => 'P.T. MENDIOLA SR. MEMORIAL TECHNOLOGICAL AND POLYTECHNIC COLLEGE',
                'campus_id' => 375,
                'created_at' => '2024-12-10 16:24:58',
                'updated_at' => '2024-12-10 16:24:58',
            ),
            376 => 
            array (
                'id' => 378,
                'name' => 'PALAWAN STATE UNIVERSITY-PUERTO PRINCESA CITY',
                'campus_id' => 376,
                'created_at' => '2024-12-10 16:25:58',
                'updated_at' => '2024-12-10 16:25:58',
            ),
            377 => 
            array (
                'id' => 379,
                'name' => 'PALAWAN TECHNOLOGICAL COLLEGE INC.',
                'campus_id' => 377,
                'created_at' => '2024-12-10 16:27:30',
                'updated_at' => '2024-12-10 16:27:30',
            ),
            378 => 
            array (
                'id' => 380,
                'name' => 'POLYTECHNIC COLLEGE OF CALAPAN',
                'campus_id' => 378,
                'created_at' => '2024-12-10 16:31:39',
                'updated_at' => '2024-12-10 16:31:39',
            ),
            379 => 
            array (
                'id' => 381,
                'name' => 'ROMBLON STATE UNIVERSITY-ODIONGAN',
                'campus_id' => 379,
                'created_at' => '2024-12-10 16:34:29',
                'updated_at' => '2024-12-10 16:34:29',
            ),
            380 => 
            array (
                'id' => 382,
                'name' => 'ROMBLON STATE UNIVERSITY-CAJIDIOCAN',
                'campus_id' => 380,
                'created_at' => '2024-12-10 16:34:37',
                'updated_at' => '2024-12-10 16:34:37',
            ),
            381 => 
            array (
                'id' => 383,
                'name' => 'ROMBLON STATE UNIVERSITY-SAN FERNANDO',
                'campus_id' => 381,
                'created_at' => '2024-12-10 16:34:48',
                'updated_at' => '2024-12-10 16:34:48',
            ),
            382 => 
            array (
                'id' => 384,
                'name' => 'ROMBLON STATE UNIVERSITY-SANTA MARIA',
                'campus_id' => 382,
                'created_at' => '2024-12-10 16:34:57',
                'updated_at' => '2024-12-10 16:34:57',
            ),
            383 => 
            array (
                'id' => 385,
                'name' => 'SAINT ANTHONY COLLEGE OF CALAPAN',
                'campus_id' => 383,
                'created_at' => '2024-12-10 16:37:05',
                'updated_at' => '2024-12-10 16:37:05',
            ),
            384 => 
            array (
                'id' => 386,
                'name' => 'SAINT MICHAEL COMPUTER LEARNING CENTER',
                'campus_id' => 384,
                'created_at' => '2024-12-10 16:40:27',
                'updated_at' => '2024-12-10 16:40:27',
            ),
            385 => 
            array (
                'id' => 387,
                'name' => 'SAN JOSE NATIONAL AGRICULTURAL AND INDUSTRIAL SCHOOL',
                'campus_id' => 385,
                'created_at' => '2024-12-10 16:42:12',
                'updated_at' => '2024-12-10 16:42:12',
            ),
            386 => 
            array (
                'id' => 388,
                'name' => 'WESTERN PHILIPPINES UNIVERSITY',
                'campus_id' => 386,
                'created_at' => '2024-12-10 16:44:19',
                'updated_at' => '2024-12-10 16:44:19',
            ),
            387 => 
            array (
                'id' => 389,
                'name' => 'STATE POLYTECHNIC COLLEGE OF PALAWAN',
                'campus_id' => 386,
                'created_at' => '2024-12-10 16:44:25',
                'updated_at' => '2024-12-10 16:44:25',
            ),
            388 => 
            array (
                'id' => 390,
                'name' => 'CALAPAN SCHOOL OF ARTS AND TRADES',
                'campus_id' => 386,
                'created_at' => '2024-12-10 16:45:34',
                'updated_at' => '2024-12-10 16:45:34',
            ),
            389 => 
            array (
                'id' => 391,
                'name' => 'AMA COLLEGES-SANTIAGO CITY',
                'campus_id' => 387,
                'created_at' => '2024-12-10 16:51:39',
                'updated_at' => '2024-12-10 16:51:39',
            ),
            390 => 
            array (
                'id' => 392,
                'name' => 'BATANES STATE COLLEGE-BASCO',
                'campus_id' => 388,
                'created_at' => '2024-12-10 16:53:42',
                'updated_at' => '2024-12-10 16:53:42',
            ),
            391 => 
            array (
                'id' => 393,
                'name' => 'CAGAYAN STATE UNIVERSITY',
                'campus_id' => 389,
                'created_at' => '2024-12-10 17:02:01',
                'updated_at' => '2024-12-10 17:02:01',
            ),
            392 => 
            array (
                'id' => 394,
                'name' => 'CAGAYAN STATE UNIVERSITY-ANDREWS',
                'campus_id' => 389,
                'created_at' => '2024-12-10 17:02:07',
                'updated_at' => '2024-12-10 17:02:07',
            ),
            393 => 
            array (
                'id' => 395,
                'name' => 'CAGAYAN STATE UNIVERSITY-APARRI',
                'campus_id' => 390,
                'created_at' => '2024-12-10 17:02:18',
                'updated_at' => '2024-12-10 17:02:18',
            ),
            394 => 
            array (
                'id' => 396,
                'name' => 'CAGAYAN STATE UNIVERSITY-CARIG',
                'campus_id' => 391,
                'created_at' => '2024-12-10 17:02:30',
                'updated_at' => '2024-12-10 17:02:30',
            ),
            395 => 
            array (
                'id' => 397,
                'name' => 'CAGAYAN STATE UNIVERSITY-GONZAGA',
                'campus_id' => 393,
                'created_at' => '2024-12-10 17:02:43',
                'updated_at' => '2024-12-10 17:02:43',
            ),
            396 => 
            array (
                'id' => 398,
                'name' => 'CAGAYAN STATE UNIVERSITY-PIAT',
                'campus_id' => 392,
                'created_at' => '2024-12-10 17:02:53',
                'updated_at' => '2024-12-10 17:02:53',
            ),
            397 => 
            array (
                'id' => 399,
                'name' => 'CAGAYAN STATE UNIVERSITY-LAL-LO',
                'campus_id' => 394,
                'created_at' => '2024-12-10 17:05:08',
                'updated_at' => '2024-12-10 17:05:08',
            ),
            398 => 
            array (
                'id' => 400,
                'name' => 'CAGAYAN STATE UNIVERSITY-SANCHEZ-MIRA',
                'campus_id' => 395,
                'created_at' => '2024-12-10 17:05:18',
                'updated_at' => '2024-12-10 17:05:18',
            ),
            399 => 
            array (
                'id' => 401,
                'name' => 'CAGAYAN STATE UNIVERSITY-TUGUEGARAO CITY',
                'campus_id' => 391,
                'created_at' => '2024-12-10 17:06:57',
                'updated_at' => '2024-12-10 17:06:57',
            ),
            400 => 
            array (
                'id' => 402,
                'name' => 'CAGAYAN STATE UNIVERSITY-CARITAN',
                'campus_id' => 389,
                'created_at' => '2024-12-10 17:07:44',
                'updated_at' => '2024-12-10 17:07:44',
            ),
            401 => 
            array (
                'id' => 403,
                'name' => 'ISABELA STATE UNIVERSITY-ECHAGUE',
                'campus_id' => 396,
                'created_at' => '2024-12-10 17:10:55',
                'updated_at' => '2024-12-10 17:10:55',
            ),
            402 => 
            array (
                'id' => 404,
                'name' => 'ISABELA STATE UNIVERSITY-CABAGAN',
                'campus_id' => 397,
                'created_at' => '2024-12-10 17:11:03',
                'updated_at' => '2024-12-10 17:11:03',
            ),
            403 => 
            array (
                'id' => 405,
                'name' => 'CAUAYAN POLYTECHNIC COLLEGE',
                'campus_id' => 396,
                'created_at' => '2024-12-10 17:11:18',
                'updated_at' => '2024-12-10 17:11:18',
            ),
            404 => 
            array (
                'id' => 406,
                'name' => 'ISABELA STATE UNIVERSITY-CAUAYAN',
                'campus_id' => 398,
                'created_at' => '2024-12-10 17:11:31',
                'updated_at' => '2024-12-10 17:11:31',
            ),
            405 => 
            array (
                'id' => 407,
                'name' => 'ISABELA STATE UNIVERSITY-ILAGAN',
                'campus_id' => 399,
                'created_at' => '2024-12-10 17:11:42',
                'updated_at' => '2024-12-10 17:11:42',
            ),
            406 => 
            array (
                'id' => 408,
                'name' => 'ISABELA STATE UNIVERSITY-JONES',
                'campus_id' => 400,
                'created_at' => '2024-12-10 17:11:54',
                'updated_at' => '2024-12-10 17:11:54',
            ),
            407 => 
            array (
                'id' => 409,
                'name' => 'LA SALETTE COLLEGE OF SANTIAGO',
                'campus_id' => 401,
                'created_at' => '2024-12-10 17:13:34',
                'updated_at' => '2024-12-10 17:13:34',
            ),
            408 => 
            array (
                'id' => 410,
                'name' => 'NUEVA VIZCAYA STATE UNIVERSITY-BAYOMBONG',
                'campus_id' => 402,
                'created_at' => '2024-12-10 17:17:29',
                'updated_at' => '2024-12-10 17:17:29',
            ),
            409 => 
            array (
                'id' => 411,
                'name' => 'NUEVA VIZCAYA STATE UNIVERSITY-BAMBANG',
                'campus_id' => 403,
                'created_at' => '2024-12-10 17:17:42',
                'updated_at' => '2024-12-10 17:17:42',
            ),
            410 => 
            array (
                'id' => 412,
                'name' => 'NUEVA VIZCAYA STATE POLYTECHNIC COLLEGE',
                'campus_id' => 402,
                'created_at' => '2024-12-10 17:17:56',
                'updated_at' => '2024-12-10 17:17:56',
            ),
            411 => 
            array (
                'id' => 413,
                'name' => 'NUEVA VIZCAYA STATE INSTITUTE OF TECHNOLOGY',
                'campus_id' => 402,
                'created_at' => '2024-12-10 17:18:05',
                'updated_at' => '2024-12-10 17:18:05',
            ),
            412 => 
            array (
                'id' => 414,
                'name' => 'NUEVA VIZCAYA STATE UNIVERSITY-ECHAGUE',
                'campus_id' => 402,
                'created_at' => '2024-12-10 17:19:36',
                'updated_at' => '2024-12-10 17:19:36',
            ),
            413 => 
            array (
                'id' => 415,
                'name' => 'PHILIPPINE NORMAL UNIVERSITY-ISABELA',
                'campus_id' => 404,
                'created_at' => '2024-12-10 17:20:49',
                'updated_at' => '2024-12-10 17:20:49',
            ),
            414 => 
            array (
                'id' => 416,
                'name' => 'PHILIPPINE NORMAL UNIVERSITY-NORTH LUZON',
                'campus_id' => 405,
                'created_at' => '2024-12-10 17:20:58',
                'updated_at' => '2024-12-10 17:20:58',
            ),
            415 => 
            array (
                'id' => 417,
                'name' => 'QUIRINO STATE UNIVERSITY-CABARROGUIS',
                'campus_id' => 407,
                'created_at' => '2024-12-10 17:22:59',
                'updated_at' => '2024-12-10 17:22:59',
            ),
            416 => 
            array (
                'id' => 418,
                'name' => 'QUIRINO STATE UNIVERSITY-DIFFUN',
                'campus_id' => 406,
                'created_at' => '2024-12-10 17:23:09',
                'updated_at' => '2024-12-10 17:23:09',
            ),
            417 => 
            array (
                'id' => 419,
                'name' => 'SAINT DOMINIC COLLEGE-CAGAYAN',
                'campus_id' => 408,
                'created_at' => '2024-12-10 17:24:18',
                'updated_at' => '2024-12-10 17:24:18',
            ),
            418 => 
            array (
                'id' => 420,
                'name' => 'SAINT MARY`S UNIVERSITY',
                'campus_id' => 409,
                'created_at' => '2024-12-10 17:27:48',
                'updated_at' => '2024-12-10 17:27:48',
            ),
            419 => 
            array (
                'id' => 421,
                'name' => 'SAINT MARY`S UNIVERSITY-BAYOMBONG',
                'campus_id' => 409,
                'created_at' => '2024-12-10 17:27:54',
                'updated_at' => '2024-12-10 17:27:54',
            ),
            420 => 
            array (
                'id' => 422,
                'name' => 'SAINT PAUL UNIVERSITY-CAGAYAN',
                'campus_id' => 410,
                'created_at' => '2024-12-10 17:29:26',
                'updated_at' => '2024-12-10 17:29:26',
            ),
            421 => 
            array (
                'id' => 423,
                'name' => 'UNIVERSITY OF SAINT LOUIS-TUGUEGARAO',
                'campus_id' => 411,
                'created_at' => '2024-12-10 17:31:26',
                'updated_at' => '2024-12-10 17:31:26',
            ),
            422 => 
            array (
                'id' => 424,
                'name' => 'SOUTHERN ISABELA COLLEGE OF ARTS AND TRADES',
                'campus_id' => 412,
                'created_at' => '2024-12-10 17:32:54',
                'updated_at' => '2024-12-10 17:32:54',
            ),
            423 => 
            array (
                'id' => 425,
                'name' => 'SAINT PAUL UNIVERSITY PHILIPPINES-TUGUEGARAO',
                'campus_id' => 413,
                'created_at' => '2024-12-10 17:34:50',
                'updated_at' => '2024-12-10 17:34:50',
            ),
            424 => 
            array (
                'id' => 426,
                'name' => 'ADELPHI COLLEGE',
                'campus_id' => 414,
                'created_at' => '2024-12-11 08:17:32',
                'updated_at' => '2024-12-11 08:17:32',
            ),
            425 => 
            array (
                'id' => 427,
                'name' => 'AMA COMPUTER LEARNING CENTER-DAGUPAN CITY',
                'campus_id' => 418,
                'created_at' => '2024-12-11 08:32:43',
                'updated_at' => '2024-12-11 08:32:43',
            ),
            426 => 
            array (
                'id' => 428,
                'name' => 'AMA COMPUTER LEARNING CENTER-SAN FERNANDO CITY',
                'campus_id' => 417,
                'created_at' => '2024-12-11 08:32:54',
                'updated_at' => '2024-12-11 08:32:54',
            ),
            427 => 
            array (
                'id' => 429,
                'name' => 'AMA COMPUTER LEARNING CENTER-LA UNION',
                'campus_id' => 419,
                'created_at' => '2024-12-11 08:35:07',
                'updated_at' => '2024-12-11 08:35:07',
            ),
            428 => 
            array (
                'id' => 430,
                'name' => 'AMA COMPUTER LEARNING CENTER-LAOAG CITY',
                'campus_id' => 420,
                'created_at' => '2024-12-11 08:37:13',
                'updated_at' => '2024-12-11 08:37:13',
            ),
            429 => 
            array (
                'id' => 431,
                'name' => 'DATA CENTER OF THE PHILIPPINES-LAOAG CITY',
                'campus_id' => 421,
                'created_at' => '2024-12-11 08:40:12',
                'updated_at' => '2024-12-11 08:40:12',
            ),
            430 => 
            array (
                'id' => 432,
                'name' => 'DATA CENTER OF THE PHILIPPINES-VIGAN CITY',
                'campus_id' => 422,
                'created_at' => '2024-12-11 08:40:23',
                'updated_at' => '2024-12-11 08:40:23',
            ),
            431 => 
            array (
                'id' => 433,
                'name' => 'DIVINE WORD COLLEGE OF LAOAG',
                'campus_id' => 423,
                'created_at' => '2024-12-11 08:41:31',
                'updated_at' => '2024-12-11 08:41:31',
            ),
            432 => 
            array (
                'id' => 434,
                'name' => 'DON MARIANO MARCOS MEMORIAL STATE UNIVERSITY-NLUC',
                'campus_id' => 424,
                'created_at' => '2024-12-11 08:44:26',
                'updated_at' => '2024-12-11 08:44:26',
            ),
            433 => 
            array (
                'id' => 435,
                'name' => 'DON MARIANO MARCOS MEMORIAL STATE UNIVERSITY-MLUC',
                'campus_id' => 425,
                'created_at' => '2024-12-11 08:44:37',
                'updated_at' => '2024-12-11 08:44:37',
            ),
            434 => 
            array (
                'id' => 436,
                'name' => 'DON MARIANO MARCOS MEMORIAL STATE UNIVERSITY-SLUC',
                'campus_id' => 426,
                'created_at' => '2024-12-11 08:44:46',
                'updated_at' => '2024-12-11 08:44:46',
            ),
            435 => 
            array (
                'id' => 437,
                'name' => 'ILOCOS SUR POLYTECHNIC STATE COLLEGE-CERVANTES',
                'campus_id' => 428,
                'created_at' => '2024-12-11 08:48:35',
                'updated_at' => '2024-12-11 08:48:35',
            ),
            436 => 
            array (
                'id' => 438,
                'name' => 'ILOCOS SUR POLYTECHNIC STATE COLLEGE-NARVACAN',
                'campus_id' => 429,
                'created_at' => '2024-12-11 08:48:46',
                'updated_at' => '2024-12-11 08:48:46',
            ),
            437 => 
            array (
                'id' => 439,
                'name' => 'ILOCOS SUR POLYTECHNIC STATE COLLEGE-SANTA MARIA',
                'campus_id' => 430,
                'created_at' => '2024-12-11 08:48:59',
                'updated_at' => '2024-12-11 08:48:59',
            ),
            438 => 
            array (
                'id' => 440,
                'name' => 'ILOCOS SUR POLYTECHNIC STATE COLLEGE-TAGUDIN',
                'campus_id' => 431,
                'created_at' => '2024-12-11 08:49:08',
                'updated_at' => '2024-12-11 08:49:08',
            ),
            439 => 
            array (
                'id' => 441,
                'name' => 'LORMA COLLEGES',
                'campus_id' => 432,
                'created_at' => '2024-12-11 08:50:01',
                'updated_at' => '2024-12-11 08:50:01',
            ),
            440 => 
            array (
                'id' => 442,
                'name' => 'LYCEUM-NORTHWESTERN UNIVERSITY, INC.-DAGUPAN CITY',
                'campus_id' => 433,
                'created_at' => '2024-12-11 08:51:53',
                'updated_at' => '2024-12-11 08:51:53',
            ),
            441 => 
            array (
                'id' => 443,
                'name' => 'MARIANO MARCOS STATE UNIVERSITY-BATAC CITY',
                'campus_id' => 434,
                'created_at' => '2024-12-11 09:04:50',
                'updated_at' => '2024-12-11 09:04:50',
            ),
            442 => 
            array (
                'id' => 444,
                'name' => 'MARIANO MARCOS STATE UNIVERSITY',
                'campus_id' => 434,
                'created_at' => '2024-12-11 09:04:56',
                'updated_at' => '2024-12-11 09:04:56',
            ),
            443 => 
            array (
                'id' => 445,
                'name' => 'MARIANO MARCOS STATE UNIVERSITY-CASAT',
                'campus_id' => 435,
                'created_at' => '2024-12-11 09:05:07',
                'updated_at' => '2024-12-11 09:05:07',
            ),
            444 => 
            array (
                'id' => 446,
                'name' => 'MARIANO MARCOS STATE UNIVERSITY-CTE',
                'campus_id' => 436,
                'created_at' => '2024-12-11 09:05:21',
                'updated_at' => '2024-12-11 09:05:21',
            ),
            445 => 
            array (
                'id' => 447,
                'name' => 'MARIANO MARCOS STATE UNIVERSITY-CURRIMAO',
                'campus_id' => 435,
                'created_at' => '2024-12-11 09:06:05',
                'updated_at' => '2024-12-11 09:06:05',
            ),
            446 => 
            array (
                'id' => 448,
                'name' => 'MARIANO MARCOS STATE UNIVERSITY-LAOAG CITY',
                'campus_id' => 436,
                'created_at' => '2024-12-11 09:07:18',
                'updated_at' => '2024-12-11 09:07:18',
            ),
            447 => 
            array (
                'id' => 449,
                'name' => 'MARIANO MARCOS STATE UNIVERSITY-COT',
                'campus_id' => 437,
                'created_at' => '2024-12-11 09:07:47',
                'updated_at' => '2024-12-11 09:07:47',
            ),
            448 => 
            array (
                'id' => 450,
                'name' => 'NORTH LUZON PHILIPPINE STATE COLLEGE',
                'campus_id' => 427,
                'created_at' => '2024-12-11 09:08:59',
                'updated_at' => '2024-12-11 09:08:59',
            ),
            449 => 
            array (
                'id' => 451,
                'name' => 'NORTHWESTERN UNIVERSITY',
                'campus_id' => 439,
                'created_at' => '2024-12-11 09:10:04',
                'updated_at' => '2024-12-11 09:10:04',
            ),
            450 => 
            array (
                'id' => 452,
                'name' => 'PANGASINAN COLLEGE OF SCIENCE AND TECHNOLOGY',
                'campus_id' => 440,
                'created_at' => '2024-12-11 09:15:58',
                'updated_at' => '2024-12-11 09:15:58',
            ),
            451 => 
            array (
                'id' => 453,
                'name' => 'PANPACIFIC UNIVERSITY NORTH PHILIPPINES',
                'campus_id' => 440,
                'created_at' => '2024-12-11 09:16:10',
                'updated_at' => '2024-12-11 09:16:10',
            ),
            452 => 
            array (
                'id' => 454,
                'name' => 'PANGASINAN SCHOOL OF ARTS AND TRADES',
                'campus_id' => 441,
                'created_at' => '2024-12-11 09:17:37',
                'updated_at' => '2024-12-11 09:17:37',
            ),
            453 => 
            array (
                'id' => 455,
                'name' => 'PANGASINAN STATE UNIVERSITY-LINGAYEN',
                'campus_id' => 442,
                'created_at' => '2024-12-11 09:22:58',
                'updated_at' => '2024-12-11 09:22:58',
            ),
            454 => 
            array (
                'id' => 456,
                'name' => 'PANGASINAN STATE UNIVERSITY-ALAMINOS CITY',
                'campus_id' => 443,
                'created_at' => '2024-12-11 09:23:15',
                'updated_at' => '2024-12-11 09:23:15',
            ),
            455 => 
            array (
                'id' => 457,
                'name' => 'PANGASINAN STATE UNIVERSITY-ASINGAN',
                'campus_id' => 444,
                'created_at' => '2024-12-11 09:23:25',
                'updated_at' => '2024-12-11 09:23:25',
            ),
            456 => 
            array (
                'id' => 458,
                'name' => 'PANGASINAN STATE UNIVERSITY-BAYAMBANG',
                'campus_id' => 445,
                'created_at' => '2024-12-11 09:23:35',
                'updated_at' => '2024-12-11 09:23:35',
            ),
            457 => 
            array (
                'id' => 459,
                'name' => 'PANGASINAN STATE UNIVERSITY-BINMALEY',
                'campus_id' => 446,
                'created_at' => '2024-12-11 09:30:13',
                'updated_at' => '2024-12-11 09:30:13',
            ),
            458 => 
            array (
                'id' => 460,
                'name' => 'PANGASINAN STATE UNIVERSITY-SAN CARLOS CITY',
                'campus_id' => 447,
                'created_at' => '2024-12-11 09:30:31',
                'updated_at' => '2024-12-11 09:30:31',
            ),
            459 => 
            array (
                'id' => 461,
                'name' => 'PANGASINAN STATE UNIVERSITY-SANTA MARIA',
                'campus_id' => 448,
                'created_at' => '2024-12-11 09:30:41',
                'updated_at' => '2024-12-11 09:30:41',
            ),
            460 => 
            array (
                'id' => 462,
                'name' => 'PANGASINAN STATE UNIVERSITY-URDANETA CITY',
                'campus_id' => 449,
                'created_at' => '2024-12-11 09:30:50',
                'updated_at' => '2024-12-11 09:30:50',
            ),
            461 => 
            array (
                'id' => 463,
                'name' => 'PHILIPPINE COLLEGE OF SCIENCE AND TECHNOLOGY',
                'campus_id' => 451,
                'created_at' => '2024-12-11 09:38:50',
                'updated_at' => '2024-12-11 09:38:50',
            ),
            462 => 
            array (
                'id' => 464,
                'name' => 'PHINMA UNIVERSITY OF PANGASINAN',
                'campus_id' => 452,
                'created_at' => '2024-12-11 09:40:51',
                'updated_at' => '2024-12-11 09:40:51',
            ),
            463 => 
            array (
                'id' => 465,
                'name' => 'SAINT LOUIS COLLEGE OF SAN FERNANDO',
                'campus_id' => 453,
                'created_at' => '2024-12-11 09:43:54',
                'updated_at' => '2024-12-11 09:43:54',
            ),
            464 => 
            array (
                'id' => 466,
                'name' => 'UNIVERSIDAD DE DAGUPAN',
                'campus_id' => 454,
                'created_at' => '2024-12-11 09:44:43',
                'updated_at' => '2024-12-11 09:44:43',
            ),
            465 => 
            array (
                'id' => 467,
                'name' => 'UNIVERSITY OF LUZON',
                'campus_id' => 455,
                'created_at' => '2024-12-11 09:45:37',
                'updated_at' => '2024-12-11 09:45:37',
            ),
            466 => 
            array (
                'id' => 468,
                'name' => 'LUZON COLLEGES',
                'campus_id' => 455,
                'created_at' => '2024-12-11 09:46:03',
                'updated_at' => '2024-12-11 09:46:03',
            ),
            467 => 
            array (
                'id' => 469,
                'name' => 'COMPUTRONIX COLLEGE',
                'campus_id' => 454,
                'created_at' => '2024-12-11 09:46:41',
                'updated_at' => '2024-12-11 09:46:41',
            ),
            468 => 
            array (
                'id' => 470,
                'name' => 'UNIVERSITY OF NORTHERN PHILIPPINES',
                'campus_id' => 456,
                'created_at' => '2024-12-11 09:47:26',
                'updated_at' => '2024-12-11 09:47:26',
            ),
            469 => 
            array (
                'id' => 471,
                'name' => 'URDANETA CITY UNIVERSITY',
                'campus_id' => 457,
                'created_at' => '2024-12-11 09:48:20',
                'updated_at' => '2024-12-11 09:48:20',
            ),
            470 => 
            array (
                'id' => 472,
                'name' => 'VIRGEN MILAGROSA UNIVERSITY FOUNDATION',
                'campus_id' => 458,
                'created_at' => '2024-12-11 09:49:09',
                'updated_at' => '2024-12-11 09:49:09',
            ),
            471 => 
            array (
                'id' => 473,
                'name' => 'AMA COMPUTER COLLEGE-TACLOBAN CITY',
                'campus_id' => 459,
                'created_at' => '2024-12-11 10:11:08',
                'updated_at' => '2024-12-11 10:11:08',
            ),
            472 => 
            array (
                'id' => 474,
                'name' => 'AMA COMPUTER LEARNING CENTER-TACLOBAN',
                'campus_id' => 460,
                'created_at' => '2024-12-11 10:11:44',
                'updated_at' => '2024-12-11 10:11:44',
            ),
            473 => 
            array (
                'id' => 475,
                'name' => 'ASIAN DEVELOPMENT FOUNDATION',
                'campus_id' => 461,
                'created_at' => '2024-12-11 10:12:58',
                'updated_at' => '2024-12-11 10:12:58',
            ),
            474 => 
            array (
                'id' => 476,
                'name' => 'BILIRAN PROVINCE STATE UNIVERSITY-NAVAL',
                'campus_id' => 462,
                'created_at' => '2024-12-11 10:14:51',
                'updated_at' => '2024-12-11 10:14:51',
            ),
            475 => 
            array (
                'id' => 477,
                'name' => 'BILIRAN PROVINCE STATE UNIVERSITY-BILIRAN',
                'campus_id' => 463,
                'created_at' => '2024-12-11 10:15:01',
                'updated_at' => '2024-12-11 10:15:01',
            ),
            476 => 
            array (
                'id' => 478,
                'name' => 'COLLEGE OF MAASIN',
                'campus_id' => 464,
                'created_at' => '2024-12-11 10:16:05',
                'updated_at' => '2024-12-11 10:16:05',
            ),
            477 => 
            array (
                'id' => 479,
                'name' => 'DIVINE WORD UNIVERSITY-TACLOBAN',
                'campus_id' => 465,
                'created_at' => '2024-12-11 10:19:21',
                'updated_at' => '2024-12-11 10:19:21',
            ),
            478 => 
            array (
                'id' => 480,
                'name' => 'DONA REMEDIOS TRINIDAD ROMUALDEZ MEDICAL FOUNDATION',
                'campus_id' => 466,
                'created_at' => '2024-12-11 10:21:03',
                'updated_at' => '2024-12-11 10:21:03',
            ),
            479 => 
            array (
                'id' => 481,
                'name' => 'EASTERN SAMAR STATE UNIVERSITY-BORONGAN',
                'campus_id' => 467,
                'created_at' => '2024-12-11 10:24:14',
                'updated_at' => '2024-12-11 10:24:14',
            ),
            480 => 
            array (
                'id' => 482,
                'name' => 'EASTERN SAMAR STATE UNIVERSITY-CAN-AVID',
                'campus_id' => 468,
                'created_at' => '2024-12-11 10:24:23',
                'updated_at' => '2024-12-11 10:24:23',
            ),
            481 => 
            array (
                'id' => 483,
                'name' => 'EASTERN SAMAR STATE UNIVERSITY-GUIUAN',
                'campus_id' => 469,
                'created_at' => '2024-12-11 10:24:32',
                'updated_at' => '2024-12-11 10:24:32',
            ),
            482 => 
            array (
                'id' => 484,
                'name' => 'EASTERN SAMAR STATE UNIVERSITY-SALCEDO',
                'campus_id' => 470,
                'created_at' => '2024-12-11 10:24:41',
                'updated_at' => '2024-12-11 10:24:41',
            ),
            483 => 
            array (
                'id' => 485,
                'name' => 'EASTERN VISAYAS STATE UNIVERSITY',
                'campus_id' => 471,
                'created_at' => '2024-12-11 10:29:20',
                'updated_at' => '2024-12-11 10:29:20',
            ),
            484 => 
            array (
                'id' => 486,
                'name' => 'EASTERN VISAYAS STATE UNIVERSITY-ORMOC CITY',
                'campus_id' => 473,
                'created_at' => '2024-12-11 10:29:27',
                'updated_at' => '2024-12-11 10:29:27',
            ),
            485 => 
            array (
                'id' => 487,
                'name' => 'EASTERN VISAYAS STATE UNIVERSITY-TACLOBAN CITY',
                'campus_id' => 471,
                'created_at' => '2024-12-11 10:29:33',
                'updated_at' => '2024-12-11 10:29:33',
            ),
            486 => 
            array (
                'id' => 488,
                'name' => 'EASTERN VISAYAS STATE UNIVERSITY-TANAUAN',
                'campus_id' => 472,
                'created_at' => '2024-12-11 10:31:48',
                'updated_at' => '2024-12-11 10:31:48',
            ),
            487 => 
            array (
                'id' => 489,
                'name' => 'LEYTE NORMAL UNIVERSITY',
                'campus_id' => 474,
                'created_at' => '2024-12-11 10:33:41',
                'updated_at' => '2024-12-11 10:33:41',
            ),
            488 => 
            array (
                'id' => 490,
                'name' => 'LEYTE NORMAL UNIVERSITY-TACLOBAN',
                'campus_id' => 474,
                'created_at' => '2024-12-11 10:33:47',
                'updated_at' => '2024-12-11 10:33:47',
            ),
            489 => 
            array (
                'id' => 491,
                'name' => 'LEYTE STATE SCHOOL OF AGRICULTURE',
                'campus_id' => 475,
                'created_at' => '2024-12-11 10:38:18',
                'updated_at' => '2024-12-11 10:38:18',
            ),
            490 => 
            array (
                'id' => 492,
                'name' => 'NORTHERN LEYTE COLLEGE-PALOMPON',
                'campus_id' => 476,
                'created_at' => '2024-12-11 10:41:31',
                'updated_at' => '2024-12-11 10:41:31',
            ),
            491 => 
            array (
                'id' => 493,
                'name' => 'NORTHWEST SAMAR STATE UNIVERSITY-CALBAYOG CITY',
                'campus_id' => 477,
                'created_at' => '2024-12-11 10:43:06',
                'updated_at' => '2024-12-11 10:43:06',
            ),
            492 => 
            array (
                'id' => 494,
                'name' => 'NORTHWEST SAMAR STATE UNIVERSITY-SAN JORGE',
                'campus_id' => 478,
                'created_at' => '2024-12-11 10:43:17',
                'updated_at' => '2024-12-11 10:43:17',
            ),
            493 => 
            array (
                'id' => 495,
                'name' => 'PALOMPON INSTITUTE OF TECHNOLOGY',
                'campus_id' => 479,
                'created_at' => '2024-12-11 10:46:37',
                'updated_at' => '2024-12-11 10:46:37',
            ),
            494 => 
            array (
                'id' => 496,
                'name' => 'REMEDIOS TRINIDAD ROMUALDEZ MEDICAL FOUNDATION',
                'campus_id' => 466,
                'created_at' => '2024-12-11 10:47:38',
                'updated_at' => '2024-12-11 10:47:38',
            ),
            495 => 
            array (
                'id' => 497,
                'name' => 'SAINT JOSEPH COLLEGE-MAASIN CITY',
                'campus_id' => 481,
                'created_at' => '2024-12-11 10:51:27',
                'updated_at' => '2024-12-11 10:51:27',
            ),
            496 => 
            array (
                'id' => 498,
                'name' => 'SAMAR COLLEGES INC.',
                'campus_id' => 482,
                'created_at' => '2024-12-11 10:52:20',
                'updated_at' => '2024-12-11 10:52:20',
            ),
            497 => 
            array (
                'id' => 499,
                'name' => 'SAMAR STATE UNIVERSITY-CATBALOGAN CITY',
                'campus_id' => 483,
                'created_at' => '2024-12-11 10:53:52',
                'updated_at' => '2024-12-11 10:53:52',
            ),
            498 => 
            array (
                'id' => 500,
                'name' => 'SAN LORENZO RUIZ COLLEGE-ORMOC CITY',
                'campus_id' => 484,
                'created_at' => '2024-12-11 10:55:32',
                'updated_at' => '2024-12-11 10:55:32',
            ),
            499 => 
            array (
                'id' => 501,
                'name' => 'SOUTHERN LEYTE STATE UNIVERSITY-SOGOD',
                'campus_id' => 485,
                'created_at' => '2024-12-11 10:59:25',
                'updated_at' => '2024-12-11 10:59:25',
            ),
        ));
        \DB::table('school_campus_names')->insert(array (
            0 => 
            array (
                'id' => 502,
                'name' => 'SOUTHERN LEYTE STATE UNIVERSITY-BONTOC',
                'campus_id' => 486,
                'created_at' => '2024-12-11 10:59:40',
                'updated_at' => '2024-12-11 10:59:40',
            ),
            1 => 
            array (
                'id' => 503,
                'name' => 'SOUTHERN LEYTE STATE UNIVERSITY-HINUNANGAN',
                'campus_id' => 488,
                'created_at' => '2024-12-11 11:00:07',
                'updated_at' => '2024-12-11 11:00:07',
            ),
            2 => 
            array (
                'id' => 504,
                'name' => 'SOUTHERN LEYTE STATE UNIVERSITY-SAN JUAN',
                'campus_id' => 487,
                'created_at' => '2024-12-11 11:00:19',
                'updated_at' => '2024-12-11 11:00:19',
            ),
            3 => 
            array (
                'id' => 505,
                'name' => 'SOUTHERN LEYTE STATE UNIVERSITY-TOMAS OPPUS',
                'campus_id' => 489,
                'created_at' => '2024-12-11 11:00:28',
                'updated_at' => '2024-12-11 11:00:28',
            ),
            4 => 
            array (
                'id' => 506,
                'name' => 'ST. SCHOLASTICA`S COLLEGE-TACLOBAN',
                'campus_id' => 491,
                'created_at' => '2024-12-11 11:02:25',
                'updated_at' => '2024-12-11 11:02:25',
            ),
            5 => 
            array (
                'id' => 507,
                'name' => 'SYSTEMS TECHNOLOGY INSTITUTE-MAASIN',
                'campus_id' => 492,
                'created_at' => '2024-12-11 11:04:06',
                'updated_at' => '2024-12-11 11:04:06',
            ),
            6 => 
            array (
                'id' => 508,
                'name' => 'SYSTEMS TECHNOLOGY INSTITUTE-TACLOBAN',
                'campus_id' => 493,
                'created_at' => '2024-12-11 11:04:15',
                'updated_at' => '2024-12-11 11:04:15',
            ),
            7 => 
            array (
                'id' => 509,
                'name' => 'THE COLLEGE OF MAASIN',
                'campus_id' => 464,
                'created_at' => '2024-12-11 11:05:05',
                'updated_at' => '2024-12-11 11:05:05',
            ),
            8 => 
            array (
                'id' => 510,
                'name' => 'TIBURCIO TANCINCO MEMORIAL INSTITUTE OF SCIENCE AND TECHNOLOGY',
                'campus_id' => 477,
                'created_at' => '2024-12-11 11:06:29',
                'updated_at' => '2024-12-11 11:06:29',
            ),
            9 => 
            array (
                'id' => 511,
                'name' => 'UNIVERSITY OF EASTERN PHILIPPINES-CATARMAN',
                'campus_id' => 494,
                'created_at' => '2024-12-11 11:09:33',
                'updated_at' => '2024-12-11 11:09:33',
            ),
            10 => 
            array (
                'id' => 512,
                'name' => 'UNIVERSITY OF EASTERN PHILIPPINES-CATUBIG',
                'campus_id' => 495,
                'created_at' => '2024-12-11 11:09:46',
                'updated_at' => '2024-12-11 11:09:46',
            ),
            11 => 
            array (
                'id' => 513,
                'name' => 'UNIVERSITY OF EASTERN PHILIPPINES-LAOANG',
                'campus_id' => 496,
                'created_at' => '2024-12-11 11:09:58',
                'updated_at' => '2024-12-11 11:09:58',
            ),
            12 => 
            array (
                'id' => 514,
                'name' => 'UNIVERSITY OF THE PHILIPPINES-TACLOBAN',
                'campus_id' => 497,
                'created_at' => '2024-12-11 11:11:16',
                'updated_at' => '2024-12-11 11:11:16',
            ),
            13 => 
            array (
                'id' => 515,
                'name' => 'VISAYAS STATE UNIVERSITY',
                'campus_id' => 498,
                'created_at' => '2024-12-11 11:14:53',
                'updated_at' => '2024-12-11 11:14:53',
            ),
            14 => 
            array (
                'id' => 516,
                'name' => 'VISAYAS STATE UNIVERSITY-BAYBAY CITY',
                'campus_id' => 498,
                'created_at' => '2024-12-11 11:15:00',
                'updated_at' => '2024-12-11 11:15:00',
            ),
            15 => 
            array (
                'id' => 517,
                'name' => 'VISAYAS STATE UNIVERSITY-ALANGALANG',
                'campus_id' => 501,
                'created_at' => '2024-12-11 11:15:09',
                'updated_at' => '2024-12-11 11:15:09',
            ),
            16 => 
            array (
                'id' => 518,
                'name' => 'VISAYAS STATE UNIVERSITY-ISABEL',
                'campus_id' => 499,
                'created_at' => '2024-12-11 11:15:21',
                'updated_at' => '2024-12-11 11:15:21',
            ),
            17 => 
            array (
                'id' => 519,
                'name' => 'VISAYAS STATE UNIVERSITY-TOLOSA',
                'campus_id' => 502,
                'created_at' => '2024-12-11 11:15:32',
                'updated_at' => '2024-12-11 11:15:32',
            ),
            18 => 
            array (
                'id' => 520,
                'name' => 'VISAYAS STATE UNIVERSITY-VILLABA',
                'campus_id' => 500,
                'created_at' => '2024-12-11 11:15:42',
                'updated_at' => '2024-12-11 11:15:42',
            ),
            19 => 
            array (
                'id' => 521,
                'name' => 'WESTERN LEYTE COLLEGE',
                'campus_id' => 503,
                'created_at' => '2024-12-11 11:17:22',
                'updated_at' => '2024-12-11 11:17:22',
            ),
            20 => 
            array (
                'id' => 522,
                'name' => 'ANGELES UNIVERSITY FOUNDATION',
                'campus_id' => 504,
                'created_at' => '2024-12-11 11:23:15',
                'updated_at' => '2024-12-11 11:23:15',
            ),
            21 => 
            array (
                'id' => 523,
                'name' => 'ARAULLO UNIVERSITY-CABANATUAN CITY',
                'campus_id' => 505,
                'created_at' => '2024-12-11 11:25:44',
                'updated_at' => '2024-12-11 11:25:44',
            ),
            22 => 
            array (
                'id' => 524,
                'name' => 'ASYNCHRONOUS SYSTEMS AND COMPUTER INFORMATION INSTITUTE',
                'campus_id' => 506,
                'created_at' => '2024-12-11 11:28:36',
                'updated_at' => '2024-12-11 11:28:36',
            ),
            23 => 
            array (
                'id' => 525,
                'name' => 'AURORA STATE COLLEGE OF TECHNOLOGY',
                'campus_id' => 507,
                'created_at' => '2024-12-11 11:30:10',
                'updated_at' => '2024-12-11 11:30:10',
            ),
            24 => 
            array (
                'id' => 526,
                'name' => 'BALIUAG UNIVERSITY',
                'campus_id' => 509,
                'created_at' => '2024-12-11 11:37:42',
                'updated_at' => '2024-12-11 11:37:42',
            ),
            25 => 
            array (
                'id' => 527,
                'name' => 'BALIWAG POLYTECHNIC COLLEGE',
                'campus_id' => 510,
                'created_at' => '2024-12-11 11:38:45',
                'updated_at' => '2024-12-11 11:38:45',
            ),
            26 => 
            array (
                'id' => 528,
                'name' => 'BATAAN HEROES MEMORIAL COLLEGE',
                'campus_id' => 511,
                'created_at' => '2024-12-11 11:42:31',
                'updated_at' => '2024-12-11 11:42:31',
            ),
            27 => 
            array (
                'id' => 529,
                'name' => 'BATAAN COLLEGES',
                'campus_id' => 511,
                'created_at' => '2024-12-11 11:42:37',
                'updated_at' => '2024-12-11 11:42:37',
            ),
            28 => 
            array (
                'id' => 530,
                'name' => 'BATAAN PENINSULA STATE UNIVERSITY-BALANGA',
                'campus_id' => 512,
                'created_at' => '2024-12-11 11:45:01',
                'updated_at' => '2024-12-11 11:45:01',
            ),
            29 => 
            array (
                'id' => 531,
                'name' => 'BATAAN PENINSULA STATE UNIVERSITY-ABUCAY',
                'campus_id' => 513,
                'created_at' => '2024-12-11 11:45:10',
                'updated_at' => '2024-12-11 11:45:10',
            ),
            30 => 
            array (
                'id' => 532,
                'name' => 'BATAAN PENINSULA STATE UNIVERSITY-DINALUPIHAN',
                'campus_id' => 514,
                'created_at' => '2024-12-11 11:45:20',
                'updated_at' => '2024-12-11 11:45:20',
            ),
            31 => 
            array (
                'id' => 533,
                'name' => 'BATAAN NATIONAL POLYTECHNIC SCHOOL',
                'campus_id' => 512,
                'created_at' => '2024-12-11 11:45:32',
                'updated_at' => '2024-12-11 11:45:32',
            ),
            32 => 
            array (
                'id' => 534,
                'name' => 'BULACAN AGRICULTURAL STATE COLLEGE-ILDEFONSO',
                'campus_id' => 515,
                'created_at' => '2024-12-11 11:47:44',
                'updated_at' => '2024-12-11 11:47:44',
            ),
            33 => 
            array (
                'id' => 535,
                'name' => 'BULACAN STATE UNIVERSITY',
                'campus_id' => 517,
                'created_at' => '2024-12-11 11:51:24',
                'updated_at' => '2024-12-11 11:51:24',
            ),
            34 => 
            array (
                'id' => 536,
                'name' => 'BULACAN STATE UNIVERSITY-MALOLOS CITY',
                'campus_id' => 517,
                'created_at' => '2024-12-11 11:51:36',
                'updated_at' => '2024-12-11 11:51:36',
            ),
            35 => 
            array (
                'id' => 537,
                'name' => 'BULACAN STATE UNIVERSITY-BUSTOS',
                'campus_id' => 518,
                'created_at' => '2024-12-11 11:52:00',
                'updated_at' => '2024-12-11 11:52:00',
            ),
            36 => 
            array (
                'id' => 538,
                'name' => 'BULACAN STATE UNIVERSITY-HAGONOY',
                'campus_id' => 520,
                'created_at' => '2024-12-11 11:52:16',
                'updated_at' => '2024-12-11 11:52:16',
            ),
            37 => 
            array (
                'id' => 539,
                'name' => 'BULACAN STATE UNIVERSITY-MENESES',
                'campus_id' => 519,
                'created_at' => '2024-12-11 11:52:37',
                'updated_at' => '2024-12-11 11:52:37',
            ),
            38 => 
            array (
                'id' => 540,
                'name' => 'BULACAN STATE UNIVERSITY-SARMIENTO',
                'campus_id' => 521,
                'created_at' => '2024-12-11 11:56:45',
                'updated_at' => '2024-12-11 11:56:45',
            ),
            39 => 
            array (
                'id' => 541,
                'name' => 'BULACAN STATE UNIVERSITY-SAN RAFAEL',
                'campus_id' => 522,
                'created_at' => '2024-12-11 11:58:15',
                'updated_at' => '2024-12-11 11:58:15',
            ),
            40 => 
            array (
                'id' => 542,
                'name' => 'CENTRAL LUZON INSTITUTE OF TECHNOLOGY',
                'campus_id' => 523,
                'created_at' => '2024-12-11 13:12:37',
                'updated_at' => '2024-12-11 13:12:37',
            ),
            41 => 
            array (
                'id' => 543,
                'name' => 'CENTRAL LUZON STATE UNIVERSITY',
                'campus_id' => 524,
                'created_at' => '2024-12-11 13:15:27',
                'updated_at' => '2024-12-11 13:15:27',
            ),
            42 => 
            array (
                'id' => 544,
                'name' => 'CENTRO ESCOLAR UNIVERSITY-MALOLOS CITY',
                'campus_id' => 527,
                'created_at' => '2024-12-11 13:18:57',
                'updated_at' => '2024-12-11 13:18:57',
            ),
            43 => 
            array (
                'id' => 545,
                'name' => 'CITY COLLEGE OF ANGELES',
                'campus_id' => 528,
                'created_at' => '2024-12-11 13:19:54',
                'updated_at' => '2024-12-11 13:19:54',
            ),
            44 => 
            array (
                'id' => 546,
                'name' => 'COLEGIO DE SAN GABRIEL ARCANGEL',
                'campus_id' => 529,
                'created_at' => '2024-12-11 13:21:32',
                'updated_at' => '2024-12-11 13:21:32',
            ),
            45 => 
            array (
                'id' => 547,
                'name' => 'COLEGIO DE SAN JUAN DE LETRAN-BATAAN',
                'campus_id' => 530,
                'created_at' => '2024-12-11 13:23:40',
                'updated_at' => '2024-12-11 13:23:40',
            ),
            46 => 
            array (
                'id' => 548,
                'name' => 'COLEGIO DE SAN SEBASTIAN-PAMPANGA',
                'campus_id' => 531,
                'created_at' => '2024-12-11 13:27:12',
                'updated_at' => '2024-12-11 13:27:12',
            ),
            47 => 
            array (
                'id' => 549,
                'name' => 'COLUMBAN COLLEGE',
                'campus_id' => 532,
                'created_at' => '2024-12-11 13:29:06',
                'updated_at' => '2024-12-11 13:29:06',
            ),
            48 => 
            array (
                'id' => 550,
                'name' => 'COMTEQ COMPUTER AND BUSINESS COLLEGE',
                'campus_id' => 533,
                'created_at' => '2024-12-11 13:30:39',
                'updated_at' => '2024-12-11 13:30:39',
            ),
            49 => 
            array (
                'id' => 551,
                'name' => 'DON HONORIO VENTURA STATE UNIVERSITY',
                'campus_id' => 534,
                'created_at' => '2024-12-11 13:33:40',
                'updated_at' => '2024-12-11 13:33:40',
            ),
            50 => 
            array (
                'id' => 552,
                'name' => 'EAST CENTRAL COLLEGES',
                'campus_id' => 535,
                'created_at' => '2024-12-11 13:39:02',
                'updated_at' => '2024-12-11 13:39:02',
            ),
            51 => 
            array (
                'id' => 553,
                'name' => 'EDUARDO L. JOSON MEMORIAL COLLEGE',
                'campus_id' => 536,
                'created_at' => '2024-12-11 13:39:53',
                'updated_at' => '2024-12-11 13:39:53',
            ),
            52 => 
            array (
                'id' => 554,
                'name' => 'FIRST CITY PROVIDENTIAL COLLEGE-SAN JOSE DEL MONTE CITY',
                'campus_id' => 537,
                'created_at' => '2024-12-11 13:41:07',
                'updated_at' => '2024-12-11 13:41:07',
            ),
            53 => 
            array (
                'id' => 555,
                'name' => 'FORTUNATO F. HALILI NATIONAL AGRICULTURAL SCHOOL',
                'campus_id' => 538,
                'created_at' => '2024-12-11 13:44:55',
                'updated_at' => '2024-12-11 13:44:55',
            ),
            54 => 
            array (
                'id' => 556,
                'name' => 'HOLY ANGEL UNIVERSITY',
                'campus_id' => 539,
                'created_at' => '2024-12-11 13:47:32',
                'updated_at' => '2024-12-11 13:47:32',
            ),
            55 => 
            array (
                'id' => 557,
                'name' => 'LA FORTUNA COLLEGE-GUIMBA',
                'campus_id' => 540,
                'created_at' => '2024-12-11 13:50:13',
                'updated_at' => '2024-12-11 13:50:13',
            ),
            56 => 
            array (
                'id' => 558,
                'name' => 'LIMAY POLYTECHNIC COLLEGE',
                'campus_id' => 541,
                'created_at' => '2024-12-11 13:51:05',
                'updated_at' => '2024-12-11 13:51:05',
            ),
            57 => 
            array (
                'id' => 559,
                'name' => 'MABALACAT CITY COLLEGE',
                'campus_id' => 542,
                'created_at' => '2024-12-11 13:52:47',
                'updated_at' => '2024-12-11 13:52:47',
            ),
            58 => 
            array (
                'id' => 560,
                'name' => 'MEYCAUAYAN COLLEGE',
                'campus_id' => 543,
                'created_at' => '2024-12-11 13:53:41',
                'updated_at' => '2024-12-11 13:53:41',
            ),
            59 => 
            array (
                'id' => 561,
                'name' => 'MICROCITY COLLEGE OF BUSINESS AND TECHNOLOGY-BATAAN',
                'campus_id' => 544,
                'created_at' => '2024-12-11 13:54:45',
                'updated_at' => '2024-12-11 13:54:45',
            ),
            60 => 
            array (
                'id' => 562,
                'name' => 'MICROCITY COMPUTER COLLEGE FOUNDATION INC.',
                'campus_id' => 544,
                'created_at' => '2024-12-11 13:56:21',
                'updated_at' => '2024-12-11 13:56:21',
            ),
            61 => 
            array (
                'id' => 563,
                'name' => 'NUEVA ECIJA UNIVERSITY OF SCIENCE AND TECHNOLOGY-GENERAL TINIO',
                'campus_id' => 545,
                'created_at' => '2024-12-11 14:03:44',
                'updated_at' => '2024-12-11 14:03:44',
            ),
            62 => 
            array (
                'id' => 564,
                'name' => 'NUEVA ECIJA UNIVERSITY OF SCIENCE AND TECHNOLOGY-SUMACAB',
                'campus_id' => 546,
                'created_at' => '2024-12-11 14:03:55',
                'updated_at' => '2024-12-11 14:03:55',
            ),
            63 => 
            array (
                'id' => 565,
                'name' => 'OUR LADY OF FATIMA UNIVERSITY-PAMPANGA',
                'campus_id' => 547,
                'created_at' => '2024-12-11 14:05:53',
                'updated_at' => '2024-12-11 14:05:53',
            ),
            64 => 
            array (
                'id' => 566,
                'name' => 'PAMPANGA STATE AGRICULTURAL UNIVERSITY',
                'campus_id' => 548,
                'created_at' => '2024-12-11 14:07:22',
                'updated_at' => '2024-12-11 14:07:22',
            ),
            65 => 
            array (
                'id' => 567,
                'name' => 'PHILIPPINE ELECTRONICS AND COMPUTER INSTITUTE',
                'campus_id' => 549,
                'created_at' => '2024-12-11 14:08:56',
                'updated_at' => '2024-12-11 14:08:56',
            ),
            66 => 
            array (
                'id' => 568,
                'name' => 'PHINMA-ARAULLO UNIVERSITY',
                'campus_id' => 505,
                'created_at' => '2024-12-11 14:09:41',
                'updated_at' => '2024-12-11 14:09:41',
            ),
            67 => 
            array (
                'id' => 569,
                'name' => 'POLYTECHNIC COLLEGE OF THE CITY OF MEYCAUAYAN',
                'campus_id' => 550,
                'created_at' => '2024-12-11 14:10:37',
                'updated_at' => '2024-12-11 14:10:37',
            ),
            68 => 
            array (
                'id' => 570,
                'name' => 'POLYTECHNIC UNIVERSITY OF THE PHILIPPINES-BATAAN',
                'campus_id' => 551,
                'created_at' => '2024-12-11 14:14:31',
                'updated_at' => '2024-12-11 14:14:31',
            ),
            69 => 
            array (
                'id' => 571,
                'name' => 'POLYTECHNIC UNIVERSITY OF THE PHILIPPINES-MARIVELES',
                'campus_id' => 551,
                'created_at' => '2024-12-11 14:14:38',
                'updated_at' => '2024-12-11 14:14:38',
            ),
            70 => 
            array (
                'id' => 572,
                'name' => 'POLYTECHNIC UNIVERSITY OF THE PHILIPPINES-STA. MARIA',
                'campus_id' => 552,
                'created_at' => '2024-12-11 14:14:44',
                'updated_at' => '2024-12-11 14:14:44',
            ),
            71 => 
            array (
                'id' => 573,
                'name' => 'PRESIDENT RAMON MAGSAYSAY STATE UNIVERSITY',
                'campus_id' => 553,
                'created_at' => '2024-12-11 14:18:08',
                'updated_at' => '2024-12-11 14:18:08',
            ),
            72 => 
            array (
                'id' => 574,
                'name' => 'SAINT ANTHONY COLLEGE OF TECHNOLOGY-MABALACAT',
                'campus_id' => 554,
                'created_at' => '2024-12-11 14:19:26',
                'updated_at' => '2024-12-11 14:19:26',
            ),
            73 => 
            array (
                'id' => 575,
                'name' => 'SAINT MARY`S ANGELS COLLEGE OF PAMPAMGA',
                'campus_id' => 555,
                'created_at' => '2024-12-11 14:21:38',
                'updated_at' => '2024-12-11 14:21:38',
            ),
            74 => 
            array (
                'id' => 576,
                'name' => 'SEBANI ESTATE AGRICULTURAL COLLEGE',
                'campus_id' => 556,
                'created_at' => '2024-12-11 14:24:05',
                'updated_at' => '2024-12-11 14:24:05',
            ),
            75 => 
            array (
                'id' => 577,
                'name' => 'ST. NICOLAS COLLEGE OF BUSINESS AND TECHNOLOGY',
                'campus_id' => 557,
                'created_at' => '2024-12-11 14:24:51',
                'updated_at' => '2024-12-11 14:24:51',
            ),
            76 => 
            array (
                'id' => 578,
                'name' => 'SYSTEMS PLUS COLLEGE FOUNDATION',
                'campus_id' => 558,
                'created_at' => '2024-12-11 14:29:48',
                'updated_at' => '2024-12-11 14:29:48',
            ),
            77 => 
            array (
                'id' => 579,
                'name' => 'TARLAC AGRICULTURAL UNIVERSITY',
                'campus_id' => 559,
                'created_at' => '2024-12-11 14:31:10',
                'updated_at' => '2024-12-11 14:31:10',
            ),
            78 => 
            array (
                'id' => 580,
                'name' => 'TARLAC STATE UNIVERSITY-TARLAC CITY',
                'campus_id' => 560,
                'created_at' => '2024-12-11 14:36:02',
                'updated_at' => '2024-12-11 14:36:02',
            ),
            79 => 
            array (
                'id' => 581,
                'name' => 'TARLAC STATE UNIVERSITY-SAN ISIDRO',
                'campus_id' => 561,
                'created_at' => '2024-12-11 14:36:13',
                'updated_at' => '2024-12-11 14:36:13',
            ),
            80 => 
            array (
                'id' => 582,
                'name' => 'TARLAC STATE UNIVERSITY-LUCINDA',
                'campus_id' => 562,
                'created_at' => '2024-12-11 14:36:22',
                'updated_at' => '2024-12-11 14:36:22',
            ),
            81 => 
            array (
                'id' => 583,
                'name' => 'TOMAS DEL ROSARIO COLLEGE',
                'campus_id' => 563,
                'created_at' => '2024-12-11 14:39:15',
                'updated_at' => '2024-12-11 14:39:15',
            ),
            82 => 
            array (
                'id' => 584,
                'name' => 'UNITED SCHOOLS OF SCIENCE AND TECHNOLOGY',
                'campus_id' => 564,
                'created_at' => '2024-12-11 14:50:18',
                'updated_at' => '2024-12-11 14:50:18',
            ),
            83 => 
            array (
                'id' => 585,
                'name' => 'UNIVERSITY OF THE ASSUMPTION',
                'campus_id' => 565,
                'created_at' => '2024-12-11 15:04:18',
                'updated_at' => '2024-12-11 15:04:18',
            ),
            84 => 
            array (
                'id' => 586,
                'name' => 'WESLEYAN UNIVERSITY-PHILIPPINES',
                'campus_id' => 566,
                'created_at' => '2024-12-11 15:06:07',
                'updated_at' => '2024-12-11 15:06:07',
            ),
            85 => 
            array (
                'id' => 587,
                'name' => 'WESTERN LUZON AGRICULTURAL COLLEGE',
                'campus_id' => 553,
                'created_at' => '2024-12-11 15:08:53',
                'updated_at' => '2024-12-11 15:08:53',
            ),
            86 => 
            array (
                'id' => 588,
                'name' => 'CENTRAL LUZON POLYTECHNIC COLLEGE',
                'campus_id' => 545,
                'created_at' => '2024-12-11 15:24:25',
                'updated_at' => '2024-12-11 15:24:25',
            ),
            87 => 
            array (
                'id' => 589,
                'name' => 'ACTS COMPUTER COLLEGE-SANTA CRUZ',
                'campus_id' => 567,
                'created_at' => '2024-12-11 15:26:36',
                'updated_at' => '2024-12-11 15:26:36',
            ),
            88 => 
            array (
                'id' => 590,
                'name' => 'ADVENTIST UNIVERSITY OF THE PHILIPPINES-SILANG',
                'campus_id' => 568,
                'created_at' => '2024-12-11 15:28:08',
                'updated_at' => '2024-12-11 15:28:08',
            ),
            89 => 
            array (
                'id' => 591,
                'name' => 'AMA COMPUTER COLLEGE-BATANGAS CITY',
                'campus_id' => 569,
                'created_at' => '2024-12-11 15:31:20',
                'updated_at' => '2024-12-11 15:31:20',
            ),
            90 => 
            array (
                'id' => 592,
                'name' => 'AMA COMPUTER COLLEGE-CALAMBA CITY',
                'campus_id' => 571,
                'created_at' => '2024-12-11 15:31:38',
                'updated_at' => '2024-12-11 15:31:38',
            ),
            91 => 
            array (
                'id' => 593,
                'name' => 'AMA COMPUTER COLLEGE-LIPA CITY',
                'campus_id' => 572,
                'created_at' => '2024-12-11 15:31:52',
                'updated_at' => '2024-12-11 15:31:52',
            ),
            92 => 
            array (
                'id' => 594,
                'name' => 'AMA COMPUTER COLLEGE-SANTA CRUZ',
                'campus_id' => 573,
                'created_at' => '2024-12-11 15:32:07',
                'updated_at' => '2024-12-11 15:32:07',
            ),
            93 => 
            array (
                'id' => 595,
                'name' => 'AMA COMPUTER COLLEGE-BIÑAN CITY',
                'campus_id' => 570,
                'created_at' => '2024-12-11 15:32:33',
                'updated_at' => '2024-12-11 15:32:33',
            ),
            94 => 
            array (
                'id' => 596,
                'name' => 'EMILIO AGUINALDO COLLEGE-DASMARIÑAS',
                'campus_id' => 574,
                'created_at' => '2024-12-11 15:33:59',
                'updated_at' => '2024-12-11 15:33:59',
            ),
            95 => 
            array (
                'id' => 597,
                'name' => 'AMA COMPUTER LEARNING CENTER-BACOOR',
                'campus_id' => 575,
                'created_at' => '2024-12-11 15:35:44',
                'updated_at' => '2024-12-11 15:35:44',
            ),
            96 => 
            array (
                'id' => 598,
                'name' => 'AMA COMPUTER LEARNING CENTER-CALAMBA CITY',
                'campus_id' => 576,
                'created_at' => '2024-12-11 15:35:54',
                'updated_at' => '2024-12-11 15:35:54',
            ),
            97 => 
            array (
                'id' => 599,
                'name' => 'AMA COMPUTER LEARNING CENTER-EAST RIZAL',
                'campus_id' => 577,
                'created_at' => '2024-12-11 15:39:29',
                'updated_at' => '2024-12-11 15:39:29',
            ),
            98 => 
            array (
                'id' => 600,
                'name' => 'AMA COMPUTER LEARNING CENTER-LIPA CITY',
                'campus_id' => 578,
                'created_at' => '2024-12-11 15:39:40',
                'updated_at' => '2024-12-11 15:39:40',
            ),
            99 => 
            array (
                'id' => 601,
                'name' => 'AMA COMPUTER LEARNING CENTER-LUCENA CITY',
                'campus_id' => 579,
                'created_at' => '2024-12-11 15:39:51',
                'updated_at' => '2024-12-11 15:39:51',
            ),
            100 => 
            array (
                'id' => 602,
                'name' => 'AMA COMPUTER LEARNING CENTER-ROSARIO',
                'campus_id' => 580,
                'created_at' => '2024-12-11 15:39:59',
                'updated_at' => '2024-12-11 15:39:59',
            ),
            101 => 
            array (
                'id' => 603,
                'name' => 'AMA COMPUTER LEARNING CENTER-SAN PABLO CITY',
                'campus_id' => 581,
                'created_at' => '2024-12-11 15:40:10',
                'updated_at' => '2024-12-11 15:40:10',
            ),
            102 => 
            array (
                'id' => 604,
                'name' => 'AMA COMPUTER LEARNING CENTER-TAYTAY',
                'campus_id' => 582,
                'created_at' => '2024-12-11 15:40:21',
                'updated_at' => '2024-12-11 15:40:21',
            ),
            103 => 
            array (
                'id' => 605,
                'name' => 'AMATEL COLLEGE-SAN PEDRO CITY',
                'campus_id' => 583,
                'created_at' => '2024-12-11 15:43:43',
                'updated_at' => '2024-12-11 15:43:43',
            ),
            104 => 
            array (
                'id' => 606,
                'name' => 'BATANGAS STATE UNIVERSITY-ALANGILAN',
                'campus_id' => 585,
                'created_at' => '2024-12-11 15:50:22',
                'updated_at' => '2024-12-11 15:50:22',
            ),
            105 => 
            array (
                'id' => 607,
                'name' => 'BATANGAS STATE UNIVERSITY-BATANGAS CITY',
                'campus_id' => 584,
                'created_at' => '2024-12-11 15:50:33',
                'updated_at' => '2024-12-11 15:50:33',
            ),
            106 => 
            array (
                'id' => 608,
                'name' => 'BATANGAS STATE UNIVERSITY-MAIN',
                'campus_id' => 584,
                'created_at' => '2024-12-11 15:50:40',
                'updated_at' => '2024-12-11 15:50:40',
            ),
            107 => 
            array (
                'id' => 609,
                'name' => 'BATANGAS STATE UNIVERSITY-BALAYAN',
                'campus_id' => 586,
                'created_at' => '2024-12-11 15:50:59',
                'updated_at' => '2024-12-11 15:50:59',
            ),
            108 => 
            array (
                'id' => 610,
                'name' => 'BATANGAS STATE UNIVERSITY-LEMERY',
                'campus_id' => 587,
                'created_at' => '2024-12-11 15:51:11',
                'updated_at' => '2024-12-11 15:51:11',
            ),
            109 => 
            array (
                'id' => 611,
                'name' => 'BATANGAS STATE UNIVERSITY-LIPA CITY',
                'campus_id' => 588,
                'created_at' => '2024-12-11 15:51:35',
                'updated_at' => '2024-12-11 15:51:35',
            ),
            110 => 
            array (
                'id' => 612,
                'name' => 'BATANGAS STATE UNIVERSITY-LOBO',
                'campus_id' => 589,
                'created_at' => '2024-12-11 15:51:45',
                'updated_at' => '2024-12-11 15:51:45',
            ),
            111 => 
            array (
                'id' => 613,
                'name' => 'BATANGAS STATE UNIVERSITY-MALVAR',
                'campus_id' => 590,
                'created_at' => '2024-12-11 15:52:06',
                'updated_at' => '2024-12-11 15:52:06',
            ),
            112 => 
            array (
                'id' => 614,
                'name' => 'BATANGAS STATE UNIVERSITY-NASUGBU',
                'campus_id' => 591,
                'created_at' => '2024-12-11 15:52:18',
                'updated_at' => '2024-12-11 15:52:18',
            ),
            113 => 
            array (
                'id' => 615,
                'name' => 'BATANGAS STATE UNIVERSITY-ROSARIO',
                'campus_id' => 592,
                'created_at' => '2024-12-11 15:52:38',
                'updated_at' => '2024-12-11 15:52:38',
            ),
            114 => 
            array (
                'id' => 616,
                'name' => 'CALAYAN EDUCATIONAL FOUNDATION INC.-LUCENA CITY',
                'campus_id' => 595,
                'created_at' => '2024-12-11 15:54:47',
                'updated_at' => '2024-12-11 15:54:47',
            ),
            115 => 
            array (
                'id' => 617,
                'name' => 'CAVITE STATE UNIVERSITY-BACOOR',
                'campus_id' => 597,
                'created_at' => '2024-12-11 16:01:27',
                'updated_at' => '2024-12-11 16:01:27',
            ),
            116 => 
            array (
                'id' => 618,
                'name' => 'CAVITE STATE UNIVERSITY-CARMONA',
                'campus_id' => 598,
                'created_at' => '2024-12-11 16:01:48',
                'updated_at' => '2024-12-11 16:01:48',
            ),
            117 => 
            array (
                'id' => 619,
                'name' => 'CAVITE STATE UNIVERSITY-CAVITE CITY',
                'campus_id' => 599,
                'created_at' => '2024-12-11 16:02:05',
                'updated_at' => '2024-12-11 16:02:05',
            ),
            118 => 
            array (
                'id' => 620,
                'name' => 'CAVITE STATE UNIVERSITY-GEN.TRIAS CITY',
                'campus_id' => 600,
                'created_at' => '2024-12-11 16:02:17',
                'updated_at' => '2024-12-11 16:02:17',
            ),
            119 => 
            array (
                'id' => 621,
                'name' => 'CAVITE STATE UNIVERSITY-IMUS',
                'campus_id' => 601,
                'created_at' => '2024-12-11 16:02:29',
                'updated_at' => '2024-12-11 16:02:29',
            ),
            120 => 
            array (
                'id' => 622,
                'name' => 'CAVITE STATE UNIVERSITY-NAIC',
                'campus_id' => 602,
                'created_at' => '2024-12-11 16:02:54',
                'updated_at' => '2024-12-11 16:02:54',
            ),
            121 => 
            array (
                'id' => 623,
                'name' => 'CAVITE STATE UNIVERSITY-ROSARIO',
                'campus_id' => 603,
                'created_at' => '2024-12-11 16:03:11',
                'updated_at' => '2024-12-11 16:03:11',
            ),
            122 => 
            array (
                'id' => 624,
                'name' => 'CAVITE STATE UNIVERSITY-SILANG',
                'campus_id' => 604,
                'created_at' => '2024-12-11 16:03:20',
                'updated_at' => '2024-12-11 16:03:20',
            ),
            123 => 
            array (
                'id' => 625,
                'name' => 'CAVITE STATE UNIVERSITY-TRECE MARTIREZ',
                'campus_id' => 605,
                'created_at' => '2024-12-11 16:03:30',
                'updated_at' => '2024-12-11 16:03:30',
            ),
            124 => 
            array (
                'id' => 626,
                'name' => 'CAVITE STATE UNIVERSITY-MAIN',
                'campus_id' => 596,
                'created_at' => '2024-12-11 16:03:41',
                'updated_at' => '2024-12-11 16:03:41',
            ),
            125 => 
            array (
                'id' => 627,
                'name' => 'CAVITE STATE UNIVERSITY-INDANG',
                'campus_id' => 596,
                'created_at' => '2024-12-11 16:03:48',
                'updated_at' => '2024-12-11 16:03:48',
            ),
            126 => 
            array (
                'id' => 628,
                'name' => 'DE LA SALLE UNIVERSITY-DASMARIÑAS',
                'campus_id' => 606,
                'created_at' => '2024-12-11 16:07:13',
                'updated_at' => '2024-12-11 16:07:13',
            ),
            127 => 
            array (
                'id' => 629,
                'name' => 'DE LA SALLE UNIVERSITY-BIÑAN CITY',
                'campus_id' => 607,
                'created_at' => '2024-12-11 16:07:24',
                'updated_at' => '2024-12-11 16:07:24',
            ),
            128 => 
            array (
                'id' => 630,
                'name' => 'DE LA SALLE UNIVERSITY-LIPA CITY',
                'campus_id' => 608,
                'created_at' => '2024-12-11 16:07:33',
                'updated_at' => '2024-12-11 16:07:33',
            ),
            129 => 
            array (
                'id' => 631,
                'name' => 'CHRISTIAN COLLEGE OF TANAUAN',
                'campus_id' => 609,
                'created_at' => '2024-12-11 16:08:52',
                'updated_at' => '2024-12-11 16:08:52',
            ),
            130 => 
            array (
                'id' => 632,
                'name' => 'CITY COLLEGE OF CALAMBA',
                'campus_id' => 610,
                'created_at' => '2024-12-11 16:10:43',
                'updated_at' => '2024-12-11 16:10:43',
            ),
            131 => 
            array (
                'id' => 633,
                'name' => 'COLEGIO DE SAN JUAN DE LETRAN-CALAMBA',
                'campus_id' => 611,
                'created_at' => '2024-12-11 16:11:44',
                'updated_at' => '2024-12-11 16:11:44',
            ),
            132 => 
            array (
                'id' => 634,
                'name' => 'COLEGIO DE SAN PEDRO',
                'campus_id' => 612,
                'created_at' => '2024-12-11 16:12:54',
                'updated_at' => '2024-12-11 16:12:54',
            ),
            133 => 
            array (
                'id' => 635,
                'name' => 'DALUBHASAAN NG LUNGSOD NG SAN PABLO',
                'campus_id' => 613,
                'created_at' => '2024-12-11 16:13:47',
                'updated_at' => '2024-12-11 16:13:47',
            ),
            134 => 
            array (
                'id' => 636,
                'name' => 'DMMC INSTITUTE OF HEALTH SCIENCES-TANAUAN CITY',
                'campus_id' => 614,
                'created_at' => '2024-12-11 16:14:46',
                'updated_at' => '2024-12-11 16:14:46',
            ),
            135 => 
            array (
                'id' => 637,
                'name' => 'DON BOSCO COLLEGE OF SEMINARY-CALAMBA',
                'campus_id' => 615,
                'created_at' => '2024-12-11 16:15:55',
                'updated_at' => '2024-12-11 16:15:55',
            ),
            136 => 
            array (
                'id' => 638,
                'name' => 'DUALTECH TRAINING CENTER-CALAMBA',
                'campus_id' => 616,
                'created_at' => '2024-12-11 16:17:18',
                'updated_at' => '2024-12-11 16:17:18',
            ),
            137 => 
            array (
                'id' => 639,
                'name' => 'FIRST ASIA INSTITUTE OF TECHNOLOGY HUMANITY',
                'campus_id' => 618,
                'created_at' => '2024-12-11 16:21:47',
                'updated_at' => '2024-12-11 16:21:47',
            ),
            138 => 
            array (
                'id' => 640,
                'name' => 'GRANBY COLLEGE OF SCIENCE AND TECHNOLOGY',
                'campus_id' => 619,
                'created_at' => '2024-12-11 16:25:07',
                'updated_at' => '2024-12-11 16:25:07',
            ),
            139 => 
            array (
                'id' => 641,
                'name' => 'INSTITUTE OF CREATIVE COMPUTER TECHNOLOGY',
                'campus_id' => 620,
                'created_at' => '2024-12-11 16:27:19',
                'updated_at' => '2024-12-11 16:27:19',
            ),
            140 => 
            array (
                'id' => 642,
                'name' => 'INTERNATIONAL ELECTRONICS AND TECHNICAL INSTITUTE-BIÑAN CITY',
                'campus_id' => 621,
                'created_at' => '2024-12-11 16:31:17',
                'updated_at' => '2024-12-11 16:31:17',
            ),
            141 => 
            array (
                'id' => 643,
                'name' => 'INTERNATIONAL ELECTRONICS AND TECHNICAL INSTITUTE-CAINTA',
                'campus_id' => 622,
                'created_at' => '2024-12-11 16:31:32',
                'updated_at' => '2024-12-11 16:31:32',
            ),
            142 => 
            array (
                'id' => 644,
                'name' => 'INTERNATIONAL ELECTRONICS AND TECHNICAL INSTITUTE-CAVITE',
                'campus_id' => 623,
                'created_at' => '2024-12-11 16:31:44',
                'updated_at' => '2024-12-11 16:31:44',
            ),
            143 => 
            array (
                'id' => 645,
                'name' => 'INTERNATIONAL ELECTRONICS AND TECHNICAL INSTITUTE-IMUS',
                'campus_id' => 624,
                'created_at' => '2024-12-11 16:32:06',
                'updated_at' => '2024-12-11 16:32:06',
            ),
            144 => 
            array (
                'id' => 646,
                'name' => 'INTERNATIONAL ELECTRONICS AND TECHNICAL INSTITUTE-SAN PEDRO',
                'campus_id' => 625,
                'created_at' => '2024-12-11 16:32:17',
                'updated_at' => '2024-12-11 16:32:17',
            ),
            145 => 
            array (
                'id' => 647,
                'name' => 'JACOBO GONZALES MEMORIAL SCHOOL OF ARTS AND TRADES',
                'campus_id' => 626,
                'created_at' => '2024-12-11 16:33:31',
                'updated_at' => '2024-12-11 16:33:31',
            ),
            146 => 
            array (
                'id' => 648,
                'name' => 'KOLEHIYO NG LUNGSOD NG LIPA',
                'campus_id' => 627,
                'created_at' => '2024-12-11 16:35:30',
                'updated_at' => '2024-12-11 16:35:30',
            ),
            147 => 
            array (
                'id' => 649,
                'name' => 'LAGUNA COLLEGE BUSINESS OF ARTS',
                'campus_id' => 628,
                'created_at' => '2024-12-11 16:36:53',
                'updated_at' => '2024-12-11 16:36:53',
            ),
            148 => 
            array (
                'id' => 650,
                'name' => 'LAGUNA COLLEGE-SAN PABLO',
                'campus_id' => 629,
                'created_at' => '2024-12-11 16:39:41',
                'updated_at' => '2024-12-11 16:39:41',
            ),
            149 => 
            array (
                'id' => 651,
                'name' => 'LAGUNA SCIENCE AND TECHNOLOGY COLLEGE',
                'campus_id' => 630,
                'created_at' => '2024-12-11 16:40:59',
                'updated_at' => '2024-12-11 16:40:59',
            ),
            150 => 
            array (
                'id' => 652,
                'name' => 'LAGUNA STATE POLYTECHNIC UNIVERSITY',
                'campus_id' => 631,
                'created_at' => '2024-12-11 16:46:58',
                'updated_at' => '2024-12-11 16:46:58',
            ),
            151 => 
            array (
                'id' => 653,
                'name' => 'LAGUNA STATE POLYTECHNIC UNIVERSITY-SINILOAN',
                'campus_id' => 631,
                'created_at' => '2024-12-11 16:47:08',
                'updated_at' => '2024-12-11 16:47:08',
            ),
            152 => 
            array (
                'id' => 654,
                'name' => 'LAGUNA STATE POLYTECHNIC UNIVERSITY-LOS BAÑOS',
                'campus_id' => 633,
                'created_at' => '2024-12-11 16:47:23',
                'updated_at' => '2024-12-11 16:47:23',
            ),
            153 => 
            array (
                'id' => 655,
                'name' => 'LAGUNA STATE POLYTECHNIC UNIVERSITY-SANTA CRUZ',
                'campus_id' => 632,
                'created_at' => '2024-12-11 16:47:45',
                'updated_at' => '2024-12-11 16:47:45',
            ),
            154 => 
            array (
                'id' => 656,
                'name' => 'LAGUNA STATE POLYTECHNIC UNIVERSITY-STA. CRUZ',
                'campus_id' => 632,
                'created_at' => '2024-12-11 16:47:52',
                'updated_at' => '2024-12-11 16:47:52',
            ),
            155 => 
            array (
                'id' => 657,
                'name' => 'LAGUNA STATE POLYTECHNIC UNIVERSITY-SAN PABLO CITY',
                'campus_id' => 634,
                'created_at' => '2024-12-11 16:48:15',
                'updated_at' => '2024-12-11 16:48:15',
            ),
            156 => 
            array (
                'id' => 658,
                'name' => 'LAGUNA STATE POLYTECHNIC UNIVERSITY-NAGCARLAN',
                'campus_id' => 635,
                'created_at' => '2024-12-11 16:49:30',
                'updated_at' => '2024-12-11 16:49:30',
            ),
            157 => 
            array (
                'id' => 659,
                'name' => 'LAGUNA COLLEGE OF ARTS AND TRADES',
                'campus_id' => 631,
                'created_at' => '2024-12-11 16:50:01',
                'updated_at' => '2024-12-11 16:50:01',
            ),
            158 => 
            array (
                'id' => 661,
                'name' => 'LAGUNA TECHNOLOGICAL INSTITUTE-BIÑAN CITY',
                'campus_id' => 636,
                'created_at' => '2024-12-11 16:54:55',
                'updated_at' => '2024-12-11 16:54:55',
            ),
            159 => 
            array (
                'id' => 662,
                'name' => 'LAGUNA UNIVERSITY',
                'campus_id' => 637,
                'created_at' => '2024-12-11 16:55:58',
                'updated_at' => '2024-12-11 16:55:58',
            ),
            160 => 
            array (
                'id' => 663,
                'name' => 'LETRAN COLLEGE OF CALAMBA',
                'campus_id' => 611,
                'created_at' => '2024-12-11 16:57:32',
                'updated_at' => '2024-12-11 16:57:32',
            ),
            161 => 
            array (
                'id' => 664,
                'name' => 'LIPA CITY COLLEGES',
                'campus_id' => 638,
                'created_at' => '2024-12-11 16:58:20',
                'updated_at' => '2024-12-11 16:58:20',
            ),
            162 => 
            array (
                'id' => 665,
                'name' => 'LOS BAÑOS COLLEGE OF FISHERIES',
                'campus_id' => 633,
                'created_at' => '2024-12-11 17:00:06',
                'updated_at' => '2024-12-11 17:00:06',
            ),
            163 => 
            array (
                'id' => 666,
                'name' => 'LYCEUM OF THE PHILIPPINES UNIVERSITY-BATANGAS',
                'campus_id' => 639,
                'created_at' => '2024-12-11 17:03:06',
                'updated_at' => '2024-12-11 17:03:06',
            ),
            164 => 
            array (
                'id' => 667,
                'name' => 'LYCEUM OF THE PHILIPPINES UNIVERSITY-CALAMBA',
                'campus_id' => 640,
                'created_at' => '2024-12-11 17:03:16',
                'updated_at' => '2024-12-11 17:03:16',
            ),
            165 => 
            array (
                'id' => 668,
                'name' => 'LYCEUM OF CALAMBA',
                'campus_id' => 640,
                'created_at' => '2024-12-11 17:03:21',
                'updated_at' => '2024-12-11 17:03:21',
            ),
            166 => 
            array (
                'id' => 669,
                'name' => 'LYCEUM OF THE PHILIPPINES UNIVERSITY-CAVITE',
                'campus_id' => 641,
                'created_at' => '2024-12-11 17:03:32',
                'updated_at' => '2024-12-11 17:03:32',
            ),
            167 => 
            array (
                'id' => 670,
                'name' => 'LYCEUM OF THE PHILIPPINES UNIVERSITY-LAGUNA',
                'campus_id' => 642,
                'created_at' => '2024-12-11 17:03:40',
                'updated_at' => '2024-12-11 17:03:40',
            ),
            168 => 
            array (
                'id' => 671,
                'name' => 'MALAYAN COLLEGES LAGUNA',
                'campus_id' => 643,
                'created_at' => '2024-12-11 17:04:45',
                'updated_at' => '2024-12-11 17:04:45',
            ),
            169 => 
            array (
                'id' => 672,
                'name' => 'MANUE S. ENVERGA UNIV. FNDT. INC.-LUCENA CITY',
                'campus_id' => 644,
                'created_at' => '2024-12-11 17:07:04',
                'updated_at' => '2024-12-11 17:07:04',
            ),
            170 => 
            array (
                'id' => 673,
                'name' => 'NATIONAL COLLEGE OF SCIENCE AND TECHNOLOGY',
                'campus_id' => 645,
                'created_at' => '2024-12-11 17:08:14',
                'updated_at' => '2024-12-11 17:08:14',
            ),
            171 => 
            array (
                'id' => 674,
                'name' => 'NATIONAL UNIVERSITY-LAGUNA',
                'campus_id' => 646,
                'created_at' => '2024-12-11 17:10:34',
                'updated_at' => '2024-12-11 17:10:34',
            ),
            172 => 
            array (
                'id' => 675,
                'name' => 'PAMANTASAN NG CABUYAO',
                'campus_id' => 647,
                'created_at' => '2024-12-11 17:11:22',
                'updated_at' => '2024-12-11 17:11:22',
            ),
            173 => 
            array (
                'id' => 676,
                'name' => 'PHILIPPINE SCIENCE AND TECHNOLOGY CENTER-CABUYAO',
                'campus_id' => 648,
                'created_at' => '2024-12-11 17:14:51',
                'updated_at' => '2024-12-11 17:14:51',
            ),
            174 => 
            array (
                'id' => 677,
                'name' => 'PHILIPPINE SCIENCE AND TECHNOLOGY CENTER-CALAMBA',
                'campus_id' => 649,
                'created_at' => '2024-12-11 17:15:04',
                'updated_at' => '2024-12-11 17:15:04',
            ),
            175 => 
            array (
                'id' => 678,
                'name' => 'PHILIPPINE SOFTWARE AND SERVICE EDUCATIONAL CENTER',
                'campus_id' => 650,
                'created_at' => '2024-12-12 08:11:56',
                'updated_at' => '2024-12-12 08:11:56',
            ),
            176 => 
            array (
                'id' => 679,
                'name' => 'POLYTECHNIC UNIVERSITY OF THE PHILIPPINES-ALFONSO',
                'campus_id' => 651,
                'created_at' => '2024-12-12 08:21:31',
                'updated_at' => '2024-12-12 08:21:31',
            ),
            177 => 
            array (
                'id' => 680,
                'name' => 'POLYTECHNIC UNIVERSITY OF THE PHILIPPINES-BIÑAN CITY',
                'campus_id' => 652,
                'created_at' => '2024-12-12 08:21:44',
                'updated_at' => '2024-12-12 08:21:44',
            ),
            178 => 
            array (
                'id' => 681,
                'name' => 'POLYTECHNIC UNIVERSITY OF THE PHILIPPINES-CALAUAN',
                'campus_id' => 653,
                'created_at' => '2024-12-12 08:21:55',
                'updated_at' => '2024-12-12 08:21:55',
            ),
            179 => 
            array (
                'id' => 682,
                'name' => 'POLYTECHNIC UNIVERSITY OF THE PHILIPPINES-LOPEZ',
                'campus_id' => 654,
                'created_at' => '2024-12-12 08:22:09',
                'updated_at' => '2024-12-12 08:22:09',
            ),
            180 => 
            array (
                'id' => 683,
                'name' => 'POLYTECHNIC UNIVERSITY OF THE PHILIPPINES-MARAGONDON',
                'campus_id' => 655,
                'created_at' => '2024-12-12 08:22:20',
                'updated_at' => '2024-12-12 08:22:20',
            ),
            181 => 
            array (
                'id' => 684,
                'name' => 'POLYTECHNIC UNIVERSITY OF THE PHILIPPINES-SAN PEDRO CITY',
                'campus_id' => 656,
                'created_at' => '2024-12-12 08:22:31',
                'updated_at' => '2024-12-12 08:22:31',
            ),
            182 => 
            array (
                'id' => 685,
                'name' => 'POLYTECHNIC UNIVERSITY OF THE PHILIPPINES-SANTA ROSA CITY',
                'campus_id' => 657,
                'created_at' => '2024-12-12 08:22:49',
                'updated_at' => '2024-12-12 08:22:49',
            ),
            183 => 
            array (
                'id' => 686,
                'name' => 'POLYTECHNIC UNIVERSITY OF THE PHILIPPINES-SANTO TOMAS',
                'campus_id' => 658,
                'created_at' => '2024-12-12 08:22:59',
                'updated_at' => '2024-12-12 08:22:59',
            ),
            184 => 
            array (
                'id' => 687,
                'name' => 'RAGOTIONIST ACADEMY-SILANG',
                'campus_id' => 659,
                'created_at' => '2024-12-12 08:24:31',
                'updated_at' => '2024-12-12 08:24:31',
            ),
            185 => 
            array (
                'id' => 688,
                'name' => 'RIZAL COLLEGE OF LAGUNA',
                'campus_id' => 660,
                'created_at' => '2024-12-12 08:25:39',
                'updated_at' => '2024-12-12 08:25:39',
            ),
            186 => 
            array (
                'id' => 689,
                'name' => 'ROOSEVELT COLLEGE-CAINTA',
                'campus_id' => 661,
                'created_at' => '2024-12-12 08:32:05',
                'updated_at' => '2024-12-12 08:32:05',
            ),
            187 => 
            array (
                'id' => 690,
                'name' => 'SAINT DOMINIC COLLEGE OF ASIA-BACOOR',
                'campus_id' => 662,
                'created_at' => '2024-12-12 08:33:11',
                'updated_at' => '2024-12-12 08:33:11',
            ),
            188 => 
            array (
                'id' => 691,
                'name' => 'SAINT MICHAEL`S COLLEGE OF LAGUNA',
                'campus_id' => 663,
                'created_at' => '2024-12-12 08:36:10',
                'updated_at' => '2024-12-12 08:36:10',
            ),
            189 => 
            array (
                'id' => 692,
                'name' => 'SAN PABLO CITY NATIONAL SCHOOL OF ARTS AND TRADES',
                'campus_id' => 634,
                'created_at' => '2024-12-12 08:38:36',
                'updated_at' => '2024-12-12 08:38:36',
            ),
            190 => 
            array (
                'id' => 693,
                'name' => 'SAN PABLO COLLEGES',
                'campus_id' => 664,
                'created_at' => '2024-12-12 08:39:27',
                'updated_at' => '2024-12-12 08:39:27',
            ),
            191 => 
            array (
                'id' => 694,
                'name' => 'SAN PEDRO COLLEGE OF BUSINESS ADMINISTRATION',
                'campus_id' => 665,
                'created_at' => '2024-12-12 08:40:13',
                'updated_at' => '2024-12-12 08:40:13',
            ),
            192 => 
            array (
                'id' => 695,
                'name' => 'SAN SEBASTIAN COLLEGE-RECOLETOS-CAVITE',
                'campus_id' => 666,
                'created_at' => '2024-12-12 08:43:45',
                'updated_at' => '2024-12-12 08:43:45',
            ),
            193 => 
            array (
                'id' => 696,
                'name' => 'SAN SEBASTIAN COLLEGE',
                'campus_id' => 667,
                'created_at' => '2024-12-12 08:43:59',
                'updated_at' => '2024-12-12 08:43:59',
            ),
            194 => 
            array (
                'id' => 697,
                'name' => 'SOUTHERN LUZON STATE UNIVERSITY',
                'campus_id' => 668,
                'created_at' => '2024-12-12 08:47:04',
                'updated_at' => '2024-12-12 08:47:04',
            ),
            195 => 
            array (
                'id' => 698,
                'name' => 'SOUTHERN LUZON STATE UNIVERSITY-LUCBAN',
                'campus_id' => 668,
                'created_at' => '2024-12-12 08:47:10',
                'updated_at' => '2024-12-12 08:47:10',
            ),
            196 => 
            array (
                'id' => 699,
                'name' => 'SOUTHERN LUZON STATE UNIVERSITY-LUCENA CITY',
                'campus_id' => 669,
                'created_at' => '2024-12-12 08:47:21',
                'updated_at' => '2024-12-12 08:47:21',
            ),
            197 => 
            array (
                'id' => 700,
                'name' => 'SOUTHERN LUZON STATE UNIVERSITY-TIAONG',
                'campus_id' => 670,
                'created_at' => '2024-12-12 08:47:31',
                'updated_at' => '2024-12-12 08:47:31',
            ),
            198 => 
            array (
                'id' => 701,
                'name' => 'SYSTEMS TECHNOLOGY INSTITUTE COLLEGE-TANAUAN CITY',
                'campus_id' => 671,
                'created_at' => '2024-12-12 08:52:42',
                'updated_at' => '2024-12-12 08:52:42',
            ),
            199 => 
            array (
                'id' => 702,
                'name' => 'SYSTEMS TECHNOLOGY INSTITUTE-CAINTA',
                'campus_id' => 672,
                'created_at' => '2024-12-12 08:53:23',
                'updated_at' => '2024-12-12 08:53:23',
            ),
            200 => 
            array (
                'id' => 703,
                'name' => 'SYSTEMS TECHNOLOGY INSTITUTE-CALAMBA',
                'campus_id' => 673,
                'created_at' => '2024-12-12 08:53:37',
                'updated_at' => '2024-12-12 08:53:37',
            ),
            201 => 
            array (
                'id' => 704,
                'name' => 'SYSTEMS TECHNOLOGY INSTITUTE-LIPA CITY',
                'campus_id' => 674,
                'created_at' => '2024-12-12 08:53:47',
                'updated_at' => '2024-12-12 08:53:47',
            ),
            202 => 
            array (
                'id' => 705,
                'name' => 'SYSTEMS TECHNOLOGY INSTITUTE-SAN PABLO CITY',
                'campus_id' => 675,
                'created_at' => '2024-12-12 08:53:57',
                'updated_at' => '2024-12-12 08:53:57',
            ),
            203 => 
            array (
                'id' => 706,
                'name' => 'SYSTEMS TECHNOLOGY INSTITUTE-STA. CRUZ',
                'campus_id' => 676,
                'created_at' => '2024-12-12 08:54:07',
                'updated_at' => '2024-12-12 08:54:07',
            ),
            204 => 
            array (
                'id' => 707,
                'name' => 'SYSTEMS TECHNOLOGY INSTITUTE-ANTIPOLO',
                'campus_id' => 678,
                'created_at' => '2024-12-12 08:59:43',
                'updated_at' => '2024-12-12 08:59:43',
            ),
            205 => 
            array (
                'id' => 708,
                'name' => 'SYSTEMS TECHNOLOGY INSTITUTE-SOUTHWOODS',
                'campus_id' => 677,
                'created_at' => '2024-12-12 09:00:01',
                'updated_at' => '2024-12-12 09:00:01',
            ),
            206 => 
            array (
                'id' => 709,
                'name' => 'TECHNOLOGICAL UNIVERSITY OF THE PHILIPPINES-CAVITE',
                'campus_id' => 679,
                'created_at' => '2024-12-12 09:01:02',
                'updated_at' => '2024-12-12 09:01:02',
            ),
            207 => 
            array (
                'id' => 710,
                'name' => 'TOMAS CLAUDIO MEMORIAL COLLEGE',
                'campus_id' => 680,
                'created_at' => '2024-12-12 09:02:16',
                'updated_at' => '2024-12-12 09:02:16',
            ),
            208 => 
            array (
                'id' => 711,
                'name' => 'UNIVERSITY OF BATANGAS',
                'campus_id' => 681,
                'created_at' => '2024-12-12 09:04:02',
                'updated_at' => '2024-12-12 09:04:02',
            ),
            209 => 
            array (
                'id' => 712,
                'name' => 'UNIVERSITY OF PERPETUAL HELP SYSTEM LAGUNA',
                'campus_id' => 682,
                'created_at' => '2024-12-12 09:14:55',
                'updated_at' => '2024-12-12 09:14:55',
            ),
            210 => 
            array (
                'id' => 713,
                'name' => 'UNIVERSITY OF PERPETUAL HELP SYSTEM-BIÑAN CITY',
                'campus_id' => 683,
                'created_at' => '2024-12-12 09:15:05',
                'updated_at' => '2024-12-12 09:15:05',
            ),
            211 => 
            array (
                'id' => 714,
                'name' => 'UNIVERSITY OF THE PHILIPPINES-LOS BAÑOS',
                'campus_id' => 684,
                'created_at' => '2024-12-12 09:24:03',
                'updated_at' => '2024-12-12 09:24:03',
            ),
            212 => 
            array (
                'id' => 715,
                'name' => 'UNIVERSITY OF RIZAL SYSTEM-TANAY',
                'campus_id' => 685,
                'created_at' => '2024-12-12 09:34:53',
                'updated_at' => '2024-12-12 09:34:53',
            ),
            213 => 
            array (
                'id' => 716,
                'name' => 'UNIVERSITY OF RIZAL SYSTEM-ANTIPOLO CITY',
                'campus_id' => 686,
                'created_at' => '2024-12-12 09:35:06',
                'updated_at' => '2024-12-12 09:35:06',
            ),
            214 => 
            array (
                'id' => 717,
                'name' => 'UNIVERSITY OF RIZAL SYSTEM-BINANGONAN',
                'campus_id' => 687,
                'created_at' => '2024-12-12 09:35:17',
                'updated_at' => '2024-12-12 09:35:17',
            ),
            215 => 
            array (
                'id' => 718,
                'name' => 'UNIVERSITY OF RIZAL SYSTEM-CAINTA',
                'campus_id' => 688,
                'created_at' => '2024-12-12 09:35:34',
                'updated_at' => '2024-12-12 09:35:34',
            ),
            216 => 
            array (
                'id' => 719,
                'name' => 'UNIVERSITY OF RIZAL SYSTEM-MORONG',
                'campus_id' => 689,
                'created_at' => '2024-12-12 09:35:46',
                'updated_at' => '2024-12-12 09:35:46',
            ),
            217 => 
            array (
                'id' => 720,
                'name' => 'UNIVERSITY OF RIZAL SYSTEM-PILILIA',
                'campus_id' => 690,
                'created_at' => '2024-12-12 09:35:58',
                'updated_at' => '2024-12-12 09:35:58',
            ),
            218 => 
            array (
                'id' => 721,
                'name' => 'UNIVERSITY OF RIZAL SYSTEM-RODRIGUEZ',
                'campus_id' => 691,
                'created_at' => '2024-12-12 09:36:10',
                'updated_at' => '2024-12-12 09:36:10',
            ),
            219 => 
            array (
                'id' => 722,
                'name' => 'UNIVERSITY OF RIZAL SYSTEM-TAYTAY',
                'campus_id' => 692,
                'created_at' => '2024-12-12 09:36:26',
                'updated_at' => '2024-12-12 09:36:26',
            ),
            220 => 
            array (
                'id' => 723,
                'name' => 'UNIVERSITY OF PERPETUAL HELP SYSTEM DALTA-CALAMBA',
                'campus_id' => 693,
                'created_at' => '2024-12-12 09:38:09',
                'updated_at' => '2024-12-12 09:38:09',
            ),
            221 => 
            array (
                'id' => 724,
                'name' => 'PERPETUAL HELP COLLEGE OF LAGUNA',
                'campus_id' => 682,
                'created_at' => '2024-12-12 09:40:48',
                'updated_at' => '2024-12-12 09:40:48',
            ),
            222 => 
            array (
                'id' => 725,
                'name' => 'PERPETUAL HELP-BINAN',
                'campus_id' => 682,
                'created_at' => '2024-12-12 09:40:54',
                'updated_at' => '2024-12-12 09:40:54',
            ),
            223 => 
            array (
                'id' => 726,
                'name' => 'UNIVERSITY OF PERPETUAL HELP SYSTEM DALTA-LAS PIÑAS CITY',
                'campus_id' => 694,
                'created_at' => '2024-12-12 09:51:02',
                'updated_at' => '2024-12-12 09:51:02',
            ),
            224 => 
            array (
                'id' => 727,
                'name' => 'UNIVERSITY OF PERPETUAL HELP OF RIZAL',
                'campus_id' => 694,
                'created_at' => '2024-12-12 09:51:51',
                'updated_at' => '2024-12-12 09:51:51',
            ),
            225 => 
            array (
                'id' => 728,
                'name' => 'RIZAL STATE COLLEGE',
                'campus_id' => 685,
                'created_at' => '2024-12-12 10:03:57',
                'updated_at' => '2024-12-12 10:03:57',
            ),
            226 => 
            array (
                'id' => 729,
                'name' => 'RIZAL STATE COLLEGE-TANAY',
                'campus_id' => 685,
                'created_at' => '2024-12-12 10:04:04',
                'updated_at' => '2024-12-12 10:04:04',
            ),
            227 => 
            array (
                'id' => 730,
                'name' => 'RIZAL STATE COLLEGE-BINANGONAN',
                'campus_id' => 687,
                'created_at' => '2024-12-12 10:04:22',
                'updated_at' => '2024-12-12 10:04:22',
            ),
            228 => 
            array (
                'id' => 731,
                'name' => 'ROGATONIST ACADEMY',
                'campus_id' => 659,
                'created_at' => '2024-12-12 10:05:32',
                'updated_at' => '2024-12-12 10:05:32',
            ),
            229 => 
            array (
                'id' => 732,
                'name' => 'ADAMSON UNIVERSITY',
                'campus_id' => 695,
                'created_at' => '2024-12-12 10:12:24',
                'updated_at' => '2024-12-12 10:12:24',
            ),
            230 => 
            array (
                'id' => 733,
                'name' => 'AMA COMPUTER COLLEGE-ALABANG',
                'campus_id' => 696,
                'created_at' => '2024-12-12 10:18:12',
                'updated_at' => '2024-12-12 10:18:12',
            ),
            231 => 
            array (
                'id' => 734,
                'name' => 'AMA COMPUTER COLLEGE-MAKATI CITY',
                'campus_id' => 697,
                'created_at' => '2024-12-12 10:18:21',
                'updated_at' => '2024-12-12 10:18:21',
            ),
            232 => 
            array (
                'id' => 735,
                'name' => 'AMA COMPUTER COLLEGE-MANDALUYONG CITY',
                'campus_id' => 699,
                'created_at' => '2024-12-12 10:18:30',
                'updated_at' => '2024-12-12 10:18:30',
            ),
            233 => 
            array (
                'id' => 736,
                'name' => 'AMA COMPUTER COLLEGE-QUEZON CITY',
                'campus_id' => 698,
                'created_at' => '2024-12-12 10:18:44',
                'updated_at' => '2024-12-12 10:18:44',
            ),
            234 => 
            array (
                'id' => 737,
                'name' => 'AMA COMPUTER UNIVERSITY-QUEZON CITY',
                'campus_id' => 700,
                'created_at' => '2024-12-12 10:21:12',
                'updated_at' => '2024-12-12 10:21:12',
            ),
            235 => 
            array (
                'id' => 738,
                'name' => 'ARELLANO UNIVERSITY-JUAN SUMULONG',
                'campus_id' => 701,
                'created_at' => '2024-12-12 10:25:28',
                'updated_at' => '2024-12-12 10:25:28',
            ),
            236 => 
            array (
                'id' => 739,
                'name' => 'ASIA PACIFIC COLLEGE',
                'campus_id' => 702,
                'created_at' => '2024-12-12 10:36:12',
                'updated_at' => '2024-12-12 10:36:12',
            ),
            237 => 
            array (
                'id' => 740,
                'name' => 'ASIAN COLLEGE OF SCIENCE AND TECHNOLOGY-QUEZON CITY',
                'campus_id' => 703,
                'created_at' => '2024-12-12 10:39:59',
                'updated_at' => '2024-12-12 10:39:59',
            ),
            238 => 
            array (
                'id' => 741,
                'name' => 'ATENEO DE MANILA UNIVERSITY',
                'campus_id' => 704,
                'created_at' => '2024-12-12 10:41:30',
                'updated_at' => '2024-12-12 10:41:30',
            ),
            239 => 
            array (
                'id' => 742,
                'name' => 'CENTRAL COLLEGES OF THE PHILIPPINES',
                'campus_id' => 705,
                'created_at' => '2024-12-12 10:43:57',
                'updated_at' => '2024-12-12 10:43:57',
            ),
            240 => 
            array (
                'id' => 743,
                'name' => 'CENTRO ESCOLAR UNIVERSITY-MAKATI CITY',
                'campus_id' => 525,
                'created_at' => '2024-12-12 10:48:16',
                'updated_at' => '2024-12-12 10:48:16',
            ),
            241 => 
            array (
                'id' => 744,
                'name' => 'CENTRO ESCOLAR UNIVERSITY-MANILA',
                'campus_id' => 526,
                'created_at' => '2024-12-12 10:48:28',
                'updated_at' => '2024-12-12 10:48:28',
            ),
            242 => 
            array (
                'id' => 745,
                'name' => 'COLEGIO DE SAN JUAN',
                'campus_id' => 706,
                'created_at' => '2024-12-12 10:49:58',
                'updated_at' => '2024-12-12 10:49:58',
            ),
            243 => 
            array (
                'id' => 746,
                'name' => 'COLEGIO DE SAN JUAN DE LETRAN-MANILA',
                'campus_id' => 706,
                'created_at' => '2024-12-12 10:50:05',
                'updated_at' => '2024-12-12 10:50:05',
            ),
            244 => 
            array (
                'id' => 747,
                'name' => 'DE LA SALLE UNIVERSITY-MANILA',
                'campus_id' => 707,
                'created_at' => '2024-12-12 10:50:48',
                'updated_at' => '2024-12-12 10:50:48',
            ),
            245 => 
            array (
                'id' => 748,
                'name' => 'DON BOSCO TECHNICAL COLLEGE',
                'campus_id' => 708,
                'created_at' => '2024-12-12 10:51:57',
                'updated_at' => '2024-12-12 10:51:57',
            ),
            246 => 
            array (
                'id' => 749,
                'name' => 'DON BOSCO TECHNICAL COLLEGE-MANDALUYONG CITY',
                'campus_id' => 708,
                'created_at' => '2024-12-12 10:52:04',
                'updated_at' => '2024-12-12 10:52:04',
            ),
            247 => 
            array (
                'id' => 750,
                'name' => 'DUALTECH TRAINING CENTER',
                'campus_id' => 616,
                'created_at' => '2024-12-12 10:56:20',
                'updated_at' => '2024-12-12 10:56:20',
            ),
            248 => 
            array (
                'id' => 751,
                'name' => 'EMILIO AGUINALDO COLLEGE-MANILA',
                'campus_id' => 709,
                'created_at' => '2024-12-12 11:02:38',
                'updated_at' => '2024-12-12 11:02:38',
            ),
            249 => 
            array (
                'id' => 752,
                'name' => 'EULOGIO `AMANG` RODRIGUEZ INSTITUTE OF SCIENCE AND TECHNOLOGY',
                'campus_id' => 710,
                'created_at' => '2024-12-12 11:04:29',
                'updated_at' => '2024-12-12 11:04:29',
            ),
            250 => 
            array (
                'id' => 753,
                'name' => 'FAR EASTERN UNIVERSITY-MANILA',
                'campus_id' => 711,
                'created_at' => '2024-12-12 11:21:04',
                'updated_at' => '2024-12-12 11:21:04',
            ),
            251 => 
            array (
                'id' => 754,
                'name' => 'FAR EASTERN UNIVERSITY-DR. NICANOR REYES MEDICAL FOUNDATION-WEST FAIRVIEW',
                'campus_id' => 713,
                'created_at' => '2024-12-12 11:21:16',
                'updated_at' => '2024-12-12 11:21:16',
            ),
            252 => 
            array (
                'id' => 755,
                'name' => 'FAR EASTERN UNIVERSITY INSTITUTE OF TECHNOLOGY-SAMPALOC',
                'campus_id' => 712,
                'created_at' => '2024-12-12 11:21:29',
                'updated_at' => '2024-12-12 11:21:29',
            ),
            253 => 
            array (
                'id' => 756,
                'name' => 'FAR EASTERN UNIVERSITY',
                'campus_id' => 711,
                'created_at' => '2024-12-12 11:23:57',
                'updated_at' => '2024-12-12 11:23:57',
            ),
            254 => 
            array (
                'id' => 757,
                'name' => 'EAST ASIA COLLEGE OF INFORMATION TECHNOLOGY',
                'campus_id' => 711,
                'created_at' => '2024-12-12 11:24:23',
                'updated_at' => '2024-12-12 11:24:23',
            ),
            255 => 
            array (
                'id' => 758,
                'name' => 'FEATI UNIVERSITY',
                'campus_id' => 714,
                'created_at' => '2024-12-12 11:25:30',
                'updated_at' => '2024-12-12 11:25:30',
            ),
            256 => 
            array (
                'id' => 759,
                'name' => 'HOLY SPIRIT COLLEGE',
                'campus_id' => 715,
                'created_at' => '2024-12-12 11:39:13',
                'updated_at' => '2024-12-12 11:39:13',
            ),
            257 => 
            array (
                'id' => 760,
                'name' => 'INTERNATIONAL ELECTRONICS AND TECHNICAL INSTITUTE-CUBAO',
                'campus_id' => 716,
                'created_at' => '2024-12-12 11:40:21',
                'updated_at' => '2024-12-12 11:40:21',
            ),
            258 => 
            array (
                'id' => 761,
                'name' => 'JOSE RIZAL UNIVERSITY',
                'campus_id' => 717,
                'created_at' => '2024-12-12 11:41:05',
                'updated_at' => '2024-12-12 11:41:05',
            ),
            259 => 
            array (
                'id' => 762,
                'name' => 'LA CONSOLACION COLLEGE-MANILA',
                'campus_id' => 718,
                'created_at' => '2024-12-12 11:42:43',
                'updated_at' => '2024-12-12 11:42:43',
            ),
            260 => 
            array (
                'id' => 763,
                'name' => 'LYCEUM OF THE PHILIPPINES UNIVERSITY-MANILA',
                'campus_id' => 719,
                'created_at' => '2024-12-12 11:44:01',
                'updated_at' => '2024-12-12 11:44:01',
            ),
            261 => 
            array (
                'id' => 764,
                'name' => 'MANILA CENTRAL UNIVERSITY',
                'campus_id' => 720,
                'created_at' => '2024-12-12 11:44:54',
                'updated_at' => '2024-12-12 11:44:54',
            ),
            262 => 
            array (
                'id' => 765,
                'name' => 'MANILA TYTANA COLLEGES',
                'campus_id' => 721,
                'created_at' => '2024-12-12 11:45:39',
                'updated_at' => '2024-12-12 11:45:39',
            ),
            263 => 
            array (
                'id' => 766,
                'name' => 'MANUEL L. QUEZON UNIVERSITY',
                'campus_id' => 722,
                'created_at' => '2024-12-12 11:46:31',
                'updated_at' => '2024-12-12 11:46:31',
            ),
            264 => 
            array (
                'id' => 767,
                'name' => 'MAPUA UNIVERSITY-MANILA',
                'campus_id' => 723,
                'created_at' => '2024-12-12 11:48:19',
                'updated_at' => '2024-12-12 11:48:19',
            ),
            265 => 
            array (
                'id' => 768,
                'name' => 'MAPUA UNIVERSITY-MAKATI CITY',
                'campus_id' => 724,
                'created_at' => '2024-12-12 11:48:31',
                'updated_at' => '2024-12-12 11:48:31',
            ),
            266 => 
            array (
                'id' => 769,
                'name' => 'MARIKINA POLYTECHNIC COLLEGE',
                'campus_id' => 725,
                'created_at' => '2024-12-12 11:49:47',
                'updated_at' => '2024-12-12 11:49:47',
            ),
            267 => 
            array (
                'id' => 770,
                'name' => 'MERALCO FOUNDATION INSTITUTE-PASIG',
                'campus_id' => 727,
                'created_at' => '2024-12-12 11:52:49',
                'updated_at' => '2024-12-12 11:52:49',
            ),
            268 => 
            array (
                'id' => 771,
                'name' => 'MERALCO FOUNDATION INSTITUTE-PASAY',
                'campus_id' => 726,
                'created_at' => '2024-12-12 11:53:05',
                'updated_at' => '2024-12-12 11:53:05',
            ),
            269 => 
            array (
                'id' => 772,
                'name' => 'METRO DATA COMPUTER COLLEGE-MANILA',
                'campus_id' => 728,
                'created_at' => '2024-12-12 11:55:16',
                'updated_at' => '2024-12-12 11:55:16',
            ),
            270 => 
            array (
                'id' => 773,
                'name' => 'METRO DATA COMPUTER COLLEGE-PASAY',
                'campus_id' => 729,
                'created_at' => '2024-12-12 11:55:25',
                'updated_at' => '2024-12-12 11:55:25',
            ),
            271 => 
            array (
                'id' => 774,
                'name' => 'METRO DATA COMPUTER COLLEGE-QUEZON CITY',
                'campus_id' => 730,
                'created_at' => '2024-12-12 11:55:36',
                'updated_at' => '2024-12-12 11:55:36',
            ),
            272 => 
            array (
                'id' => 775,
                'name' => 'MIRIAM COLLEGE-QUEZON CITY',
                'campus_id' => 731,
                'created_at' => '2024-12-12 11:56:53',
                'updated_at' => '2024-12-12 11:56:53',
            ),
            273 => 
            array (
                'id' => 776,
                'name' => 'NATIONAL TEACHERS COLLEGE-QUIAPO',
                'campus_id' => 732,
                'created_at' => '2024-12-12 12:44:49',
                'updated_at' => '2024-12-12 12:44:49',
            ),
            274 => 
            array (
                'id' => 777,
                'name' => 'NATIONAL UNIVERSITY-MANILA',
                'campus_id' => 733,
                'created_at' => '2024-12-12 12:45:32',
                'updated_at' => '2024-12-12 12:45:32',
            ),
            275 => 
            array (
                'id' => 778,
                'name' => 'NEW ERA UNIVERSITY-QUEZON CITY',
                'campus_id' => 734,
                'created_at' => '2024-12-12 12:46:33',
                'updated_at' => '2024-12-12 12:46:33',
            ),
            276 => 
            array (
                'id' => 779,
                'name' => 'NOVA COMPUTER COLLEGE',
                'campus_id' => 735,
                'created_at' => '2024-12-12 12:47:46',
                'updated_at' => '2024-12-12 12:47:46',
            ),
            277 => 
            array (
                'id' => 780,
                'name' => 'OUR LADY OF FATIMA UNIVERSITY-VALENZUELA CITY',
                'campus_id' => 736,
                'created_at' => '2024-12-12 12:52:09',
                'updated_at' => '2024-12-12 12:52:09',
            ),
            278 => 
            array (
                'id' => 781,
                'name' => 'OUR LADY OF FATIMA UNIVERSITY-QUEZON CITY',
                'campus_id' => 737,
                'created_at' => '2024-12-12 12:52:19',
                'updated_at' => '2024-12-12 12:52:19',
            ),
            279 => 
            array (
                'id' => 782,
                'name' => 'PAMANTASAN NG LUNGSOD NG MAKATI',
                'campus_id' => 742,
                'created_at' => '2024-12-12 13:00:07',
                'updated_at' => '2024-12-12 13:00:07',
            ),
            280 => 
            array (
                'id' => 783,
                'name' => 'PAMANTASAN NG LUNGSOD NG VALENZUELA',
                'campus_id' => 741,
                'created_at' => '2024-12-12 13:00:17',
                'updated_at' => '2024-12-12 13:00:17',
            ),
            281 => 
            array (
                'id' => 784,
                'name' => 'PAMANTASAN NG LUNGSOD NG MUNTINLUPA',
                'campus_id' => 740,
                'created_at' => '2024-12-12 13:00:27',
                'updated_at' => '2024-12-12 13:00:27',
            ),
            282 => 
            array (
                'id' => 785,
                'name' => 'PAMANTASAN NG LUNGSOD NG MAYNILA',
                'campus_id' => 739,
                'created_at' => '2024-12-12 13:00:44',
                'updated_at' => '2024-12-12 13:00:44',
            ),
            283 => 
            array (
                'id' => 786,
                'name' => 'PAMANTASAN NG LUNGSOD NG PASIG',
                'campus_id' => 738,
                'created_at' => '2024-12-12 13:00:53',
                'updated_at' => '2024-12-12 13:00:53',
            ),
            284 => 
            array (
                'id' => 787,
                'name' => 'PATEROS TECHNOLOGICAL COLLEGE',
                'campus_id' => 743,
                'created_at' => '2024-12-12 13:01:46',
                'updated_at' => '2024-12-12 13:01:46',
            ),
            285 => 
            array (
                'id' => 788,
                'name' => 'PHILIPPINE AIR TRANSPORT AND TRAINING SERVICES COLLEGE OF AERONAUTICS',
                'campus_id' => 744,
                'created_at' => '2024-12-12 13:05:01',
                'updated_at' => '2024-12-12 13:05:01',
            ),
            286 => 
            array (
                'id' => 789,
                'name' => 'PHILIPPINE CHRISTIAN UNIVERSITY',
                'campus_id' => 745,
                'created_at' => '2024-12-12 13:06:00',
                'updated_at' => '2024-12-12 13:06:00',
            ),
            287 => 
            array (
                'id' => 790,
                'name' => 'PHILIPPINE NORMAL UNIVERSITY',
                'campus_id' => 80,
                'created_at' => '2024-12-12 13:07:19',
                'updated_at' => '2024-12-12 13:07:19',
            ),
            288 => 
            array (
                'id' => 791,
                'name' => 'PHILIPPINE NORMAL UNIVERSITY-MANILA',
                'campus_id' => 80,
                'created_at' => '2024-12-12 13:07:27',
                'updated_at' => '2024-12-12 13:07:27',
            ),
            289 => 
            array (
                'id' => 792,
                'name' => 'PHILIPPINE SCIENCE AND TECHNOLOGY CENTER-CALOOCAN',
                'campus_id' => 746,
                'created_at' => '2024-12-12 13:09:00',
                'updated_at' => '2024-12-12 13:09:00',
            ),
            290 => 
            array (
                'id' => 793,
                'name' => 'PHILIPPINE STATE COLLEGE OF AERONAUTICS-PASAY CITY',
                'campus_id' => 155,
                'created_at' => '2024-12-12 13:11:14',
                'updated_at' => '2024-12-12 13:11:14',
            ),
            291 => 
            array (
                'id' => 794,
                'name' => 'PHILIPPINE WOMEN UNIVERSITY',
                'campus_id' => 747,
                'created_at' => '2024-12-12 13:15:02',
                'updated_at' => '2024-12-12 13:15:02',
            ),
            292 => 
            array (
                'id' => 795,
                'name' => 'POLYTECHNIC UNIVERSITY OF THE PHILIPPINES-MANILA',
                'campus_id' => 342,
                'created_at' => '2024-12-12 13:17:42',
                'updated_at' => '2024-12-12 13:17:42',
            ),
            293 => 
            array (
                'id' => 796,
                'name' => 'POLYTECHNIC UNIVERSITY OF THE PHILIPPINES-PARAÑAQUE CITY',
                'campus_id' => 748,
                'created_at' => '2024-12-12 13:21:32',
                'updated_at' => '2024-12-12 13:21:32',
            ),
            294 => 
            array (
                'id' => 797,
                'name' => 'POLYTECHNIC UNIVERSITY OF THE PHILIPPINES-QUEZON CITY',
                'campus_id' => 749,
                'created_at' => '2024-12-12 13:21:42',
                'updated_at' => '2024-12-12 13:21:42',
            ),
            295 => 
            array (
                'id' => 798,
                'name' => 'POLYTECHNIC UNIVERSITY OF THE PHILIPPINES-SAN JUAN',
                'campus_id' => 750,
                'created_at' => '2024-12-12 13:21:52',
                'updated_at' => '2024-12-12 13:21:52',
            ),
            296 => 
            array (
                'id' => 799,
                'name' => 'POLYTECHNIC UNIVERSITY OF THE PHILIPPINES-TAGUIG',
                'campus_id' => 751,
                'created_at' => '2024-12-12 13:22:06',
                'updated_at' => '2024-12-12 13:22:06',
            ),
            297 => 
            array (
                'id' => 800,
                'name' => 'QUEZON CITY UNIVERSITY',
                'campus_id' => 752,
                'created_at' => '2024-12-12 13:23:01',
                'updated_at' => '2024-12-12 13:23:01',
            ),
            298 => 
            array (
                'id' => 801,
                'name' => 'RIZAL EXPERIMENTAL STATION AND PILOT SCHOOL OF COTTAGE INDUSTRIES',
                'campus_id' => 753,
                'created_at' => '2024-12-12 13:24:53',
                'updated_at' => '2024-12-12 13:24:53',
            ),
            299 => 
            array (
                'id' => 802,
                'name' => 'RIZAL TECHNOLOGICAL UNIVERSITY-MANDALUYONG CITY',
                'campus_id' => 754,
                'created_at' => '2024-12-12 13:26:07',
                'updated_at' => '2024-12-12 13:26:07',
            ),
            300 => 
            array (
                'id' => 803,
                'name' => 'RIZAL TECHNOLOGICAL UNIVERSITY-PASIG CITY',
                'campus_id' => 755,
                'created_at' => '2024-12-12 13:26:26',
                'updated_at' => '2024-12-12 13:26:26',
            ),
            301 => 
            array (
                'id' => 804,
                'name' => 'SAINT FRANCIS OF ASSISI COLLEGE',
                'campus_id' => 756,
                'created_at' => '2024-12-12 13:28:56',
                'updated_at' => '2024-12-12 13:28:56',
            ),
            302 => 
            array (
                'id' => 805,
                'name' => 'SAN SEBASTIAN COLLEGE-RECOLETOS-MANILA',
                'campus_id' => 757,
                'created_at' => '2024-12-12 13:29:46',
                'updated_at' => '2024-12-12 13:29:46',
            ),
            303 => 
            array (
                'id' => 806,
                'name' => 'SOUTHVILLE INTERNATIONAL SCHOOL AND COLLEGES',
                'campus_id' => 758,
                'created_at' => '2024-12-12 13:30:34',
                'updated_at' => '2024-12-12 13:30:34',
            ),
            304 => 
            array (
                'id' => 807,
                'name' => 'ST. SCHOLASTICA`S COLLEGE-MANILA',
                'campus_id' => 759,
                'created_at' => '2024-12-12 13:32:58',
                'updated_at' => '2024-12-12 13:32:58',
            ),
            305 => 
            array (
                'id' => 808,
                'name' => 'TECHNOLOGICAL INSTITUTE OF THE PHILIPPINES-MANILA',
                'campus_id' => 760,
                'created_at' => '2024-12-12 13:34:27',
                'updated_at' => '2024-12-12 13:34:27',
            ),
            306 => 
            array (
                'id' => 809,
                'name' => 'TECHNOLOGICAL INSTITUTE OF THE PHILIPPINES-QUEZON CITY',
                'campus_id' => 761,
                'created_at' => '2024-12-12 13:34:33',
                'updated_at' => '2024-12-12 13:34:33',
            ),
            307 => 
            array (
                'id' => 810,
                'name' => 'TECHNOLOGICAL UNIVERSITY OF THE PHILIPPINES-TAGUIG',
                'campus_id' => 762,
                'created_at' => '2024-12-12 13:36:42',
                'updated_at' => '2024-12-12 13:36:42',
            ),
            308 => 
            array (
                'id' => 811,
                'name' => 'TECHNOLOGICAL UNIVERSITY OF THE PHILIPPINES-MANILA',
                'campus_id' => 228,
                'created_at' => '2024-12-12 13:36:59',
                'updated_at' => '2024-12-12 13:36:59',
            ),
            309 => 
            array (
                'id' => 812,
                'name' => 'TOLENTINO TECHNICAL INSTITUTE-PARANAQUE',
                'campus_id' => 763,
                'created_at' => '2024-12-12 13:38:20',
                'updated_at' => '2024-12-12 13:38:20',
            ),
            310 => 
            array (
                'id' => 813,
                'name' => 'TRINITY UNIVERSITY OF ASIA',
                'campus_id' => 764,
                'created_at' => '2024-12-12 13:39:00',
                'updated_at' => '2024-12-12 13:39:00',
            ),
            311 => 
            array (
                'id' => 814,
                'name' => 'UNIVERSIDAD DE MANILA',
                'campus_id' => 765,
                'created_at' => '2024-12-12 13:40:14',
                'updated_at' => '2024-12-12 13:40:14',
            ),
            312 => 
            array (
                'id' => 815,
                'name' => 'UNIVERSITY OF ASIA AND THE PACIFIC',
                'campus_id' => 766,
                'created_at' => '2024-12-12 13:41:07',
                'updated_at' => '2024-12-12 13:41:07',
            ),
            313 => 
            array (
                'id' => 816,
                'name' => 'UNIVERSITY OF CALOOCAN CITY',
                'campus_id' => 767,
                'created_at' => '2024-12-12 13:41:55',
                'updated_at' => '2024-12-12 13:41:55',
            ),
            314 => 
            array (
                'id' => 817,
                'name' => 'UNIVERSITY OF SANTO TOMAS-MANILA',
                'campus_id' => 768,
                'created_at' => '2024-12-12 13:43:10',
                'updated_at' => '2024-12-12 13:43:10',
            ),
            315 => 
            array (
                'id' => 818,
                'name' => 'UNIVERSITY OF THE EAST-MANILA',
                'campus_id' => 769,
                'created_at' => '2024-12-12 13:44:37',
                'updated_at' => '2024-12-12 13:44:37',
            ),
            316 => 
            array (
                'id' => 819,
                'name' => 'UNIVERSITY OF THE EAST-CALOOCAN',
                'campus_id' => 770,
                'created_at' => '2024-12-12 13:44:47',
                'updated_at' => '2024-12-12 13:44:47',
            ),
            317 => 
            array (
                'id' => 820,
                'name' => 'UNIVERSITY OF THE PHILIPPINES-DILIMAN',
                'campus_id' => 771,
                'created_at' => '2024-12-12 13:46:01',
                'updated_at' => '2024-12-12 13:46:01',
            ),
            318 => 
            array (
                'id' => 821,
                'name' => 'UNIVERSITY OF THE PHILIPPINES-MANILA',
                'campus_id' => 51,
                'created_at' => '2024-12-12 13:46:14',
                'updated_at' => '2024-12-12 13:46:14',
            ),
            319 => 
            array (
                'id' => 822,
                'name' => 'UNIVERSITY OF THE PERPETUAL HELP-RIZAL',
                'campus_id' => 694,
                'created_at' => '2024-12-12 13:47:29',
                'updated_at' => '2024-12-12 13:47:29',
            ),
            320 => 
            array (
                'id' => 823,
                'name' => 'ARANETA UNIVERSITY',
                'campus_id' => 772,
                'created_at' => '2024-12-12 13:49:17',
                'updated_at' => '2024-12-12 13:49:17',
            ),
            321 => 
            array (
                'id' => 824,
                'name' => 'GREGORIO ARANETA UNIVERSITY FOUNDATION',
                'campus_id' => 772,
                'created_at' => '2024-12-12 13:49:30',
                'updated_at' => '2024-12-12 13:49:30',
            ),
            322 => 
            array (
                'id' => 825,
                'name' => 'CALOOCAN CITY POLYTECHNIC COLLEGE',
                'campus_id' => 767,
                'created_at' => '2024-12-12 13:52:55',
                'updated_at' => '2024-12-12 13:52:55',
            ),
            323 => 
            array (
                'id' => 826,
                'name' => 'NORTH COTABATO INSTITUTE OF SCIENCE AND TECHNOLOGY',
                'campus_id' => 773,
                'created_at' => '2024-12-12 14:00:48',
                'updated_at' => '2024-12-12 14:00:48',
            ),
            324 => 
            array (
                'id' => 827,
                'name' => 'LEYTE STATE UNIVERSITY',
                'campus_id' => 498,
                'created_at' => '2024-12-12 14:06:06',
                'updated_at' => '2024-12-12 14:06:06',
            ),
            325 => 
            array (
                'id' => 828,
                'name' => 'RUPERTO K. KANGLEON MEMORIAL AGRO-FISHERIES TECHNOLOGICAL INSTITUTE',
                'campus_id' => 485,
                'created_at' => '2024-12-12 14:08:45',
                'updated_at' => '2024-12-12 14:08:45',
            ),
            326 => 
            array (
                'id' => 829,
                'name' => 'POLYTECHNIC STATE COLLEGE OF PANAY',
                'campus_id' => 185,
                'created_at' => '2024-12-12 14:10:34',
                'updated_at' => '2024-12-12 14:10:34',
            ),
            327 => 
            array (
                'id' => 830,
                'name' => 'POLYTECHNIC STATE UNIVERSITY OF BICOL-CALABANGA',
                'campus_id' => 774,
                'created_at' => '2024-12-12 14:21:28',
                'updated_at' => '2024-12-12 14:21:28',
            ),
            328 => 
            array (
                'id' => 831,
                'name' => 'POLYTECHNIC STATE UNIVERSITY OF BICOL-NABUA',
                'campus_id' => 775,
                'created_at' => '2024-12-12 14:21:41',
                'updated_at' => '2024-12-12 14:21:41',
            ),
            329 => 
            array (
                'id' => 832,
                'name' => 'POLYTECHNIC STATE UNIVERSITY OF BICOL-NAGA CITY',
                'campus_id' => 776,
                'created_at' => '2024-12-12 14:21:51',
                'updated_at' => '2024-12-12 14:21:51',
            ),
            330 => 
            array (
                'id' => 833,
                'name' => 'UNIVERSITY OF THE PHILIPPINES-ILOILO',
                'campus_id' => 238,
                'created_at' => '2024-12-15 11:02:22',
                'updated_at' => '2024-12-15 11:02:22',
            ),
            331 => 
            array (
                'id' => 834,
                'name' => 'WEST VISAYAS STATE UNIVERSITY-ILOILO CITY',
                'campus_id' => 240,
                'created_at' => '2024-12-15 11:13:33',
                'updated_at' => '2024-12-15 11:13:33',
            ),
        ));

        
    }
}