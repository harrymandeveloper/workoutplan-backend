<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Day;
use App\Http\Resources\API\ExerciseListResource;


use App\Exercise;
use App\Http\Resources\API\DaysResource;

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
        $data = $request->all();

        return Day::create($data);
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
    public function update(Request $request, Day $day)
    {
        // get the request data
        $data = $request->all();
        // update the day using the fill method 
        // then save it to the database $day->fill($data)->save();
        // return the updated version
        return $day;
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
