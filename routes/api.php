<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\Days;
use App\Http\Controllers\API\Exercises;

Route::get("/days", [Days::class, "index"]);
Route::get("/day/{day}", [Exercises::class, "show"]);


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});