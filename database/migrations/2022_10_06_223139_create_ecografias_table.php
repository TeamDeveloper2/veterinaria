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
        Schema::create('ecografias', function (Blueprint $table) {
            $table->id('codecografia');
            $table->bigInteger('codecografia_mascota');            
            $table->enum('area', ['abdomen', 'pelvis']);
            $table->string('observaciones')->nullable();
            $table->integer('telefono');
            $table->date('fecha');
            $table->string('img_ecografia')->nullable();
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
        Schema::dropIfExists('ecografias');
    }
};
