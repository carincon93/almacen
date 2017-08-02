<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classrooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_ambiente', 128);
            $table->string('tipo_ambiente', 64);
            $table->string('movilidad', 15);
            $table->text('estado');
            $table->integer('cupo');
            $table->string('disponibilidad', 15)->nullable();
            $table->dateTime('borrowed_at')->nullable();
            $table->integer('instructor_id')->nullable()->unsigned();
            $table->foreign('instructor_id')->references('id')->on('instructors');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classrooms');
    }
}
