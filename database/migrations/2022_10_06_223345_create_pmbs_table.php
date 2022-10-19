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
         * Panel metabólico básico (pmb)
         */
        Schema::create('pmbs', function (Blueprint $table) {
            $table->id('codpmb');
            $table->unsignedBigInteger('pmb_codmascota');
            $table->float('calcio');
            $table->float('electrocitos');
            $table->float('glucosa');
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
        Schema::dropIfExists('pmbs');
    }
};
