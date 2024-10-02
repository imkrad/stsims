<?php

namespace App\Services\Reference;

use App\Models\LocationRegion;
use App\Models\LocationProvince;
use App\Models\LocationMunicipality;
use App\Models\LocationBarangay;
use App\Http\Resources\DefaultResource;

class UpdateClass
{
    public function barangay($request){
        $data = LocationBarangay::where('id',$request->id)->first();
        $data->name = $request->name;
        $data->old_name = $request->old_name;
        $data->district = $request->district;
        $data->municipality_code = $request->municipality_code['code'];
        $data->save();

        return [
            'data' => new DefaultResource($data),
            'message' => 'Barangay updated successfully.', 
            'info' => "The barangay details has been changed."
        ];
    }

    public function municipality($request){
        $data = LocationMunicipality::where('id',$request->id)->first();
        $data->name = $request->name;
        $data->old_name = $request->old_name;
        $data->district = $request->district;
        $data->is_chartered = $request->is_chartered;
        $data->zipcode = $request->zipcode;
        $data->province_code = $request->province_code['code'];
        $data->save();

        return [
            'data' => new DefaultResource($data),
            'message' => 'Municipality updated successfully.', 
            'info' => "The municipality details has been changed."
        ];
    }
}
