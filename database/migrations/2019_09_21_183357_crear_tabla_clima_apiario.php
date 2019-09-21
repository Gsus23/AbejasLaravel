<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaClimaApiario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clima_apiario', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('temperatura');
            $table->date('fecha');
            $table->string('hora');
            $table->unsignedInteger('apiario_id');
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
        Schema::dropIfExists('clima_apiario');
    }
}
