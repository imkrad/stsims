<?php

namespace App\Http\Resources\Operation\Benefits;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LbpResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }
}
