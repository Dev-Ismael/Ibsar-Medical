<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ServiceResource extends JsonResource
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
            'title'      => $this->title,
            'img'        => '/images/services/'.$this->img,
            'icon'       => '/images/services/'.$this->icon,
            'summary'    => $this->summary,
            'content'    => $this->content,
            'created_at' => $this->created_at,
        ];
    }
}