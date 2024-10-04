<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ListDropdownsTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('list_dropdowns')->delete();
        
        \DB::table('list_dropdowns')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'n/a',
                'classification' => 'n/a',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'SUC',
                'classification' => 'Class',
                'type' => 'School',
                'color' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'LUC',
                'classification' => 'Class',
                'type' => 'School',
                'color' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Private',
                'classification' => 'Class',
                'type' => 'School',
                'color' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Semester',
                'classification' => 'Term Type',
                'type' => 'School',
                'color' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Trimester',
                'classification' => 'Term Type',
                'type' => 'School',
                'color' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Quarter Term',
                'classification' => 'Term Type',
                'type' => 'School',
                'color' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Transmutation',
                'classification' => 'Grading System',
                'type' => 'School',
                'color' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Percent Grading',
                'classification' => 'Grading System',
                'type' => 'School',
                'color' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Per Grade',
                'classification' => 'Grading System',
                'type' => 'School',
                'color' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => '1st',
                'classification' => 'Level',
                'type' => 'School',
                'color' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => '2nd',
                'classification' => 'Level',
                'type' => 'School',
                'color' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => '3rd',
                'classification' => 'Level',
                'type' => 'School',
                'color' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => '4th',
                'classification' => 'Level',
                'type' => 'School',
                'color' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => '5th',
                'classification' => 'Level',
                'type' => 'School',
                'color' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Summa Cud Laude',
                'classification' => 'Award',
                'type' => 'School',
                'color' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Magna Cum Laude',
                'classification' => 'Award',
                'type' => 'School',
                'color' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Cum Laude',
                'classification' => 'Award',
                'type' => 'School',
                'color' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Honorable Mention',
                'classification' => 'Award',
                'type' => 'School',
                'color' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Academic Distinction',
                'classification' => 'Award',
                'type' => 'School',
                'color' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Center of Excellence',
                'classification' => 'Certification',
                'type' => 'Course',
                'color' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Center of Development',
                'classification' => 'Certification',
                'type' => 'Course',
                'color' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'FAAP Level III',
                'classification' => 'Certification',
                'type' => 'Course',
                'color' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'FAAP Level IV',
                'classification' => 'Certification',
                'type' => 'Course',
                'color' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Full',
                'classification' => 'Category',
                'type' => 'Category',
                'color' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Special',
                'classification' => 'Category',
                'type' => 'Category',
                'color' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Partial',
                'classification' => 'Category',
                'type' => 'Category',
                'color' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Undergraduate',
                'classification' => 'Type',
                'type' => 'Category',
                'color' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'JLSS',
                'classification' => 'Type',
                'type' => 'Category',
                'color' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Personal Services',
                'classification' => 'Expenditure',
                'type' => 'Category',
                'color' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Maintenance And Other Operating Expenses',
                'classification' => 'Expenditure',
                'type' => 'Category',
                'color' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Special Purposes',
                'classification' => 'Expenditure',
                'type' => 'Category',
                'color' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Capital Outlay',
                'classification' => 'Expenditure',
                'type' => 'Category',
                'color' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'First Semester',
                'classification' => 'Semester',
                'type' => 'Term ',
                'color' => 'n/a',
                'others' => 'regular',
                'is_active' => 1,
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Second Semester',
                'classification' => 'Semester',
                'type' => 'Term ',
                'color' => 'n/a',
                'others' => 'regular',
                'is_active' => 1,
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Summer Class',
                'classification' => 'Semester',
                'type' => 'Term ',
                'color' => 'n/a',
                'others' => 'summer',
                'is_active' => 1,
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'First Quarter',
                'classification' => 'Trimester',
                'type' => 'Term ',
                'color' => 'n/a',
                'others' => 'regular',
                'is_active' => 1,
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Second Quarter',
                'classification' => 'Trimester',
                'type' => 'Term ',
                'color' => 'n/a',
                'others' => 'regular',
                'is_active' => 1,
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Third Quarter',
                'classification' => 'Trimester',
                'type' => 'Term ',
                'color' => 'n/a',
                'others' => 'regular',
                'is_active' => 1,
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Summer',
                'classification' => 'Trimester',
                'type' => 'Term ',
                'color' => 'n/a',
                'others' => 'summer',
                'is_active' => 1,
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'First Quarter',
                'classification' => 'Quarter Term',
                'type' => 'Term ',
                'color' => 'n/a',
                'others' => 'regular',
                'is_active' => 1,
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Second Quarter',
                'classification' => 'Quarter Term',
                'type' => 'Term ',
                'color' => 'n/a',
                'others' => 'regular',
                'is_active' => 1,
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Third Quarter',
                'classification' => 'Quarter Term',
                'type' => 'Term ',
                'color' => 'n/a',
                'others' => 'regular',
                'is_active' => 1,
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Fourth Quarter',
                'classification' => 'Quarter Term',
                'type' => 'Term ',
                'color' => 'n/a',
                'others' => 'regular',
                'is_active' => 1,
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'RA 7687',
                'classification' => 'Scholarship',
                'type' => 'Category',
                'color' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'RA 10612',
                'classification' => 'Scholarship',
                'type' => 'Category',
                'color' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'MERIT',
                'classification' => 'Scholarship',
                'type' => 'Category',
                'color' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
            ),
        ));

        
    }
}