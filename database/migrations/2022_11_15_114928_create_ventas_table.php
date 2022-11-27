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
        Schema::create('ventas', function (Blueprint $table) {
            $table->id('id_venta');
            $table->unsignedBigInteger('idcliente_idventa')->nullable();
            $table->string('cod_producto');
            $table->unsignedInteger('cantidad_articulo');
            $table->string('cantidad_kilo')->nullable();
            $table->date('fecha_venta');
            $table->enum('estado_venta', ['reservado', 'confirmado', 'devolucion']);
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
        Schema::dropIfExists('ventas');
    }
};
