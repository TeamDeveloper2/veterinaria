<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devoluciones', function (Blueprint $table) {
            $table->id('id_devoluciones');
            $table->unsignedBigInteger('iddevoluciones_idventa');
            $table->unsignedBigInteger('iddevoluciones_idcliente');
            $table->unsignedInteger('cantidad_articulo');
            $table->string('cod_producto');
            $table->date('fecha_devolucion');
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
        Schema::dropIfExists('devoluciones');
    }
};
