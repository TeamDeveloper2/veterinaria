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
        Schema::create('spas', function (Blueprint $table) {
            $table->id('codspa');
            $table->unsignedInteger('codspa_codcliente');
            $table->unsignedInteger('codspa_codmascota');
            $table->enum('motivo', ['ducha', 'limpiezadental', 'peluqueria']);
            $table->string('otro')->nullable();
            $table->float('precio',3,2);
            $table->date('fecha');
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
        Schema::dropIfExists('spas');
    }
};
