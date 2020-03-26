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
            "exercises" => [
                "exercise1" => Exercise::find(1)->exerciseName,
                "exercise2" => Exercise::find(2)->exerciseName,
                "exercise3" => Exercise::find(3)->exerciseName,
                "exercise4" => Exercise::find(4)->exerciseName,
            ],
            "noOfDays" => $daysCount,
        ];
    }
}
