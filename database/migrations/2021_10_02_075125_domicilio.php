<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Domicilio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domicilio', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('idUsuario')-> references('id')-> on ('users');
            $table->string('calle');
            $table->string('estado');
            $table->string('cuidad');
            $table->string('numeroExt');
            $table->string('numeroInt');
            $table->string('pais');
            $table->string('cp');
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
        //
    }
}
