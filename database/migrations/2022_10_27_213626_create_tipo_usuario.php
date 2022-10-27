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
        Schema::create('TI_TIPO_USUARIO', function (Blueprint $table) {
            $table->bigIncrements('PK_TIPO_USUARIO');
            $table->string("NOMBRE");
            $table->string("DESCRIPCION");
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TI_TIPO_USUARIO');
    }
};
