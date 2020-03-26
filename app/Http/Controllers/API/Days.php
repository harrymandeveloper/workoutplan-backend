<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\API\DaysResource;
use App\Http\Resources\API\ExerciseListResource;
use Illuminate\Http\Request;
use App\Day;
use App\Exercise;



class Days extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DaysResource::collection(Day::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // only get the title and description fields
        $data = $request->only(["dayName", "dayNumber"]); 
        $day = Day::create($data);

        return $day;
    }
  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Day $day)
    {
        return new ExerciseListResource($day);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DayRequest $request, Day $day)
    {
        // only get the title and day fields
        $data = $request->only(["exerciseName", "exerciseDescription"]); 
        $day->fill($data)->save();
        // get back a collection of exercise objects
        $exercises = Exercise::fromStrings($request->get("exercises")); 
        // sync the exercises: needs an array of Exercise ids
        $day->exercises()->sync($exercises->pluck("id")->all());

        return new DayResource($day);
    }
  

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Day $day)
    {
        // delete the day from the DB
        $day->delete();
        // use a 204 code as there is no content in the response
        return response(null, 204);
      }
}
