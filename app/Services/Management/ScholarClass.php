<?php

namespace App\Services\Management;

use DB;
use Hashids\Hashids;
use App\Models\Scholar;
use App\Models\ScholarHistory;
use App\Models\ScholarProfile;
use App\Models\ScholarAddress;
use App\Models\ScholarEducation;
use App\Models\ScholarReference;
use App\Models\ScholarInformation;
use App\Http\Resources\DefaultResource;
use App\Http\Resources\Management\ScholarResource;

class ScholarClass
{   
    public function lists($request){
        $data = ScholarResource::collection(
            Scholar::with('profile','reference','program.program','program.type','status')
            ->with('education.course','education.campus.school')
            ->with('address.region','address.province','address.municipality','address.barangay')
            ->join('scholar_profiles', 'scholar_profiles.scholar_id', '=', 'scholars.id')
            ->when($request->type, function ($query, $type) {
                $query->whereHas('program',function ($query) use ($type) {
                    $query->whereHas('type',function ($query) use ($type) {
                        $query->where('name',$type);
                    });
                });
            })
            ->when($request->status, function ($query, $status) {
                $query->where('status_id',$status);
            })
            ->orderBy('scholar_profiles.lastname', 'ASC')
            ->orderBy('awarded_year','ASC')
            ->paginate($request->count)
        );
        return $data;
    }

    public function view($request){
        $hashids = new Hashids('krad',10);
        $id = $hashids->decode($request->code);

        $data = new ScholarResource(
            Scholar::with('profile','reference','program.program','program.type','status')
            ->with('education.course','education.campus.school')
            ->with('address.region','address.province','address.municipality','address.barangay')
            ->where('id',$id)->first()
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
