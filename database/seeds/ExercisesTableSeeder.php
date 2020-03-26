<?php

use Illuminate\Database\Seeder;
use App\Exercise;

class ExercisesTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exercises')->delete();
        $json= File::get('database/data/exercises.json');
        $data=json_decode($json);
        foreach ($data as $obj) {
            Exercise::create(array(
                'exerciseName' =>$obj->name,
                'exerciseDescription' =>$obj->description,
                'exerciseRepetitions' =>$obj->repetitions,
                'exerciseImageURL' =>$obj->image,
                'exerciseDifficulty' =>$obj->difficulty
            ));
        }
    }
}
