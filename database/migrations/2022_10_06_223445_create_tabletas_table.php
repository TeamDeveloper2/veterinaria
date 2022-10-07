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
        Schema::create('tabletas', function (Blueprint $table) {
            $table->id('codtableta');
            $table->float('dosisporDia');
            $table->dateTime('fecha');
            $table->string('nombreMedicamentos',250);
            $table->decimal('precio',10,8);
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
        Schema::dropIfExists('tabletas');
    }
};
