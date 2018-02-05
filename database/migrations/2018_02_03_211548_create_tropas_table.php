<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTropasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tropas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('placa');
            $table->string('odometro');
            $table->date('year');
            $table->integer('status_id')->unsigned();
            $table->foreign('status_id')->references('id')->on('statuses');
            $table->integer('marca_id')->unsigned();
            $table->foreign('marca_id')->references('id')->on('marcas');
            $table->integer('modelo_id')->unsigned();
            $table->foreign('modelo_id')->references('id')->on('tropa_models');
            $table->integer('clase_id')->unsigned();
            $table->foreign('clase_id')->references('id')->on('clases');
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
        Schema::dropIfExists('tropas');
    }
}
