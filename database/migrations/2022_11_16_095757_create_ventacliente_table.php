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
        Schema::create('ventaclientes', function (Blueprint $table) {
            $table->id('id_ventacliente');            
            $table->string('nombre_cliente', 100);
            $table->string('nit', 100)->nullable();
            $table->date('fecha_reserva');
            $table->enum('estado_cliente', ['reservado', 'confirmado']);
            $table->unsignedInteger('cantidad_articulos');
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
        Schema::dropIfExists('ventaclientes');
    }
};
