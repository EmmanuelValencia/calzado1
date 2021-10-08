<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Orden extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('idUsuario')-> references('id')-> on ('users');
            $table->foreign('idMetodoPago')-> references('id')-> on ('metodo_pago');
            $table->double('total');
            
            $table->int('idDomicilio')-> references('id')-> on ('domicilio');            
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
