<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('agences')) {
        Schema::create('agences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('ville');
            $table->string('adresse');
            $table->string('devise');
            $table->string('tel');
            $table->string('fix');
            $table->string('email');
            $table->string('website');
            $table->string('num_contrat');
            $table->binary('image')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
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
        Schema::dropIfExists('agences');

    }
}
