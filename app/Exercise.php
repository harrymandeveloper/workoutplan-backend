<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    
    public function days()
    {
        return $this->belongsToMany(Day::class); 
    }
    
    public $timestamps = false;
    
}
