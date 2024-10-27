<?php

namespace App\Http\Resources\Operation\Benefits;

use Illuminate\Http\Request;
use App\Http\Resources\Operation\NameResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ReleaseResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'batch' => $this->batch,
            'count' => $this->count,
            'month' => date('F Y', strtotime($this->created_at)),
            'dv_no' => ($this->dv_no == NULL) ? 'Not Available' : $this->dv_no,
            'user' => new NameResource($this->user),
            'total' => $this->total,
            'status' => $this->status,
            'created_at' => $this->created_at
        ];
    }
}
