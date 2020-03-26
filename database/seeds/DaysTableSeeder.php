<?php

use Illuminate\Database\Seeder;
use App\Day;

class DaysTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('days')->delete();
        $json= File::get('database/data/days.json');
        $data=json_decode($json);
        foreach ($data as $obj) {
            Exercise::create(array(
                'dayName' =>$obj->name,
                'dayNumber' =>$obj->description,
            ));
        }
    }
}
