<?php

namespace App\Http\Resources\Management;

use Hashids\Hashids;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class QualifierResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $hashids = new Hashids('krad',10);
        $code = $hashids->encode($this->id);

        return [
            'id' => $this->id,
            'code' => $code,
            'qualified_year' => $this->qualified_year,
            'spas_id' => $this->spas_id,
            'school' => $this->school,
            'course' => $this->course,
            'status' => $this->status,
            'program' => $this->program,
            'type' => $this->type,
            'profile' => $this->profile,
            'address' => $this->address,
        ];
    }
}
