<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ListStatusesTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('list_statuses')->delete();
        
        \DB::table('list_statuses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'n/a',
                'type' => 'n/a',
                'color' => 'n/a',
                'icon' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
                'created_at' => '2024-10-03 16:04:36',
                'updated_at' => '2024-10-03 16:04:36',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Unknown',
                'type' => 'Progress',
                'color' => 'bg-dark-subtle',
                'icon' => 'n/a',
                'others' => 'text-dark',
                'is_active' => 1,
                'created_at' => '2024-10-03 16:05:00',
                'updated_at' => '2024-10-03 16:05:00',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Graduated',
                'type' => 'Progress',
                'color' => 'bg-success-subtle',
                'icon' => 'bx bxs-graduation',
                'others' => 'text-success',
                'is_active' => 1,
                'created_at' => '2024-10-03 16:08:56',
                'updated_at' => '2024-10-03 16:08:56',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Terminated',
                'type' => 'Progress',
                'color' => 'bg-danger-subtle',
                'icon' => 'ri-close-circle-fill',
                'others' => 'text-danger',
                'is_active' => 1,
                'created_at' => '2024-10-03 16:09:14',
                'updated_at' => '2024-10-03 16:09:14',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Non-compliance',
                'type' => 'Progress',
                'color' => 'bg-warning-subtle',
                'icon' => 'ri-error-warning-fill',
                'others' => 'text-warning',
                'is_active' => 1,
                'created_at' => '2024-10-03 16:09:34',
                'updated_at' => '2024-10-03 16:09:34',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Withdrew',
                'type' => 'Progress',
                'color' => 'bg-info-subtle',
                'icon' => 'ri-radio-button-fill',
                'others' => 'text-info',
                'is_active' => 1,
                'created_at' => '2024-10-03 16:09:50',
                'updated_at' => '2024-10-03 16:09:50',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Ongoing',
                'type' => 'Progress',
                'color' => 'bg-primary-subtle',
                'icon' => 'ri-checkbox-circle-fill',
                'others' => 'text-primary',
                'is_active' => 1,
                'created_at' => '2024-10-03 16:10:26',
                'updated_at' => '2024-10-03 16:10:26',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Good Standing',
                'type' => 'Ongoing',
                'color' => 'bg-success',
                'icon' => 'n/a',
                'others' => 'GS',
                'is_active' => 1,
                'created_at' => '2024-10-03 16:12:03',
                'updated_at' => '2024-10-03 16:12:03',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Continue Under Probation',
                'type' => 'Ongoing',
                'color' => 'bg-info',
                'icon' => 'n/a',
                'others' => 'CUP',
                'is_active' => 1,
                'created_at' => '2024-10-03 16:12:44',
                'updated_at' => '2024-10-03 16:12:44',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Continue with Partial Allowance',
                'type' => 'Ongoing',
                'color' => 'bg-warning',
                'icon' => 'n/a',
                'others' => 'CPA',
                'is_active' => 1,
                'created_at' => '2024-10-03 16:13:25',
                'updated_at' => '2024-10-03 16:13:25',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Leave of Absence',
                'type' => 'Ongoing',
                'color' => 'bg-danger',
                'icon' => 'n/a',
                'others' => 'LOA',
                'is_active' => 1,
                'created_at' => '2024-10-03 16:13:48',
                'updated_at' => '2024-10-03 16:13:48',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'No Report',
                'type' => 'Ongoing',
                'color' => 'bg-dark',
                'icon' => 'n/a',
                'others' => 'NR',
                'is_active' => 1,
                'created_at' => '2024-10-03 16:13:48',
                'updated_at' => '2024-10-03 16:13:48',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Waiting',
                'type' => 'Qualifier',
                'color' => 'bg-warning',
                'icon' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
                'created_at' => '2024-10-03 16:13:48',
                'updated_at' => '2024-10-03 16:13:48',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Deferment',
                'type' => 'Qualifier',
                'color' => 'bg-danger',
                'icon' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
                'created_at' => '2024-10-03 16:13:48',
                'updated_at' => '2024-10-03 16:13:48',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Not Avail',
                'type' => 'Qualifier',
                'color' => 'bg-dark',
                'icon' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
                'created_at' => '2024-10-03 16:13:48',
                'updated_at' => '2024-10-03 16:13:48',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Enrolled',
                'type' => 'Qualifier',
                'color' => 'bg-success',
                'icon' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
                'created_at' => '2024-10-03 16:13:48',
                'updated_at' => '2024-10-03 16:13:48',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => '-',
                'type' => 'Qualifier Status',
                'color' => 'bg-success',
                'icon' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
                'created_at' => '2024-10-03 16:13:48',
                'updated_at' => '2024-10-03 16:13:48',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Pending',
                'type' => 'Benefit Status',
                'color' => 'bg-warning',
                'icon' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
                'created_at' => '2024-10-03 16:13:48',
                'updated_at' => '2024-10-03 16:13:48',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Waiting',
                'type' => 'Benefit Status',
                'color' => 'bg-info',
                'icon' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
                'created_at' => '2024-10-03 16:13:48',
                'updated_at' => '2024-10-03 16:13:48',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Released',
                'type' => 'Benefit Status',
                'color' => 'bg-success',
                'icon' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
                'created_at' => '2024-10-03 16:13:48',
                'updated_at' => '2024-10-03 16:13:48',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Cancelled',
                'type' => 'Benefit Status',
                'color' => 'bg-danger',
                'icon' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
                'created_at' => '2024-10-03 16:13:48',
                'updated_at' => '2024-10-03 16:13:48',
            ),
        ));

        
    }
}