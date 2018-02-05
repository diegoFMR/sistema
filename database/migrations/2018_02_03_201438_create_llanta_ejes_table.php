<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLlantaEjesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('llanta_ejes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('llanta_id')->unsigned();
            $table->foreign('llanta_id')->references('id')->on('almacens');
            $table->integer('eje_id')->unsigned();
            $table->foreign('eje_id')->references('id')->on('ejes');
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
        Schema::dropIfExists('llanta_ejes');
    }
}
