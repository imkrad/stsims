<?php

namespace App\Services\Operation\Enrollment;

use Hashids\Hashids;
use App\Models\Scholar;
use App\Http\Resources\Operation\Scholar\ViewResource;

class ViewClass
{
    public function scholar($code){
        $hashids = new Hashids('krad',10);
        $id = $hashids->decode($code);

        $data = Scholar::with('profile')
        ->with('program:id,name','status:id,name,type,color,others')
        ->with('education.campus.school','education.campus.semesters','education.campus.gradings','education.course','education.level')
        ->with('enrollments.semester.semester','enrollments.level','enrollments.subjects')
        ->whereHas('status',function ($query){
            $query->where('name','Ongoing');
        })
        ->where('id',$id)->first();
        return new ViewResource($data);
    }
}
