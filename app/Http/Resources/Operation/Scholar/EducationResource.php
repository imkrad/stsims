<?php

namespace App\Http\Resources\Operation\Scholar;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EducationResource extends JsonResource
{
    public function toArray(Request $request): array
    {
       
        return [
            'id' => $this->id,
            'campus_id' => $this->campus_id,
            'scholar_id' => $this->scholar_id,
            'school' => new SchoolResource($this->campus, $this->scholar_id),
            'course' => $this->course,
            'level' => $this->level,
            'award' => ($this->award == null) ? 'n/a' : $this->award
        ];
    }
}
