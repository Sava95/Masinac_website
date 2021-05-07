<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSarkeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sarke', function (Blueprint $table) {
            $table->id();
            $table->string('naziv');
            $table->string('oznaka');
            $table->string('sifrka');
            $table->string('duzina');
            $table->string('sirina'); 
            $table->string('debljina'); 
            $table->string('zastita'); 
            $table->string('tezina');
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
        Schema::dropIfExists('sarke');
    }
}
