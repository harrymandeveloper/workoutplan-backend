<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;


class Exercise extends Model
{
    public $timestamps = false;

    protected $fillable = ['exerciseName', 'exerciseDescription', 'exerciseRepetitions', 'exerciseImageURL', 'exerciseDifficulty'];

    public function days()
    {
        return $this->belongsToMany(Day::class); 
    }
    
}
