<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameProizvodi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('proizvodi', function(Blueprint $table) {
            $table->renameColumn('slike', 'slika');
            $table->renameColumn('grupe_prod_id', 'id_grupe_proizvoda');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('proizvodi', function(Blueprint $table) {
            $table->renameColumn('slika', 'slike');
            $table->renameColumn('id_grupe_proizvoda', 'grupe_prod_id');

        });
    }
}
