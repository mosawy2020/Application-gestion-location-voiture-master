<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssuranceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('assurances')) {
        Schema::create('assurances', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('car_id')->unsigned();
            $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade');
            $table->string('assurance');
            $table->string('num_police');
            $table->dateTime('date_operation');
            $table->dateTime('date_debut');
            $table->integer('duree_mois');
            $table->integer('prix');
            $table->string('contact_assurance');
            $table->string('observation');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
           // $table->timestamps();
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
        /*
        Schema::dropIfExists('assurance');
        $table->dropForeign('assurance_car_id_foreign');
        $table->dropColumn('car_id');
        */
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('assurance');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
