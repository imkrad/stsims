<?php

namespace App\Services\Reference;

use App\Models\LocationRegion;
use App\Models\LocationProvince;
use App\Models\LocationMunicipality;
use App\Models\LocationBarangay;
use App\Http\Resources\DefaultResource;

class ViewClass
{
    public function regions($request){
        $data = DefaultResource::collection(
                LocationRegion::when($request->keyword, function ($query, $keyword) {
                $query->where('name', 'LIKE', "%{$keyword}%")->orWhere('region', 'LIKE', "%{$keyword}%");
            })->paginate($request->count)
        );
        return $data;
    }

    public function provinces($request){
        $data = DefaultResource::collection(
            LocationProvince::with('region')->when($request->keyword, function ($query, $keyword) {
                $query->where('name', 'LIKE', "%{$keyword}%")->orWhere('old_name', 'LIKE', "%{$keyword}%");
            })->when($request->region, function ($query, $region) {
                $query->whereHas('region',function ($query) use ($region){
                    $query->where('code',$region);
                });
            })->paginate($request->count)
        );
        return $data;
    }

    public function municipalities($request){
        $data = DefaultResource::collection(
            LocationMunicipality::with('province.region')->when($request->keyword, function ($query, $keyword) {
                $query->where('name', 'LIKE', "%{$keyword}%")->orWhere('old_name', 'LIKE', "%{$keyword}%");
            })->when($request->region || $request->province, function ($query) use ($request) {
                $query->whereHas('province', function ($query) use ($request) {
                    if ($request->region) {
                        $query->whereHas('region', function ($query) use ($request) {
                            $query->where('code', $request->region);
                        });
                    }
                    if ($request->province) {
                        $query->where('code', $request->province);
                    }
                });
            })->paginate($request->count)
        );
        return $data;
    }

    public function barangays($request){
        return $data = DefaultResource::collection(
            LocationBarangay::with('municipality.province.region')->when($request->keyword, function ($query, $keyword) {
                $query->where('name', 'LIKE', "%{$keyword}%")->orWhere('old_name', 'LIKE', "%{$keyword}%");
            })->when($request->region || $request->province || $request->municipality, function ($query) use ($request) {
                $query->whereHas('municipality', function ($query) use ($request) {
                    if ($request->municipality) {
                        $query->where('code', $request->municipality);
                    }
                    $query->whereHas('province', function ($query) use ($request) {
                        if ($request->region) {
                            $query->whereHas('region', function ($query) use ($request) {
                                $query->where('code', $request->region);
                            });
                        }
                        if ($request->province) {
                            $query->where('code', $request->province);
                        }
                    });
                });
            })->paginate($request->count)
        );
    }
}
