<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsCar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('cars')) {
            Schema::table('cars', function(Blueprint $table) {
            //  $table->string('places');
                $table->enum('places', [4, 6]);  
                $table->enum('portes', [2, 4]);  
                $table->enum('sacs', [2, 3]);  
                $table->enum('clima', ["oui", "non"]);  
                $table->enum('boitevites', ["automatique ", "manuelle"]);  
            // $table->string('portes');
            // $table->string('sacs');
            // $table->string('clima');
            // $table->string('boitevites');
            });
      }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
