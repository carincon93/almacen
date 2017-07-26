<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstructoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',50);
            $table->string('apellidos',50);
            $table->bigInteger('documento',13);
            $table->string('area',50);
            $table->integer('ip',50);
            $table->bigInteger('celular');
            $table->string('correo')->unique();
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
        Schema::dropIfExists('instructores');
    }
}
