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
        Schema::create('TI_SERVICIOS', function (Blueprint $table) {
            $table->bigIncrements('PK_SERVICIO');
            $table->string("NOMBRE");
            $table->string("DESCRIPCION");
            $table->integer('FK_COORDINADOR')->references('PK_COORDINADOR')->on('TI_COORDINADOR');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TI_SERVICIOS');
    }
};
