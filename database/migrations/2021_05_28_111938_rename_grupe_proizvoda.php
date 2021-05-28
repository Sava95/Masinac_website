<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameGrupeProizvoda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::table('grupe_proizvoda', function(Blueprint $table) {
            $table->renameColumn('prod_id', 'grupe_prod_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('grupe_proizvoda', function(Blueprint $table) {
            $table->renameColumn('prod_id', 'grupe_prod_id');
        });
    }
}
