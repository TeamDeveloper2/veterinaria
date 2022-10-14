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
        Schema::create('cscs', function (Blueprint $table) {
            $table->id('codcsc');
            $table->float('blobulosBlancos',3,2);
            $table->float('globulosRojos',3,2);
            $table->float('hemoglobina');
            $table->float('plaquetas');
            $table->dateTime('fecha');
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
