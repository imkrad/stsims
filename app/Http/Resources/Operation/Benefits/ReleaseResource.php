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
            'created_at' => $this->created_at,
            'note' => '9999999999DEPT OF SCIENCE AND TECHN'.str_pad((str_replace('.', '', $this->total)), 15, '0', STR_PAD_LEFT).str_pad(('10236482000'), 19, '0', STR_PAD_LEFT).str_pad((5), 5, '0', STR_PAD_LEFT).' '.$this->batch
        ];
    }
}
