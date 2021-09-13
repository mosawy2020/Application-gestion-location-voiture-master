<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('clients')) {
            Schema::create('clients', function (Blueprint $table) {
                $table->increments('id');
                $table->string('cin')->unique();
                $table->string('civilite');
                $table->string('num_permis');
                $table->string('nom');
                $table->string('prenom');
                $table->string('tel');
                $table->string('adresse');
                $table->string('ville');
                $table->string('email', 191)->unique();
                $table->string('date_naissance');
                //$table->string('age');
                $table->string('date_inscription');
                $table->string('image')->default('https://worldwaterskiers.com/wp-content/themes/WorldWaterSkiers/assets/graphics/default-headshot-men.png');
                $table->timestamp('email_verified_at')->nullable();
               // $table->string('password');
                $table->rememberToken();
                $table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();
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
       // Schema::dropIfExists('clients'); 
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('clients');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
       
    }
}
