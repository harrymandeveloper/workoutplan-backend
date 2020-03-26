<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{

    protected $fillable = ["dayName", "dayNumber"];

    public function exercises()
    {
    return $this->belongsToMany(Exercise::class); }
}
