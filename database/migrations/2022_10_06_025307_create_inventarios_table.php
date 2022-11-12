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
        Schema::create('inventarios', function (Blueprint $table) {
            $table->id('coditem');
            $table->string('codigoProducto');
            $table->string('nombreItem',50);
            $table->float('precio',3,2);
            $table->string('detalle',50);
            $table->date('fecha');
            $table->integer('cantidadAnterior');
            $table->integer('cantidadActual');
            $table->integer('cantidadSalida');
            $table->integer('cantidadTotal');
            $table->date('fecha_vencimiento')->nullable();
            $table->bigInteger('codUser');
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
        Schema::dropIfExists('inventarios');
    }
};
