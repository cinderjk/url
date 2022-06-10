<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UrlResource extends JsonResource
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
            'id' => $this->id,
            'hash' => env('APP_URL') . '/' . $this->hash,
            'original_url' => $this->original_url,
        ];
    }
}
