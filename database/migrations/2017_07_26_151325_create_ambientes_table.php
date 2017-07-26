<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmbientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ambientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_ambiente',50);
            $table->string('tipo_ambiente',50);
            $table->string('movilidad',50);
            $table->boolean('estado');
            $table->integer('cupo',25);
            $table->integer('id_instructor')->unsigned();
            $table->foreign('id_instructor')->references('id')->on('instructores');
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
        Schema::dropIfExists('ambientes');
    }
}
