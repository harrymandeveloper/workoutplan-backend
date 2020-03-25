<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Exercise;

class ExerciseListResource extends JsonResource
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
            "name" => $this->dayName,
            "exercises" => [
                Exercise::find(1),
                Exercise::find(2),
                Exercise::find(3),
                Exercise::find(4),
            ],
        ];
    }
}
