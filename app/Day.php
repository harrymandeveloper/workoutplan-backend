<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    public function exercises()
    {
    return $this->belongsToMany(Exercise::class); }
}
