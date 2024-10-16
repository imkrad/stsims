<?php

namespace App\Services\Management;

use App\Models\SchoolCampusCourseProspectus;

class ProspectusClass
{
    public function save($request){
        $years = $request->years;
        $term = $request->term;
        
        $data = SchoolCampusCourseProspectus::create($request->all());
        return [
            'data' => $data,
            'message' => 'School created successfully.', 
            'info' => 'The new school has been added.',
        ];
    }

    public function view($request){
        $data = SchoolCampusCourse::with('course','campus.school','prospectuses')->first();
        return $data;
    }
}
