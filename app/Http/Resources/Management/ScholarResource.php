<?php

namespace App\Http\Resources\Management;

use Hashids\Hashids;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ScholarResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $hashids = new Hashids('krad',10);
        $code = $hashids->encode($this->id);

        return [
            'id' => $this->id,
            'code' => $code,
            'awarded_year' => $this->awarded_year,
            'spas_id' => $this->spas_id,
            'profile' => $this->profile,
            'reference' => $this->reference,
            'status' => $this->status,
            'program' => $this->program,
            'education' => $this->education,
            'address' => $this->address,
        ];
    }
}
