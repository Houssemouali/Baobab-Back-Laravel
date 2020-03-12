<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class JournalistResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'status'=>$this->status,
            'status'=>$this->status,
            'actual_entreprise'=>$this->actual_entreprise,
            'cv'=>$this->cv,
            'portefolio'=>$this->portefolio,
            'users'=>$this->users

        ];
    }
}
