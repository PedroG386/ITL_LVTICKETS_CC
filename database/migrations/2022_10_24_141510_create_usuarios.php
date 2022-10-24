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
        Schema::create('TI_USUARIOS', function (Blueprint $table) {
            $table->bigIncrements('PK_USUARIO');
            $table->string('NOMBRE');
            $table->string('APELLIDO_PATERNO');
            $table->string('APELLIDO_MATERNO');
            $table->string('NO_CONTROL')->nullable();
            $table->string('CORREO');
            $table->string('TELEFONO');
            $table->string('CARRERA')->nullable();
            $table->string('AREA');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TI_USUARIOS');
    }
};
