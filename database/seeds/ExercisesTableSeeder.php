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
                'exerciseName' =>$obj->exerciseName,
                'exerciseDescription' =>$obj->exerciseDescription,
                'exerciseRepetitions' =>$obj->exerciseRepetitions,
                'exerciseImageURL' =>$obj->exerciseImageURL,
                'exerciseDifficulty' =>$obj->exerciseDifficulty,
            ));
           
           
            // // get the id of the last exercise made
            // $exerciseid = Exercise::last
            // foreach ($obj->days) { 
            //     // within the loop populate the pivot table
            //     // mapping the day to the id
            //     // foreach    


            
        }
    }
}
