<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngresosalidaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingresosalida', function (Blueprint $table) {
            $table->increments('Id');
            $table->date('Fecha');
            $table->string('Tipo');
            $table->integer('Id_Estante')->unsigned();
            $table->foreign('Id_Estante')->references('Id')->on('estante')
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
        Schema::dropIfExists('ingresosalida');
    }
}
