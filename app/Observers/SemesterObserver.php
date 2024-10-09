<?php

namespace App\Observers;

use App\Models\SchoolCampusSemester;

class SemesterObserver
{
    public function created(SchoolCampusSemester $semester): void
    {
       
        // $ids = SchoolCampusSemester::where('campus_id',$request->campus_id)->where('is_active',1)->where('id','!=',$data->id)->pluck('id');
        // foreach($ids as $id){
        //     $scholar = ScholarEnrollment::where('is_enrolled',0)->where('semester_id',$id)->update(['is_missed' => 1]);
        // }
        // SchoolCampusSemester::where('campus_id',$request->campus_id)->where('id','!=',$data->id)->update(['is_active' => 0]);
        // NewSemester::dispatch($data->id)->delay(now()->addSeconds(10));
        
    }
}
