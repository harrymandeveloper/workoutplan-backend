<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Days;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(["prefix" => "days"], function () {
    // GET /days: show all days
    Route::get("", [Days::class, "index"]);
    // POST /days: create a new day
    Route::post("", [Days::class, "store"]);
// all these routes also have an day ID in the
// end-point, e.g. /days/8
Route::group(["prefix" => "{day}"], function () {
        // GET /days/8: show the day
        Route::get("", [Days::class, "show"]);
        // PUT /days/8: update the day
        Route::put("", [Days::class, "update"]);
        // DELETE /days/8: delete the day
        Route::delete("", [Days::class, "destroy"]);
    });

});

Route::group(["prefix" => "exercises"], function () {
        // GET /exercises: show all exercises
        Route::get("", [Exercises::class, "index"]);
        // POST /exercises: create a new day
        Route::post("", [Exercises::class, "store"]);
        // all these routes also have an day ID in the
        // end-point, e.g. /exercises/8
    Route::group(["prefix" => "{exercise}"], function () {
                // GET /exercises/8: show the exercise
                Route::get("", [Exercises::class, "show"]);
                // PUT /exercises/8: update the exercise
                Route::put("", [Exercises::class, "update"]);
                // DELETE /exercises/8: delete the exercise
                Route::delete("", [Exercises::class, "destroy"]);
            });


});
