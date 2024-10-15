<?php

namespace App\Services\Management;

use App\Models\SchoolCampusCourse;

class ProspectusClass
{
    public function view($request){
        $data = SchoolCampusCourse::with('course','campus.school','prospectuses')->first();
        return $data;
    }
}
