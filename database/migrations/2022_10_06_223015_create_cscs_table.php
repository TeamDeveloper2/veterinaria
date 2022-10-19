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
        /**
         * Conteo sanguíneo completo (CSC) prueba de sangre
         */
        Schema::create('cscs', function (Blueprint $table) {            
            $table->id('codcsc');
            $table->unsignedBigInteger('csc_codmascota');
            $table->float('globulosBlancos',3,2);
            $table->float('globulosRojos',3,2);
            $table->float('hemoglobina',3,2);
            $table->float('plaquetas',3,2);
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
        Schema::dropIfExists('cscs');
    }
};
