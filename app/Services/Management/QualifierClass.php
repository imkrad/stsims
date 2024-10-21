<?php

namespace App\Services\Management;

use App\Models\Qualifier;
use App\Http\Resources\Management\QualifierResource;

class QualifierClass
{
    public function lists($request){
        $data = QualifierResource::collection(
            Qualifier::with('profile','program.program','program.type','type','status')
            ->with('address.region','address.province','address.municipality','address.barangay')
            ->join('qualifier_profiles', 'qualifier_profiles.qualifier_id', '=', 'qualifiers.id')
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
            ->orderBy('qualifier_profiles.lastname', 'ASC')
            ->orderBy('qualified_year','ASC')
            ->paginate($request->count)
        );
        return $data;
    }
}
