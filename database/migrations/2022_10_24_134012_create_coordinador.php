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
        Schema::create('TI_COORDINADOR', function (Blueprint $table) {
            $table->bigIncrements('PK_COORDINADOR');
            $table->string('NOMBRE');
            $table->string('APELLIDO_PARTERNO');
            $table->string('APELLIDO_MATERNO');
            $table->string('TELEFONO');
            $table->string('CORREO');
            $table->time('HORA_ENTRADA');
            $table->time('HORA_SALIDA');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TI_COORDINADOR');
    }
};
