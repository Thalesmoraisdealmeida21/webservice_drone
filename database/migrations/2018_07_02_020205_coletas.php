<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Coletas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coletas', function (Blueprint $table) {
            $table->increments('CL_CODIGO');
            $table->string('CL_DATA');
            $table->integer('CL_RESIDENCIA');
            $table->foreign('CL_RESIDENCIA')->references('RD_CODIGO')->on('residencias');
            $table->float('CL_CONSUMO');
            $table->string('CL_MES');
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
        //
    }
}
