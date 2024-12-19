<?php

namespace App\Services\Operation\Benefit;

use App\Models\Release;
use App\Models\Scholar;
use App\Models\Enrollment;
use App\Models\EnrollmentBenefit;
use App\Http\Resources\Operation\NameResource;
use App\Http\Resources\Operation\Benefits\LbpResource;
use App\Http\Resources\Operation\Benefits\ListResource;
use App\Http\Resources\Operation\Benefits\ReleaseResource;

class ViewClass
{
    public $assigned;

    public function __construct()
    {
        if (\Auth::check()) {
            if(\Auth::user()->myrole){
                $this->assigned = \Auth::user()->myrole->roleable_id;
                $this->role = \Auth::user()->myrole->role->name;
                $this->agency_id = \Auth::user()->myrole->agency_id;
            }else{
                $this->assigned = null; 
                $this->role = null;
                $this->agency_id = null;
            }
        } else {
            $this->assigned = null; 
            $this->role = null;
            $this->agency_id = null;
        }
    }

    public function upcoming(){
        $date = now();
        $region = \Auth::user()->myrole->agency->region_code;
        $pending = Enrollment::whereHas('benefits',function ($query) use ($date){
                $query->where('status_id',18)->where('month','<=',$date);
            })->whereHas('scholar',function ($query) use ($region) {
                $query->whereHas('address',function ($query) use ($region) {
                    $query->where('region_code',$region);
                });
            })
            ->groupBy('scholar_id')->pluck('scholar_id');
        $scholars = Scholar::with('profile')->whereIn('id',$pending)->get();
        
        $month = date('Y',strtotime($date)).'-'.date('m',strtotime($date)).'-01';

        $ongoing = Scholar::whereHas('status', function ($query) {
            $query->where('name','Ongoing');
        })->whereHas('address',function ($query) use ($region) {
            $query->where('region_code',$region);
        })->count();

        $received = EnrollmentBenefit::where('month',$month)->where('privilege_id',1)->whereIn('status_id',[19,20])
        ->whereHas('enrollment',function ($query) use ($region) {
            $query->whereHas('scholar',function ($query) use ($region) {
                $query->whereHas('address',function ($query) use ($region) {
                    $query->where('region_code',$region);
                });
            });
        })->count();

        $count = Release::whereYear('created_at', '=', date("Y"))->whereMonth('created_at', '=', date("m"))->where('agency_id',$this->agency_id)->count();

        $data = [
            'pending' => $pending,
            'scholars' => NameResource::collection($scholars),
            'month' => date('F',strtotime($date)),
            'count' => $count,
            'ongoing' => $ongoing,
            'received' => $received
        ];
        return $data;
    }

    public function lists($request){
        $data = Release::with('status','user')
        ->when($request->status, function ($query, $status) {
            $query->where('status_id',$status);
        })
        ->where('agency_id',$this->agency_id)
        ->paginate($request->count);
        return ReleaseResource::collection($data);
    }

    public function pendings(){
        $data = Release::with('status','user')
        ->where('status_id',18)
        ->where('agency_id',$this->agency_id)
        ->get();
        return ReleaseResource::collection($data);
    }

    public function scholars($request){
        $region = \Auth::user()->myrole->agency->region_code;
        $month = now();
        // $scholars = Scholar::whereHas('enrollments.benefits', function ($query) {
        //     $query->where('status_id', 18);
        // })
        // ->with(['enrollments' => function ($query) {
        //     $query->whereHas('benefits', function ($query) {
        //         $query->where('status_id', 18);
        //     });
        // }, 'enrollments.benefits'])
        // ->whereHas('address',function ($query) use ($region) {
        //     $query->where('region_code',$region);
        // })
        // ->join('scholar_profiles', 'scholar_profiles.scholar_id', '=', 'scholars.id')
        // ->orderBy('scholar_profiles.lastname', 'ASC')
        // ->paginate($request->count);
        // return $scholars;

        $data = Scholar::select('id','program_id')
        ->with('program:id,name')
        ->with('information:scholar_id,account_no')
        ->with('profile:scholar_id,firstname,lastname,middlename')
        ->withWhereHas('enrollments', function ($query) use ($month) {
            $query->select('id','scholar_id','semester_id')->where('is_enrolled', 1)
            ->withWhereHas('semester', function ($query) {
                $query->select('id','academic_year','semester_id')
                ->withWhereHas('semester', function ($query) {
                    $query->select('id','name');
                });
            })
            ->withWhereHas('benefits', function ($query) use ($month) {
                $query->select('id','enrollment_id','amount','month','privilege_id')->where('status_id',18)->where('month','<=',$month)
                ->withWhereHas('privilege', function ($query) {
                    $query->select('id','name','type','short','regular_amount','summer_amount');
                });
            });
        })->whereHas('address',function ($query) use ($region) {
            $query->where('region_code',$region);
        })->paginate($request->count);
        return ListResource::collection($data);

    }

    public function released($request){
        $scholars = Enrollment::select('scholar_id')
        ->whereHas('benefits',function ($query) use ($request){
            $query->where('release_id',$request->id);
        })->groupBy('scholar_id')->pluck('scholar_id');
        
        $data = Scholar::select('id','program_id')
        ->with('program:id,name')
        ->with('profile:scholar_id,firstname,lastname,middlename')
        ->withWhereHas('enrollments', function ($query) use ($request){
            $query->select('id','scholar_id','semester_id')
            ->withWhereHas('semester', function ($query) {
                $query->select('id','academic_year','semester_id')
                ->withWhereHas('semester', function ($query) {
                    $query->select('id','name');
                });
            })
            ->withWhereHas('benefits', function ($query) use ($request){
                $query->select('id','enrollment_id','amount','month','privilege_id')->where('release_id',$request->id)
                ->withWhereHas('privilege', function ($query) {
                    $query->select('id','name','type','short','regular_amount','summer_amount');
                });
            });
        })
        ->whereIn('id',$scholars)
        ->get()
        ->sortBy('profile.lastname');
        return ListResource::collection($data);
    }

    public function lbp($request){
        $scholars = Enrollment::select('scholar_id')
        ->whereHas('benefits',function ($query) use ($request){
            $query->where('release_id',$request->id);
        })->groupBy('scholar_id')->pluck('scholar_id');
        
        $data = Scholar::select('id','program_id')
        ->with('program:id,name')
        ->with('profile:scholar_id,firstname,lastname,middlename')
        ->withWhereHas('enrollments', function ($query) use ($request){
            $query->select('id','scholar_id','semester_id')
            ->withWhereHas('semester', function ($query) {
                $query->select('id','academic_year','semester_id')
                ->withWhereHas('semester', function ($query) {
                    $query->select('id','name');
                });
            })
            ->withWhereHas('benefits', function ($query) use ($request){
                $query->select('id','enrollment_id','amount','month','privilege_id')->where('release_id',$request->id)
                ->withWhereHas('privilege', function ($query) {
                    $query->select('id','name','type','short','regular_amount','summer_amount');
                });
            });
        })
        ->whereIn('id',$scholars)
        ->get()
        ->sortBy('profile.lastname');
        return LbpResource::collection($data);
    }

    public function management($request){
        $data = Release::with('status','user','agency')
        ->where('status_id',18)
        ->paginate($request->count);
        return ReleaseResource::collection($data);
    }

}
