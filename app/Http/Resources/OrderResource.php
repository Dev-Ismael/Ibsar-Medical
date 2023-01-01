<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id'         => $this->id,
            'username'   => $this->username  ,
            'email'      => $this->email ,
            'phone'      => $this->phone ,
            'offer_id'   => $this->offer_id ,
            'created_at' => $this->created_at,
        ];
    }
}
