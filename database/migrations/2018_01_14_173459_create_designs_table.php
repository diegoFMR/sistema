<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('design');
            $table->integer('aplicacion_id')->unsigned();
            $table->foreign('aplicacion_id')->references('id')->on('aplicacions');
            $table->integer('fabricante_id')->unsigned();
            $table->foreign('fabricante_id')->references('id')->on('fabricantes');
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
        Schema::dropIfExists('designs');
    }
}
