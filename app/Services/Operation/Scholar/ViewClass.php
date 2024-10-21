<?php

namespace App\Services\Operation\Scholar;

use Hashids\Hashids;
use App\Models\Scholar;
use App\Http\Resources\Operation\ScholarResource;

class ViewClass
{
    public $assigned;

    public function __construct()
    {
        if (\Auth::check()) {
            $this->assigned = \Auth::user()->myrole->roleable_id;
            $this->role = \Auth::user()->myrole->role->name;
        } else {
            $this->assigned = null; 
            $this->role = null;
        }
    }

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
            ->when($this->role, function ($query) {
                switch($this->role){
                    case 'PSTO Staff':
                        $query->whereHas('address',function ($query){
                            $query->where('province_code',$this->assigned);
                        });
                    break;
                    case 'University Coordinator':
                        $query->whereHas('education',function ($query){
                            $query->where('campus_id',$this->assigned);
                        });
                    break;
                    default: 
                        $region = \Auth::user()->myrole->agency->region_code;
                        $query->whereHas('address',function ($query) use ($region) {
                            $query->where('region_code',$region);
                        });
                }
            })
            ->orderBy('scholar_profiles.lastname', 'ASC')
            ->orderBy('awarded_year','ASC')
            ->paginate($request->count)
        );
        return $data;
    }

    public function view($code){
        $hashids = new Hashids('krad',10);
        $id = $hashids->decode($code);

        $data = new ScholarResource(
            Scholar::with('profile','reference','program.program','program.type','status')
            ->with('education.course','education.campus.school','education.level')
            ->with('address.region','address.province','address.municipality','address.barangay')
            ->where('id',$id)->first()
        );
        return $data;
    }
}
