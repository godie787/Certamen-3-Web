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
        Schema::create('cuentas', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->string('user',20);
            $table->string('password',100);
            $table->string('nombre',20);
            $table->string('apellido',20);
            $table->integer('perfil_id');
            $table->timestamps();
            //$table->foreign('perfil_id')->references('id')->on('perfiles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuentas');
    }
};
