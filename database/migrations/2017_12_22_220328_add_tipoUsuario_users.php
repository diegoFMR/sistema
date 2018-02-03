<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTipoUsuarioUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('users', function($table){
            $table->integer('tipoUsuario_id')->unsigned()->default(4);
            $table->foreign('tipoUsuario_id')->references('id')->on('tipoUsuarios')->onDelete('cascade');
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
        Schema::table('users', function($table){
            $table->dropForeign('users_tipoUsuarios_id_foreign');
        });
    }
}
