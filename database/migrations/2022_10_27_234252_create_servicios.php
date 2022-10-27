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
        Schema::create('TI_TICKETS', function (Blueprint $table) {
            $table->bigIncrements('PK_CARRERA');
            $table->integer('FK_SERVICIO')->references('PK_SERVICIO')->on('TI_SERVICIOS');
            $table->integer('FK_COORDINADOR')->references('PK_COORDINADOR')->on('TI_COORDINADOR');
            $table->time('HORARIO_ATENCION');
            $table->string('DESCRIPCION',200);
            $table->string('OBSERVACIONES',100);
            $table->datetime('FECHA_ATENCION');       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TI_TICKETS');
    }
};
