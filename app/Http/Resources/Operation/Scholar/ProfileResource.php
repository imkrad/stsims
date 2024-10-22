<?php

namespace App\Http\Resources\Operation\Scholar;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $middlename = ($this->middlename) ? $this->middlename[0].'.' : ''; 
        return [
            'id' => $this->id,
            'name' => $this->lastname.', '.$this->firstname.' '.$this->suffix.' '.$middlename,
            'firstname' => $this->firstname,
            'middlename' => $this->middlename,
            'lastname' => $this->lastname,
            'suffix' => $this->suffix,
        ];
    }
}
