<?php

namespace App\Services\Operation\School;

use Hashids\Hashids;
use App\Models\Scholar;
use App\Models\SchoolCampus;
use App\Models\ListStatus;
use App\Models\SchoolCampusSemester;
use App\Models\SchoolCampusCourse;
use App\Http\Resources\Operation\SchoolResource;

class ViewClass
{
    public function __construct()
    {
        if (\Auth::check()) {
            $this->assigned = (\Auth::user()->myrole) ? \Auth::user()->myrole->roleable_id : null;
            $this->role = (\Auth::user()->myrole) ? \Auth::user()->myrole->role->name : null;
        } else {
            $this->assigned = null; 
            $this->role = null;
        }
    }
    
    public function lists($request){
        $data = SchoolResource::collection(
            SchoolCampus::with('school.class','grading','term','agency')
            ->with('address.region','address.province','address.municipality','address.barangay')
            ->when($request->keyword, function ($query, $keyword) {
                $query->where('campus', 'LIKE', "%{$keyword}%")
                ->orWhereHas('school', function ($query) use ($keyword) {
                    $query->where('name', 'LIKE', "%$keyword%");
                });
            })
            ->when($request->status, function ($query, $status) {
                $status = ($status == 'Active') ? 1 : 0;
                $query->where('is_active',$status);
            })
            ->when($request->grading, function ($query, $grading) {
                $query->where('grading_id',$grading);
            })
            ->when($request->term, function ($query, $term) {
                $query->where('term_id',$term);
            })
            ->when($this->role, function ($query) {
                switch($this->role){
                    case 'PSTO Staff':
                        $query->whereHas('address',function ($query){
                            $query->where('province_code',$this->assigned);
                        });
                    break;
                    case 'University Coordinator':
                        $query->where('id',$this->assigned);
                    break;
                    default: 
                        $region = \Auth::user()->myrole->agency->region_code;
                        $query->whereHas('address',function ($query) use ($region) {
                            $query->where('region_code',$region);
                        });
                }
            })
            ->orderBy('is_active','DESC')
            ->paginate($request->count)
        );
        return $data;
    }

    public function view($code){
        $hashids = new Hashids('krad',10);
        $id = $hashids->decode($code);
        
        $data = SchoolCampus::with('school.class','grading','term','agency')
        ->with('names','gradings','semesters.semester')
        ->with(['courses.course','courses.certifications' => function ($query) {
            $query->where('is_active', 1);
        },])
        ->with('address.region','address.province','address.municipality','address.barangay')
        ->where('id',$id)
        ->first();
        if ($data && $data->courses) {
            $data->courses->map(function ($course) use ($hashids) {
                if ($course) {
                    $course->code = $hashids->encode($course->id);
                    $course->hasActive = $course->hasActiveProspectus();
                }
                return $course;
            });
        }
        return $data;
    }

    public function course($code){
        $hashids = new Hashids('krad',10);
        $id = $hashids->decode($code);

        $data = SchoolCampusCourse::with('course','campus.school','campus.term','prospectuses')
        ->where('id',$id)->first();
        return $data;
    }

    public function counts($code){
        $hashids = new Hashids('krad',10);
        $id = $hashids->decode($code);

        $total = Scholar::whereHas('education',function ($query) use ($id) {
            $query->where('campus_id',$id);
        })->count();

        $graduating = Scholar::whereHas('education',function ($query) use ($id) {
            $query->where('campus_id',$id);
        })->whereHas('status',function ($query) use ($id) {
            $query->where('name','Graduated');
        })
        ->count();

        $ongoing = Scholar::whereHas('education',function ($query) use ($id) {
            $query->where('campus_id',$id);
        })->whereHas('status',function ($query) use ($id) {
            $query->where('name','Ongoing');
        })->count();

        $array = [
            ['count' => $total, 'name' => 'Total Scholars', 'description' => 'The total number of enrolled scholars', 'icon' => 'ri-team-fill fs-20', 'color' => 'text-info'],
            ['count' => $ongoing,'name' => 'Ongoing Scholars', 'description' => 'Scholars currently enrolled and studying', 'icon' => 'ri-emotion-fill fs-20', 'color' => 'text-primary'],
            ['count' => $graduating,'name' => 'Total Graduates', 'description' => 'Scholars who have successfully graduated', 'icon' => 'bx bxs-graduation fs-20', 'color' => 'text-success'],
        ];

        return $array;
    }

    public function statuses($code){
        $hashids = new Hashids('krad',10);
        $id = $hashids->decode($code);

        $definitions = [
            'Successfully completed a course or program.',
            'Ended or revoked before the scheduled completion.',
            'Has not submitted the required periodic reports.',
            'Voluntarily left or discontinued the scholarship.',
            'Currently active and continuing in a scholarship program.'
        ];

        $data = ListStatus::withCount(['scholars' => function ($query) use ($id) {
            $query->whereHas('education', function ($q) use ($id) {
                $q->where('campus_id', $id);
            });
        }])
        ->where('type','Progress')->whereNot('id',2)
        ->get()
        ->map(function ($item, $index) use ($definitions) {
            return [
                'id' => $item->id,
                'name' => $item->name,
                'color' => $item->color,
                'others' => $item->others,
                'type' => $item->type,
                'count' => $item->scholars_count,
                'icon' => $item->icon,
                'definition' => $definitions[$index % count($definitions)]
            ];
        });
        return $data;
    }

    public function activeSemester($request){
        $data = SchoolCampusSemester::with('semester')->where('campus_id',$request->id)->first();
        return $data;
    }
}
