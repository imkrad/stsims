<?php

namespace App\Http\Resources\Operation\Scholar;

use Hashids\Hashids;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ViewResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $hashids = new Hashids('krad',10);
        $code = $hashids->encode($this->id);

         return [
            'id' => $this->id,
            'code' => $code,
            'spas_id' => $this->spas_id,
            'awarded_year' => $this->awarded_year,
            'status' => $this->status,
            'program' => $this->program,
            'course' => new CourseResource($this->course),
            'profile' => new ProfileResource($this->profile), 
            'education' =>  new EducationResource($this->education),
            'enrollments' => EnrollmentResource::collection($this->enrollments),
            'semesters' =>  $this->education->campus->semesters,
        ];
    }
}
