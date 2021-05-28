<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrupeProizvodaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupe_proizvoda', function (Blueprint $table) {
            $table->id();
            $table->string('prod_id');
            $table->string('naziv');
            $table->longText('opis');
            $table->string('slika');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupe_proizvoda');
    }
}
