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
        Schema::create('enfermedadescardiacas', function (Blueprint $table) {
            $table->id('codenfercardiacas');
            $table->unsignedBigInteger('enfercard_codmascota');
            $table->float('colesterolTotal');
            $table->float('nivelHDL');
            $table->float('nivelLDL');
            $table->float('niveltrigiceridos');
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
        Schema::dropIfExists('enfermedadescardiacas');
    }
};
