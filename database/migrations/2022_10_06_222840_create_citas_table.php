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
            $table->id('codcita');
            $table->boolean('consulta');
            $table->string('curacion',200);
            $table->boolean('ecografia');
            $table->date('fecha');
            $table->boolean('hemograma');
            $table->string('otro',200);
            $table->boolean('radiografia');
            $table->boolean('registroMedico');
            $table->boolean('spa');
            $table->id('codCita');
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
