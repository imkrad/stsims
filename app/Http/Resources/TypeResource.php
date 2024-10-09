<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TypeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        switch($this->roleable_type){
            case 'App\Models\SchoolCampus':
                $a = ($this->roleable->campus == 'Main') ? '' : ' - '.$this->roleable->campus;
                $name = $this->roleable->school->name.$a;
            break;
            case 'App\Models\LocationProvince':
                $name = $this->roleable->name;
            break;
            case 'App\Models\ListAgency':
                $name = $this->roleable->name;
            break;
        }
        return [
            'name' => $name
        ];
    }
}
