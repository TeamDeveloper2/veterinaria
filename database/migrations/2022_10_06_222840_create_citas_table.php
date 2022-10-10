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
        Schema::create('citas', function (Blueprint $table) {
            $table->unsignedBigInteger('codcita');
            $table->boolean('consulta')->nullable();
            $table->boolean('curacion')->nullable();
            $table->boolean('ecografia')->nullable();
            $table->date('fecha');            
            $table->boolean('hemograma')->nullable();
            $table->string('otro',200)->nullable();
            $table->boolean('radiografia')->nullable();
            $table->boolean('registroMedico')->nullable();
            $table->boolean('spa')->nullable();
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
        Schema::dropIfExists('citas');
    }
};
