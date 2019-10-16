<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoingresoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productoingreso', function (Blueprint $table) {
            $table->integer('Id_Producto')->unsigned();
            $table->integer('Id_Ingreso')->unsigned();
            $table->primary(['Id_Producto','Id_Ingreso']);
            $table->foreign('Id_Producto')->references('Id')->on('producto')
            ->onDelete('cascade');
            $table->foreign('Id_Ingreso')->references('Id')->on('ingresosalida')
            ->onDelete('cascade');
            $table->integer('Cantidad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productoingreso');
    }
}
