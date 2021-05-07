<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlasticnaMasaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plasticna_masa', function (Blueprint $table) {
            $table->id();
            $table->string('naziv');
            $table->string('oznaka');
            $table->string('sifrka');
            $table->string('duzina');
            $table->string('sirina'); 
            $table->string('debljina'); 
            $table->string('debljina_lima');
            $table->string('zastita'); 
            $table->string('tezina');
            $table->string('br_komada');
            $table->string('teh_doc');
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
        Schema::dropIfExists('plasticna_masa');
    }
}
