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

        Schema::table('hemogramas', function (Blueprint $table) {            
            $table->foreign('hemograma_mascota')->references('codmascota')->on('mascotas');
        });

        Schema::table('hemogramas', function (Blueprint $table) {            
            $table->foreign('hemograma_csc')->references('codcsc')->on('cscs');
        });

        Schema::table('hemogramas', function (Blueprint $table) {            
            $table->foreign('hemograma_pmb')->references('codpmb')->on('pmbs');
        });

        Schema::table('hemogramas', function (Blueprint $table) {            
            $table->foreign('hemograma_enfer_cardiaca')->references('codenfercardiacas')->on('enfermedadescardiacas');
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
