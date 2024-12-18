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

class OldScholar implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $id;
    
    public function __construct($id = null)
    {
        $this->id = $id;
    }

    public function handle(): void
    {
        if($this->id != null){
            $scholar = Scholar::with('education')->where('id',$this->id)
            ->whereHas('status',function ($query){
                $query->where('name','ongoing');
            })->first();

            if($scholar){
                $awarded_year = $scholar->awarded_year;
                $campus_id = $scholar->education->campus_id;
                $level_id = $scholar->education->level_id;
            }
            $semesters = SchoolCampusSemester::where('campus_id',$campus_id)->where('year','>=',$awarded_year)->orderBy('created_at','ASC')->get();
            if(count($semesters) > 0){
                foreach($semesters as $index => $semester){
                    $information = [
                        'is_disabled' => ($index == 0) ? 0 : 1,
                        'scholar_id' => $this->id,
                        'semester_id' => $semester->id,
                        'level_id' => $level_id ,
                        'attachment' => json_encode([
                            'grades' => [],
                            'enrollments' => []
                        ]),
                        'user_id' => \Auth::user()->id,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];

                    $enrollment = Enrollment::create($information);
                    if($enrollment){
                        $list_benefits = ListPrivilege::where('is_reimburseable',0)->get();
                        $type = ScholarEducation::with('campus.term')->where('scholar_id',$this->id)->first();
                        $term_name = $type->campus->term->name;
                        $others = $enrollment->semester->semester->others;
                        $month = $semester->start_at;
    
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
                                'status_id' => 18,
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
                }
            }
        }
    }
}
