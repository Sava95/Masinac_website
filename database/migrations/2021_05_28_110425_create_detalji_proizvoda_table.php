<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetaljiProizvodaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalji_proizvoda', function (Blueprint $table) {
            $table->id();
            $table->string('prod_id');
            $table->string('oznaka');
            $table->string('sirina')->nullable();
            $table->string('duzina')->nullable();
            $table->string('debljina')->nullable();
            $table->string('debljina_lima')->nullable();
            $table->string('zastita')->nullable();
            $table->string('tezina')->nullable();
            $table->string('br_komada')->nullable();
            $table->string('teh_doc')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalji_proizvoda');
    }
}
