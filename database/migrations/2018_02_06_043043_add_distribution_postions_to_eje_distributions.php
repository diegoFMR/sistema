<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDistributionPostionsToEjeDistributions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('eje_distributions', function($table) {
            $table->integer('distribution_position_id')->unsigned();
            $table->foreign('distribution_position_id')->references('id')->on('distribution_positions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
