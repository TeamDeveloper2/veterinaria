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
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id('codmascota');
            $table->unsignedBigInteger('codmascota_cliente');
            $table->string('color',50);
            $table->string('especie',150);
            $table->date('fechaNacimiento');
            $table->char('genero',5);
            $table->string('nombre',150);
            $table->float('peso');
            $table->string('raza',150);
            $table->bigInteger('codCliente1');
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
        Schema::dropIfExists('mascotas');
    }
};
