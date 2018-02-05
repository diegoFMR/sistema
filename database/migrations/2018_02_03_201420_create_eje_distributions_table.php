<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEjeDistributionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eje_distributions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('eje_id')->unsigned();
            $table->foreign('eje_id')->references('id')->on('ejes');
            $table->integer('distribution_id')->unsigned();
            $table->foreign('distribution_id')->references('id')->on('distributions');
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
        Schema::dropIfExists('eje_distributions');
    }
}
