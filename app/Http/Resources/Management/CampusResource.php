<?php

namespace App\Http\Resources\Management;

use Hashids\Hashids;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CampusResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $hashids = new Hashids('krad',10);
        $code = $hashids->encode($this->id);

        return [
            'id' => $this->id,
            'code' => $code,
            'campus' => $this->campus,
            'is_main' => $this->is_main,
            'is_active' => $this->is_active,
            'school' => $this->school,
            'grading' => $this->grading,
            'term' => $this->term,
            'agency' => $this->agency,
            'address' => $this->address,
        ];
    }
}
