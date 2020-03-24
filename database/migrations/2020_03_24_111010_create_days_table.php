<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('days', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('dayName');
            $table->integer('dayNumber');
            $table->string('exercise1');
            $table->string('exercise2');
            $table->string('exercise3');
            $table->string('exercise4');
            $table->timestamps();
        });
        
        Schema::create('day_exercise', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('day_id')->unsigned();
            $table->bigInteger('exercise_id')->unsigned();
            $table->foreign("day_id")->references("id")->on("days")->onDelete("cascade");
            $table->foreign("exercise_id")->references("id")->on("exercises")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('days');
        Schema::dropIfExists('day_exercise');
    }
}
