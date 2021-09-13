<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAchatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('achat')) {
        Schema::create('achat', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('car_id')->unsigned();
            $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade');
            $table->string('maison_achat');
            $table->bigInteger('prix');
            $table->bigInteger('avance_cache');
            $table->bigInteger('duree_mois');
            $table->dateTime('date_achat');
            $table->dateTime('date_premier_traite');
            $table->bigInteger('rest');
            $table->bigInteger('rest_mois');
            $table->timestamps();
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
    /*  Schema::dropIfExists('achat');
        $table->dropForeign('achat_car_id_foreign');
        $table->dropColumn('car_id');
        */
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('achat');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
 
    }
}
