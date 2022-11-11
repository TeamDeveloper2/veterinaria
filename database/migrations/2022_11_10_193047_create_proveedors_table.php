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
        Schema::create('proveedors', function (Blueprint $table) {
            $table->id('ci');               
            $table->string('nombre_proveedor');
            $table->string('apePaterno');
            $table->string('apeMaterno');            
            $table->string('genero');
            $table->string('nombre_empresa');
            $table->string('direccion_empresa');            
            $table->string('telefono');                        
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
        Schema::dropIfExists('proveedores');
    }
};
