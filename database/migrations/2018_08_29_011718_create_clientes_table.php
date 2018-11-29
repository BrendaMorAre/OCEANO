<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_comercial');
            $table->string('nombre_fiscal');
            $table->string('contacto');
            $table->string('telefono1');
            $table->string('telefono2');
            $table->string('correo_cobranza');
            $table->string('correo_cotizaciones');
            $table->string('correo_sistemas');
            $table->string('correo_boletin');
            $table->string('rfc', 13);
            $table->string('domicilio');
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
        Schema::dropIfExists('clientes');
    }
}
