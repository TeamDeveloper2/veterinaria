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
