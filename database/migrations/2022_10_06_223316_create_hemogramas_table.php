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
        Schema::create('hemogramas', function (Blueprint $table) {
            $table->id('codhemograma');
            $table->dateTime('fecha');
            $table->unsignedBigInteger('hemograma_mascota');
            $table->unsignedBigInteger('hemograma_csc');
            $table->unsignedBigInteger('hemograma_pmb');
            $table->unsignedBigInteger('hemograma_enfer_cardiaca');
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
        Schema::dropIfExists('hemogramas');
    }
};
