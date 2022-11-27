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

        Schema::table('emergencias', function (Blueprint $table) {
            $table->foreign('codmascotas')->references('codmascota')->on('mascotas');
        });

        Schema::table('registromedicos', function (Blueprint $table) {
            $table->foreign('codmasc')->references('codmascota')->on('mascotas');
        });
        Schema::table('registromedicos', function (Blueprint $table) {
            $table->foreign('codenferm')->references('codenfermedad')->on('enfermedads');
        });
        Schema::table('registromedicos', function (Blueprint $table) {
            $table->foreign('codtab')->references('codtableta')->on('tabletas');
        });
        Schema::table('registromedicos', function (Blueprint $table) {
            $table->foreign('codeme')->references('codemergencia')->on('emergencias');
        });

        Schema::table('inventarios', function (Blueprint $table) {
            $table->foreign('codUser')->references('id')->on('users');
        });
        
        Schema::table('ventas', function (Blueprint $table) {
            $table->foreign('idcliente_idventa')->references('id_ventacliente')->on('ventaclientes');
        });   

        Schema::table('devoluciones', function (Blueprint $table) {
            $table->foreign('iddevoluciones_idcliente')->references('id_ventacliente')->on('ventaclientes');
        });   

        Schema::table('devoluciones', function (Blueprint $table) {
            $table->foreign('iddevoluciones_idventa')->references('id_venta')->on('ventas');
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
