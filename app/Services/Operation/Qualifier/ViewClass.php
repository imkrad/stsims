<?php

namespace App\Services\Operation\Qualifier;

use App\Models\Qualifier;
use App\Models\ListStatus;
use App\Http\Resources\Operation\QualifierResource;

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

        $statuses = ListStatus::where('type','Qualifier')->get()->map(function ($item) {
            $region = \Auth::user()->myrole->agency->region_code;
            return [
                'value' => $item->id,
                'name' => $item->name,
                'icon' => $item->icon,
                'color' => $item->color,
                'others' => $item->others,
                'count' => Qualifier::where('region',$region)->where('status_id',$item->id)->count()
            ];
        });
        return $statuses;
    }

    public function lists($request){
        $data = QualifierResource::collection(
            Qualifier::with('profile','program.program','program.type','type','status')
            ->with('address.region','address.province','address.municipality','address.barangay')
            ->join('qualifier_profiles', 'qualifier_profiles.qualifier_id', '=', 'qualifiers.id')
            ->when($request->keyword, function ($query, $keyword) {
                $query->whereHas('profile',function ($query) use ($keyword) {
                    $query->where(\DB::raw('concat(firstname," ",lastname)'), 'LIKE', "%{$keyword}%")
                    ->orWhere(\DB::raw('concat(lastname," ",firstname)'), 'LIKE', "%{$keyword}%");
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
            ->when($this->role, function ($query) {
                switch($this->role){
                    case 'PSTO Staff':
                        $query->whereHas('address',function ($query){
                            $query->where('province_code',$this->assigned);
                        });
                    break;
                    default: 
                        $region = \Auth::user()->myrole->agency->region_code;
                        $query->whereHas('address',function ($query) use ($region) {
                            $query->where('region_code',$region);
                        });
                }
            })
            ->orderBy('qualifier_profiles.lastname', 'ASC')
            ->orderBy('qualified_year','ASC')
            ->paginate($request->count)
        );
        return $data;
    }
}
