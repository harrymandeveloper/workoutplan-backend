<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Day;
use App\Exercise;

class DaysResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $daysCount = $this->count();

        return [
            "name" => $this->dayName,
            "exercises" => $this->exercises->pluck("exerciseName"),
            "noOfDays" => $daysCount,
        ];
    }
}
