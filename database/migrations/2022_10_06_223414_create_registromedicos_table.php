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
        Schema::create('registromedicos', function (Blueprint $table) {
            $table->id('codregistroMedico');
            $table->date('fecha');
            $table->bigInteger('codenferm');
            $table->bigInteger('codtab');
            $table->bigInteger('codmasc');
            $table->bigInteger('codeme');
            $table->string('recomendacion')->nullable();
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
        Schema::dropIfExists('registromedicos');
    }
};
