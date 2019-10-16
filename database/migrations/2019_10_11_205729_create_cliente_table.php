<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->increments('Id');
            $table->integer('Ci_Cliente')->unique();
            $table->string('Nombre');
            $table->string('Direccion');
            $table->integer('Telefono')->nullable();
            $table->string('Correo')->nullable();
            $table->integer('Estado');
            $table->integer('Id_Distrito')->unsigned();
            $table->foreign('Id_Distrito')->references('Id')->on('distrito')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente');
    }
}
