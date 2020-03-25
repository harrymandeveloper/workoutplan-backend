<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;


class Exercise extends Model
{
    public $timestamps = false;

    static public function fromStrings(array $strings) : Collection
    {
        return collect($strings)->map([Exercise::class, "fromString"])->unique("name");
    }

    static public function fromString(string $string) : Exercise
    {
        $string = trim($string);
        $exercise = Exercise::where("name", $string)->first();
        return $exercise ? $exercise : Exercise::create(["name" => $string]);
    }


    public function days()
    {
        return $this->belongsToMany(Day::class); 
    }
    
}
