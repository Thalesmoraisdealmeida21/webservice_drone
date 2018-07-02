<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Residencias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residencias', function (Blueprint $table) {
            $table->increments('RD_CODIGO');
            $table->string('RD_RUA');
            $table->string('RD_NUMERO');
            $table->string('RD_BAIRRO');
            $table->string('RD_MUNICIPIO');
            $table->date('RD_DTUCOLETA');
            $table->timestamps();
        });
    }


}
