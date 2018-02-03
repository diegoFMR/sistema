<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlmacensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('almacens', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('marca_id')->unsigned();
            $table->foreign('marca_id')->references('id')->on('marcas');
            $table->integer('medida_id')->unsigned();
            $table->foreign('medida_id')->references('id')->on('medidas');
            $table->string('dot');
            $table->string('profundidad');
            $table->integer('construccion_id')->unsigned();
            $table->foreign('construccion_id')->references('id')->on('construccions');
            $table->integer('tipo_id')->unsigned();
            $table->foreign('tipo_id')->references('id')->on('tipos');
            $table->integer('design_id')->unsigned();
            $table->foreign('design_id')->references('id')->on('designs');
            $table->decimal('costo', 8, 2);
            $table->string('factura');
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
        Schema::dropIfExists('almacens');
    }
}
