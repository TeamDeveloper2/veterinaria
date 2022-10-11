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
            $table->unsignedBigInteger('telefono');
            $table->enum('motivo', ['consulta', 'curacion', 'ecografia', 'hemograma', 'radiografia', 'spa'])->default('consulta');
            $table->string('otro',200)->nullable();
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
        Schema::dropIfExists('citas');
    }
};
