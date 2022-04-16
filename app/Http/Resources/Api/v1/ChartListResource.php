<?php

namespace App\Http\Resources\Api\v1;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ChartListResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'data' => ChartResource::collection($this->collection),
        ];
    }
}
