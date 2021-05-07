<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZicaniProzivodiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zicani_prozivodi', function (Blueprint $table) {
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
        Schema::dropIfExists('zicani_prozivodi');
    }
}
