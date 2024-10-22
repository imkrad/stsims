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
            'scholar_id' => $this->scholar_id,
            'school' => new SchoolResource($this->campus),
            'course' => $this->course,
            'level' => $this->level,
            'award' => ($this->award == null) ? 'n/a' : $this->award,
            
            'has_subcourse' => ($this->subcourse == null) ? false : true,
        ];
    }
}
