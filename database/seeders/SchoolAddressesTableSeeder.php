<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SchoolAddressesTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('school_addresses')->delete();
        
        \DB::table('school_addresses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'address' => 'La Purisima St.',
                'barangay_code' => '097332061',
                'municipality_code' => '097332000',
                'province_code' => '097300000',
                'region_code' => '090000000',
                'campus_id' => 1,
                'created_at' => '2024-10-07 11:15:37',
                'updated_at' => '2024-10-07 11:15:37',
            ),
            1 => 
            array (
                'id' => 2,
                'address' => 'Normal Rd.',
                'barangay_code' => '097332024',
                'municipality_code' => '097332000',
                'province_code' => '097300000',
                'region_code' => '090000000',
                'campus_id' => 2,
                'created_at' => '2024-10-07 11:27:13',
                'updated_at' => '2024-10-07 11:27:13',
            ),
            2 => 
            array (
                'id' => 3,
                'address' => '-',
                'barangay_code' => '098316005',
                'municipality_code' => '098316000',
                'province_code' => '098300000',
                'region_code' => '090000000',
                'campus_id' => 3,
                'created_at' => '2024-10-07 11:27:13',
                'updated_at' => '2024-10-07 11:27:13',
            ),
            3 => 
            array (
                'id' => 4,
                'address' => 'Purok 11',
                'barangay_code' => '098309014',
                'municipality_code' => '098309000',
                'province_code' => '098300000',
                'region_code' => '090000000',
                'campus_id' => 4,
                'created_at' => '2024-10-07 11:27:13',
                'updated_at' => '2024-10-07 11:27:13',
            ),
            4 => 
            array (
                'id' => 5,
                'address' => '-',
                'barangay_code' => '098305009',
                'municipality_code' => '098305000',
                'province_code' => '098300000',
                'region_code' => '090000000',
                'campus_id' => 5,
                'created_at' => '2024-10-07 11:27:13',
                'updated_at' => '2024-10-07 11:27:13',
            ),
            5 => 
            array (
                'id' => 6,
                'address' => '-',
                'barangay_code' => '098301019',
                'municipality_code' => '098301000',
                'province_code' => '098300000',
                'region_code' => '090000000',
                'campus_id' => 6,
                'created_at' => '2024-10-07 11:27:13',
                'updated_at' => '2024-10-07 11:27:13',
            ),
            6 => 
            array (
                'id' => 7,
                'address' => '-',
                'barangay_code' => '098307026',
                'municipality_code' => '098307000',
                'province_code' => '098300000',
                'region_code' => '090000000',
                'campus_id' => 7,
                'created_at' => '2024-10-07 11:27:13',
                'updated_at' => '2024-10-07 11:27:13',
            ),
            7 => 
            array (
                'id' => 8,
                'address' => 'Morales Rd., Subanipa',
                'barangay_code' => '098310016',
                'municipality_code' => '098310000',
                'province_code' => '098300000',
                'region_code' => '090000000',
                'campus_id' => 8,
                'created_at' => '2024-10-07 11:27:13',
                'updated_at' => '2024-10-07 11:27:13',
            ),
            8 => 
            array (
                'id' => 9,
                'address' => '-',
                'barangay_code' => '098313042',
                'municipality_code' => '098313000',
                'province_code' => '098300000',
                'region_code' => '090000000',
                'campus_id' => 9,
                'created_at' => '2024-10-07 11:27:13',
                'updated_at' => '2024-10-07 11:27:13',
            ),
            9 => 
            array (
                'id' => 10,
                'address' => 'Malangas Highway',
                'barangay_code' => '098308028',
                'municipality_code' => '098308000',
                'province_code' => '098300000',
                'region_code' => '090000000',
                'campus_id' => 10,
                'created_at' => '2024-10-07 11:27:13',
                'updated_at' => '2024-10-07 11:27:13',
            ),
            10 => 
            array (
                'id' => 11,
                'address' => '-',
                'barangay_code' => '098304015',
                'municipality_code' => '098304000',
                'province_code' => '098300000',
                'region_code' => '090000000',
                'campus_id' => 11,
                'created_at' => '2024-10-07 11:27:13',
                'updated_at' => '2024-10-07 11:27:13',
            ),
            11 => 
            array (
                'id' => 12,
                'address' => 'Purok Rizal',
                'barangay_code' => '098303004',
                'municipality_code' => '098303000',
                'province_code' => '098300000',
                'region_code' => '090000000',
                'campus_id' => 12,
                'created_at' => '2024-10-07 11:27:13',
                'updated_at' => '2024-10-07 11:27:13',
            ),
            12 => 
            array (
                'id' => 13,
                'address' => 'Anhs',
                'barangay_code' => '097302012',
                'municipality_code' => '097302000',
                'province_code' => '097300000',
                'region_code' => '090000000',
                'campus_id' => 13,
                'created_at' => '2024-10-07 11:27:13',
                'updated_at' => '2024-10-07 11:27:13',
            ),
            13 => 
            array (
                'id' => 14,
                'address' => 'Mabini St.',
                'barangay_code' => '097319020',
                'municipality_code' => '097319000',
                'province_code' => '097300000',
                'region_code' => '090000000',
                'campus_id' => 14,
                'created_at' => '2024-10-07 11:27:13',
                'updated_at' => '2024-10-07 11:27:13',
            ),
            14 => 
            array (
                'id' => 15,
                'address' => '-',
                'barangay_code' => '097322054',
                'municipality_code' => '097322000',
                'province_code' => '097300000',
                'region_code' => '090000000',
                'campus_id' => 15,
                'created_at' => '2024-10-07 11:27:13',
                'updated_at' => '2024-10-07 11:27:13',
            ),
            15 => 
            array (
                'id' => 16,
                'address' => '-',
                'barangay_code' => '097332024',
                'municipality_code' => '097332000',
                'province_code' => '097300000',
                'region_code' => '090000000',
                'campus_id' => 16,
                'created_at' => '2024-10-07 11:27:13',
                'updated_at' => '2024-10-07 11:27:13',
            ),
            16 => 
            array (
                'id' => 17,
                'address' => 'R.T Lim St., Boulevard',
                'barangay_code' => '097332004',
                'municipality_code' => '097332000',
                'province_code' => '097300000',
                'region_code' => '090000000',
                'campus_id' => 17,
                'created_at' => '2024-10-07 11:33:42',
                'updated_at' => '2024-10-07 11:33:42',
            ),
            17 => 
            array (
                'id' => 18,
                'address' => '-',
                'barangay_code' => '153617119',
                'municipality_code' => '153617000',
                'province_code' => '153600000',
                'region_code' => '150000000',
                'campus_id' => 18,
                'created_at' => '2024-10-07 11:40:42',
                'updated_at' => '2024-10-07 11:40:42',
            ),
            18 => 
            array (
                'id' => 19,
                'address' => 'Sindangan-Dumingag Rd.',
                'barangay_code' => '097218020',
                'municipality_code' => '097218000',
                'province_code' => '097200000',
                'region_code' => '090000000',
                'campus_id' => 19,
                'created_at' => '2024-10-07 11:40:42',
                'updated_at' => '2024-10-07 11:40:42',
            ),
            19 => 
            array (
                'id' => 20,
                'address' => '-',
                'barangay_code' => '098302029',
                'municipality_code' => '098302000',
                'province_code' => '098300000',
                'region_code' => '090000000',
                'campus_id' => 20,
                'created_at' => '2024-10-07 11:40:42',
                'updated_at' => '2024-10-07 11:40:42',
            ),
            20 => 
            array (
                'id' => 21,
                'address' => 'National Highway',
                'barangay_code' => '097324017',
                'municipality_code' => '097324000',
                'province_code' => '097300000',
                'region_code' => '090000000',
                'campus_id' => 21,
                'created_at' => '2024-10-07 11:52:54',
                'updated_at' => '2024-10-07 11:52:54',
            ),
            21 => 
            array (
                'id' => 22,
                'address' => '-',
                'barangay_code' => '097322002',
                'municipality_code' => '097322000',
                'province_code' => '097300000',
                'region_code' => '090000000',
                'campus_id' => 22,
                'created_at' => '2024-10-07 11:52:54',
                'updated_at' => '2024-10-07 11:52:54',
            ),
            22 => 
            array (
                'id' => 23,
                'address' => '-',
                'barangay_code' => '097308005',
                'municipality_code' => '097308000',
                'province_code' => '097300000',
                'region_code' => '090000000',
                'campus_id' => 23,
                'created_at' => '2024-10-07 11:52:54',
                'updated_at' => '2024-10-07 11:52:54',
            ),
            23 => 
            array (
                'id' => 24,
                'address' => 'College Park, Quezon Ave.',
                'barangay_code' => '097202013',
                'municipality_code' => '097202000',
                'province_code' => '097200000',
                'region_code' => '090000000',
                'campus_id' => 24,
                'created_at' => '2024-10-07 11:54:47',
                'updated_at' => '2024-10-07 11:54:47',
            ),
            24 => 
            array (
                'id' => 25,
                'address' => 'Fr. Patangan Rd.',
                'barangay_code' => '097202017',
                'municipality_code' => '097202000',
                'province_code' => '097200000',
                'region_code' => '090000000',
                'campus_id' => 25,
                'created_at' => '2024-10-07 11:56:25',
                'updated_at' => '2024-10-07 11:56:25',
            ),
            25 => 
            array (
                'id' => 26,
                'address' => 'Guading Adasa St.',
                'barangay_code' => '097201055',
                'municipality_code' => '097201000',
                'province_code' => '097200000',
                'region_code' => '090000000',
                'campus_id' => 26,
                'created_at' => '2024-10-07 12:04:01',
                'updated_at' => '2024-10-07 12:04:01',
            ),
            26 => 
            array (
                'id' => 27,
                'address' => 'Gen. Luna St.',
                'barangay_code' => '097202009',
                'municipality_code' => '097202000',
                'province_code' => '097200000',
                'region_code' => '090000000',
                'campus_id' => 27,
                'created_at' => '2024-10-07 12:04:01',
                'updated_at' => '2024-10-07 12:04:01',
            ),
            27 => 
            array (
                'id' => 28,
                'address' => 'ZNAC Rd.',
                'barangay_code' => '097221020',
                'municipality_code' => '097221000',
                'province_code' => '097200000',
                'region_code' => '090000000',
                'campus_id' => 28,
                'created_at' => '2024-10-07 12:04:01',
                'updated_at' => '2024-10-07 12:04:01',
            ),
            28 => 
            array (
                'id' => 29,
                'address' => '-',
                'barangay_code' => '097203016',
                'municipality_code' => '097203000',
                'province_code' => '097200000',
                'region_code' => '090000000',
                'campus_id' => 29,
                'created_at' => '2024-10-07 12:04:01',
                'updated_at' => '2024-10-07 12:04:01',
            ),
            29 => 
            array (
                'id' => 30,
                'address' => '-',
                'barangay_code' => '097219028',
                'municipality_code' => '097219000',
                'province_code' => '097200000',
                'region_code' => '090000000',
                'campus_id' => 30,
                'created_at' => '2024-10-07 12:04:01',
                'updated_at' => '2024-10-07 12:04:01',
            ),
            30 => 
            array (
                'id' => 31,
                'address' => '-',
                'barangay_code' => '097216001',
                'municipality_code' => '097216000',
                'province_code' => '097200000',
                'region_code' => '090000000',
                'campus_id' => 31,
                'created_at' => '2024-10-07 12:04:01',
                'updated_at' => '2024-10-07 12:04:01',
            ),
            31 => 
            array (
                'id' => 32,
                'address' => 'Bypass Road Polanco-Dapitan',
                'barangay_code' => '097202002',
                'municipality_code' => '097202000',
                'province_code' => '097200000',
                'region_code' => '090000000',
                'campus_id' => 32,
                'created_at' => '2024-10-09 13:39:15',
                'updated_at' => '2024-10-09 13:39:15',
            ),
            32 => 
            array (
                'id' => 33,
                'address' => 'Don Toribio St.',
                'barangay_code' => '097332087',
                'municipality_code' => '097332000',
                'province_code' => '097300000',
                'region_code' => '090000000',
                'campus_id' => 33,
                'created_at' => '2024-10-09 13:42:10',
                'updated_at' => '2024-10-09 13:42:10',
            ),
            33 => 
            array (
                'id' => 34,
                'address' => 'Lustre Drive',
                'barangay_code' => '097332075',
                'municipality_code' => '097332000',
                'province_code' => '097300000',
                'region_code' => '090000000',
                'campus_id' => 34,
                'created_at' => '2024-10-09 13:46:19',
                'updated_at' => '2024-10-09 13:46:19',
            ),
            34 => 
            array (
                'id' => 35,
                'address' => 'Capitol Ave.',
                'barangay_code' => '097202009',
                'municipality_code' => '097202000',
                'province_code' => '097200000',
                'region_code' => '090000000',
                'campus_id' => 35,
                'created_at' => '2024-10-09 13:49:48',
                'updated_at' => '2024-10-09 13:49:48',
            ),
            35 => 
            array (
                'id' => 36,
                'address' => 'Main road',
                'barangay_code' => '099701042',
                'municipality_code' => '099701000',
                'province_code' => '150700000',
                'region_code' => '150000000',
                'campus_id' => 36,
                'created_at' => '2024-10-09 13:53:59',
                'updated_at' => '2024-10-09 13:53:59',
            ),
            36 => 
            array (
                'id' => 37,
                'address' => 'Sanson St.',
                'barangay_code' => '097322041',
                'municipality_code' => '097322000',
                'province_code' => '097300000',
                'region_code' => '090000000',
                'campus_id' => 37,
                'created_at' => '2024-10-09 13:57:04',
                'updated_at' => '2024-10-09 13:57:04',
            ),
            37 => 
            array (
                'id' => 38,
                'address' => 'Jamisola St.',
                'barangay_code' => '097322042',
                'municipality_code' => '097322000',
                'province_code' => '097300000',
                'region_code' => '090000000',
                'campus_id' => 38,
                'created_at' => '2024-10-10 17:47:45',
                'updated_at' => '2024-10-10 17:47:45',
            ),
            38 => 
            array (
                'id' => 39,
                'address' => 'Jose Burgos St., National Highway',
                'barangay_code' => '097218025',
                'municipality_code' => '097218000',
                'province_code' => '097200000',
                'region_code' => '090000000',
                'campus_id' => 39,
                'created_at' => '2024-10-13 16:31:55',
                'updated_at' => '2024-10-13 16:31:55',
            ),
        ));

        
    }
}