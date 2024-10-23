<?php

namespace App\Http\Resources\Operation\Scholar;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'information' => json_decode($this->information),
            'type' => $this->course->type,
            'years' => $this->course->years,
            'updated_at' => $this->updated_at
        ];
    }
}
