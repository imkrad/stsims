<?php

namespace App\Observers;

use App\Jobs\NewSemester;
use App\Models\Enrollment;
use App\Models\SchoolCampusSemester;

class SemesterObserver
{
    public function created(SchoolCampusSemester $semester): void
    {
        $ids = SchoolCampusSemester::where('campus_id',$semester->campus_id)->where('is_active',1)->where('id','!=',$semester->id)->pluck('id');
        Enrollment::where('is_enrolled',0)->whereIn('semester_id',$ids)->update(['is_missed' => 1]);
        SchoolCampusSemester::where('campus_id',$semester->campus_id)->where('id','!=',$semester->id)->update(['is_active' => 0]);
        NewSemester::dispatch($semester->id)->delay(now()->addSeconds(10));
    }
}
