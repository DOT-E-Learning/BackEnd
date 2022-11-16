<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ModulesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => (string)$this->id,
            'type' => 'Module',
            'name' => $this->name,
            'notes' => $this->notes,
            'youtube_url' => $this->youtube_url,
            'picture' => $this->pictures,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'Course id' => (string) $this->course->id,
            'course name' => $this->course->title,
            'course description' => $this->course->description 
            
        ];
    }
}
