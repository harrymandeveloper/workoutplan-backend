<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\Days;
use App\Http\Controllers\API\Exercises;

Route::get("/days", [Days::class, "index"]);
Route::get("/days", [Days::class, "show"]);
Route::get("/days/{day}", [Days::class, "show"]);
Route::post("/days", [Days::class, "store"]);

Route::get("/exercises", [Exercises::class, "index"]);
Route::get("/exercise/{exercise}", [Days::class, "show"]);
Route::post("/exercises", [Exercises::class, "store"]);


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
