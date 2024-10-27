<?php

namespace App\Http\Resources\Operation\Benefits;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ListResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'account_no' => ( $this->information->account_no) ? $this->information->account_no : '000-0000-000',
            'name' => $this->profile->lastname.', '. $this->profile->firstname,
            'program' => $this->program->name,
            'avatar' => 'avatar.jpg',
            'total' => $this->enrollments->flatMap->benefits->sum('amount'),
            'enrollments' => EnrollmentResource::collection($this->enrollments)

        ];
    }
}
