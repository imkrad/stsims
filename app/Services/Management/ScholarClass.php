<?php

namespace App\Services\Management;

use DB;
use App\Models\Scholar;
use App\Models\ScholarHistory;
use App\Models\ScholarProfile;
use App\Models\ScholarAddress;
use App\Models\ScholarEducation;
use App\Models\ScholarReference;
use App\Models\ScholarInformation;
use App\Http\Resources\DefaultResource;

class ScholarClass
{   
    public function lists($request){
        $data = DefaultResource::collection(
            Scholar::with('profile','reference','program.program','program.type','status')
            ->with('education.course','education.campus.school')
            ->with('address.region','address.province','address.municipality','address.barangay')
            ->join('scholar_profiles', 'scholar_profiles.scholar_id', '=', 'scholars.id')
            ->orderBy('scholar_profiles.lastname', 'ASC')
            ->orderBy('awarded_year','ASC')
            ->paginate($request->count)
        );
        return $data;
    }

    public function truncate(){
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        ScholarHistory::truncate();
        ScholarEducation::truncate();
        ScholarAddress::truncate();
        ScholarProfile::truncate();
        ScholarReference::truncate();
        ScholarInformation::truncate();
        Scholar::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        return [
            'data' => true,
            'message' => 'Scholar truncated successfully.', 
            'info' => 'The scholar has been truncated.',
        ];
    }
}
