<?php

namespace App\Http\Resources;

use App\Http\Resources\SettlementsCollectionResource;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class ZipCodeResource extends JsonResource
{
    /**
     * Removes data wrapper from the resource.
     */
    public static $wrap = null;

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'status' => true,
            'payload' => [
                'id' => $this->id,
                'code' => $this->zip_code,
                'settlements' => new SettlementsCollectionResource($this->settlements),
                'municipality' => $this->municipality,
                'city' => $this->city,
                'state' => [
                    'id' => $this->id,
                    'name' => $this->state->name,
                ],
            ]
        ];
    }
}
