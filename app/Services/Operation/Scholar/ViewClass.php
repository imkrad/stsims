<?php

namespace App\Services\Operation\Scholar;

use Hashids\Hashids;
use App\Models\Scholar;
use App\Models\ListStatus;
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

    public function counts(){

        $statuses = ListStatus::where('is_main',1)->where('type','Progress')->get()->map(function ($item) {
            $agency = \Auth::user()->myrole->agency_id;
            return [
                'value' => $item->id,
                'name' => $item->name,
                'icon' => $item->icon,
                'color' => $item->color,
                'others' => $item->others,
                'type' => $item->type,
                'count' => Scholar::whereHas('education',function ($query) use ( $agency) {
                    $query->whereHas('campus',function ($query) use ( $agency) {
                        $query->where('agency_id', $agency);
                    });
                })->where('status_id',$item->id)->count()
            ];
        });
        return $statuses;
    }

    public function lists($request){
        $data = ScholarResource::collection(
            Scholar::with('profile','reference','program.program','program.type','status')
            ->with('education.course','education.campus.school')
            ->with('address.region','address.province','address.municipality','address.barangay')
            ->join('scholar_profiles', 'scholar_profiles.scholar_id', '=', 'scholars.id')
            ->when($request->keyword, function ($query, $keyword) {
                $query->whereHas('profile',function ($query) use ($keyword) {
                    $query->when($keyword, function ($query, $keyword) {
                        $query->where(\DB::raw('concat(firstname," ",lastname)'), 'LIKE', '%'.$keyword.'%')
                        ->where(\DB::raw('concat(lastname," ",firstname)'), 'LIKE', '%'.$keyword.'%')
                        ->orWhere('spas_id','LIKE','%'.$keyword.'%');
                    });
                });
            })
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
            ->when($request->year, function ($query, $year) {
                $query->where('awarded_year',$year);
            })
            ->when($request->school, function ($query, $school) {
                $query->whereHas('education', function ($query) use ($school) {
                    $query->where('campus_id', $school); // Filter by campus_id matching the school
                });
            })
            ->when($request->course, function ($query, $course) {
                $query->whereHas('education', function ($query) use ($course) {
                    $query->where('course_id', $course); // Filter by course_id matching the course
                });
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
                        $region = \Auth::user()->myrole->agency_id;
                        $query->whereHas('education',function ($query) use ($region) {
                            $query->whereHas('campus',function ($query) use ($region) {
                                $query->where('agency_id',$region);
                            });
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
            Scholar::with('profile','reference','program.program','program.type','status','information')
            ->with('education.course','education.campus.school','education.level')
            ->with('enrollments.semester.semester','enrollments.level','enrollments.benefits.privilege','enrollments.benefits.status','enrollments.subjects')
            ->with('address.region','address.province','address.municipality','address.barangay')
            ->where('id',$id)->first()
        );
        return $data;
    }

    public function search($request){
        $keyword = $request->keyword;
        $data = Scholar::with('profile','program:id,name')
        ->whereHas('status',function ($query){$query->where('name','Ongoing');})
        ->when($request->keyword, function ($query, $keyword) {
            $query->whereHas('profile',function ($query) use ($keyword) {
                $query->where(\DB::raw('concat(firstname," ",lastname)'), 'LIKE', '%'.$keyword.'%')
                ->orWhere(\DB::raw('concat(lastname," ",firstname)'), 'LIKE', '%'.$keyword.'%')
                ->orWhere('spas_id','LIKE','%'.$keyword.'%');
            });
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
        ->take(5)->get()->map(function ($item) {
            $hashids = new Hashids('krad',10);
            $code = $hashids->encode($item->id);
            return [
                'code' => $code,
                'name' => $item->profile->lastname.', '.$item->profile->firstname.' '.$item->profile->middlename[0],
                'program' => $item->program->name
            ];
        });
        return $data;
    }

    // public function search($request){
    //     $keyword = $request->keyword;
    //     $data = Scholar::with('profile')
    //     ->with('program:id,name','status:id,name,type,color,others')
    //     ->with('education.campus.school','education.campus.semesters','education.campus.gradings','education.course','education.level')
    //     ->with('enrollments.semester.semester','enrollments.level','enrollments.subjects')
    //     ->whereHas('status',function ($query){
    //         $query->where('name','Ongoing');
    //     })
    //     ->when($request->keyword, function ($query, $keyword) {
    //         $query->whereHas('profile',function ($query) use ($keyword) {
    //             $query->where(\DB::raw('concat(firstname," ",lastname)'), 'LIKE', '%'.$keyword.'%')
    //             ->orWhere(\DB::raw('concat(lastname," ",firstname)'), 'LIKE', '%'.$keyword.'%')
    //             ->orWhere('spas_id','LIKE','%'.$keyword.'%');
    //         });
    //     })
    //     ->when($this->role, function ($query) {
    //         switch($this->role){
    //             case 'PSTO Staff':
    //                 $query->whereHas('address',function ($query){
    //                     $query->where('province_code',$this->assigned);
    //                 });
    //             break;
    //             case 'University Coordinator':
    //                 $query->whereHas('education',function ($query){
    //                     $query->where('campus_id',$this->assigned);
    //                 });
    //             break;
    //             default: 
    //                 $region = \Auth::user()->myrole->agency->region_code;
    //                 $query->whereHas('address',function ($query) use ($region) {
    //                     $query->where('region_code',$region);
    //                 });
    //         }
    //     })
    //     ->take(5)->get();
    //     return $data;
    // }

}
