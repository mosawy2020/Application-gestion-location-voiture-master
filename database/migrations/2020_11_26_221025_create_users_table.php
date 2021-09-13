<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('users')) {
            Schema::create('users', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('email',191)->unique();
                $table->string('password');
                $table->timestamp('email_verified_at')->nullable();
                $table->rememberToken();
                $table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();
                /*
                $table->increments('id');
                $table->string('name')->nullable();
                $table->string('email', 191)->unique();
                $table->string('tel')->nullable();
                $table->string('password');
                $table->string('civilite')->nullable();
                $table->string('prenom')->nullable();
                $table->string('cin')->unique();
                $table->string('num_permis')->nullable();
                $table->string('adresse')->nullable();
                $table->string('ville')->nullable();
                $table->string('date_naissance')->nullable();
                //$table->string('age');
                $table->dateTime('date_inscription')->nullable();
                $table->string('image')->default('https://worldwaterskiers.com/wp-content/themes/WorldWaterSkiers/assets/graphics/default-headshot-men.png');
                $table->timestamp('email_verified_at')->nullable();
                $table->rememberToken();
                $table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();*/
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
        Schema::dropIfExists('users');
    }
}
