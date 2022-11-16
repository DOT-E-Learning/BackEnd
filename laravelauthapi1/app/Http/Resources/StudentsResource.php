<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
            'id' => (string)$this->id,
            'type' => 'Students',
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email'=> $this->email,   
            'field_of_study' => $this->field_of_study,
            'level_of_study' => $this->level_of_study,
            'address' => $this->address,
            'date_of_birth' => $this->date_of_birth,
            'gender' => $this->gender,
            'phone_number' => $this->phone_number,             
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
            
        ];
    }
}
