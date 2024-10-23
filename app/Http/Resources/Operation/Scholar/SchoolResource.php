<?php

namespace App\Http\Resources\Operation\Scholar;

use App\Models\Enrollment;
use App\Models\SchoolCampusSemester;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SchoolResource extends JsonResource
{
    protected $scholarId;

    public function __construct($resource, $scholarId = null)
    {
        parent::__construct($resource);
        $this->scholarId = $scholarId;
    }

    public function toArray(Request $request): array
    {
        $semester = SchoolCampusSemester::with('semester')->where('campus_id',$this->id)->where('is_active',1)->first();
       
        if($semester){
            $enrolled = Enrollment::where('is_enrolled',1)->where('semester_id',$semester->id)->where('scholar_id',$this->scholarId)->first();
        }else{
            $enrolled = null;
        }

        $name = $this->school->name;
        $campus = ($this->campus == 'Main') ? '' : ' - '.$this->campus ;

        return [
            'id' => $this->id,
            'scholar_id' => $this->scholar_id,
            'name' => $name.$campus,
            'class' => $this->school->class->name,
            'avatar' => $this->school->avatar,
            'shortcut' => $this->school->shortcut,
            'address' => ucwords($this->address),
            'semester' => ($semester) ? $semester : false,
            'is_enrolled' => ($enrolled) ? true : false,
            'gradings' => $this->gradings
        ];
    }
}
