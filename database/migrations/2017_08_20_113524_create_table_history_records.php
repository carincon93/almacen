<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHistoryRecords extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_records', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('instructor_num_doc');
            $table->integer('classroom_id')->unsigned();
            $table->dateTime('prestado_en');
            $table->dateTime('entregado_en')->nullable();
            $table->longText('novedad')->nullable();
            $table->longText('novedad_nueva')->nullable();
            $table->foreign('instructor_num_doc')->references('numero_documento')->on('instructors')->onDelete('cascade');
            $table->foreign('classroom_id')->references('id')->on('classrooms')->onDelete('cascade');
            $table->timestamps();
            $table->dropColumn(['created_at', 'updated_at']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('history_records');
    }
}