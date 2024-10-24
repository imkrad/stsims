<?php

namespace App\Jobs;

use App\Models\Scholar;
use App\Models\ScholarEducation;
use App\Models\Enrollment;
use App\Models\EnrollmentBenefit;
use App\Models\SchoolCampusSemester;
use App\Models\ListPrivilege;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class NewSemester implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $id,$school_id;

    public function __construct($id = null)
    {
        $this->id = $id;
    }

    public function handle(): void
    {
        $data = SchoolCampusSemester::with('semester')->where('id',$this->id)->first();
        $semester_id = $data->id;
        $campus_id = $data->campus_id;
        $semester_name = $data->semester->name;
        $month = $data->start_at;

        if($this->id != null){
            $scholars = Scholar::select('id')->whereHas('status',function ($query){
                $query->where('name','Ongoing');
            })->withWhereHas('education',function ($query) use ($campus_id,$semester_name){
                $query->select('id','scholar_id','level_id')->where('campus_id',$campus_id)
                    ->withWhereHas('level',function ($query) use ($semester_name){
                    $query->select('id','name','others');
                });
            })->get();

            $enrollmentsData = $scholars->map(function ($scholar) use ($semester_id,$semester_name,$month){
                $count = Enrollment::where('scholar_id',$scholar->id)->where('is_locked',0)->count();
                $fill = [
                    'scholar_id' => $scholar->id,
                    'semester_id' => $semester_id,
                    'level_id' => $scholar->education->level_id,
                    'attachment' => json_encode([
                        'grades' => [],
                        'enrollments' => []
                    ]),
                    'user_id' => \Auth::user()->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];

                if($semester_name == 'Summer Class'){
                    if($scholar->education->level->others == 'Third Year'){
                        $enrollment = Enrollment::create($fill);
                    }else{
                        return [];
                    }
                }else{
                    $enrollment = Enrollment::create($fill);
                }

                if($enrollment){
                    $list_benefits = ListPrivilege::where('is_reimburseable',0)->get();
                    $type = ScholarEducation::with('campus.term')->where('scholar_id',$scholar->id)->first();
                    $term_name = $type->campus->term->name;
                    $others = $enrollment->semester->semester->others;

                    switch($term_name){
                        case 'Semester': 
                            $div = 2;
                        break;
                        case 'Trimester':
                            $div = 3;
                        break;
                        case 'Quarter Term':
                            $div = 4;
                        break;
                    }

                    foreach($list_benefits as $benefit){
                        $attachment = [];
                        $cleanedAmount = str_replace(['₱', ','], '', $benefit['regular_amount']);
                        $amount = ($others != 'summer') ? $cleanedAmount : $cleanedAmount;
                        if($others != 'summer'){
                            $total = $amount / (($benefit['type'] == 'Term') ? $div : 1);
                        }else{
                            $total = $amount;
                        }
                        $wew = [
                            'privilege_id' => $benefit['id'],
                            'enrollment_id' => $enrollment->id,
                            'amount' => $total,
                            'release_type' => 'Full',
                            'month' => date('Y-m-01', strtotime($month)),  
                            'status_id' => 18, //pending
                            'attachment' => json_encode($attachment)
                        ];
            
            
                        if($benefit['id'] == 1){
                            $number = ($others != 'summer') ? 5 : 2; 
                            for($x = 0; $x < $number; $x++){
                                $list = EnrollmentBenefit::create($wew);
                                $wew['month'] = date('Y-m-d', strtotime($wew['month']. ' + 1 months'));
                            }
                        }else if($benefit['name'] == 'Clothing Allowance'){
                            $s_id = $scholar->id;
                            $count = EnrollmentBenefit::whereHas('enrollment',function ($query) use ($s_id) {
                                $query->whereHas('scholar',function ($query) use ($s_id) {
                                    $query->where('id',$s_id);
                                });
                            })->where('privilege_id',$benefit['id'])->count();
                            ($count == 0) ? $list = EnrollmentBenefit::create($wew) : '';
                        }else{
                            $list = EnrollmentBenefit::create($wew);
                        }
                    }
                }

            });
        }
    }
}
