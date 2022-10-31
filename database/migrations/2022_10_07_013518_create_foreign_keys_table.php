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
        Schema::table('administradors', function (Blueprint $table) {            
            $table->foreign('codAdministrador')->references('id')->on('users');
        }); 

        Schema::table('clientes', function (Blueprint $table) {            
            $table->foreign('codCliente')->references('id')->on('users');
        });

        Schema::table('citas', function (Blueprint $table) {            
            $table->foreign('codcita_cliente')->references('id')->on('users');
        }); 

        Schema::table('mascotas', function (Blueprint $table) {            
            $table->foreign('codmascota_cliente')->references('id')->on('users');
        });
        
        Schema::table('cscs', function (Blueprint $table) {            
            $table->foreign('csc_codmascota')->references('codmascota')->on('mascotas');
        });

        Schema::table('enfermedadescardiacas', function (Blueprint $table) {            
            $table->foreign('enfercard_codmascota')->references('codmascota')->on('mascotas');
        });

        Schema::table('pmbs', function (Blueprint $table) {            
            $table->foreign('pmb_codmascota')->references('codmascota')->on('mascotas');
        });

        Schema::table('ecografias', function (Blueprint $table) {            
            $table->foreign('codecografia_mascota')->references('codmascota')->on('mascotas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //       
    }
};
