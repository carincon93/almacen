<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstructorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 64);
            $table->string('apellidos', 64);
            $table->bigInteger('numero_documento');
            $table->string('area', 128);
            $table->integer('ip');
            $table->bigInteger('telefono')->nullable();
            $table->bigInteger('celular');
            $table->string('email', 64)->unique();
            $table->integer('instructor_type_id')->unsigned();
            $table->foreign('instructor_type_id')->references('id')->on('instructor_types');
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
        Schema::dropIfExists('instructors');
    }
}
