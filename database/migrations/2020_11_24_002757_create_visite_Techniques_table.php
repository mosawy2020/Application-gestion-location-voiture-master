<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisiteTechniqueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      //  if (!Schema::hasTable('visite_technique')) {
        Schema::create('visite_technique', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('car_id')->unsigned();
            $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade');
            $table->string('centre');
            $table->bigInteger('id_controle');
            $table->bigInteger('n_autorisation');
            $table->dateTime('date_visite');
            $table->dateTime('date_fin');
            $table->string('duree_mois');
            $table->bigInteger('prix');
            $table->string('contact_center');
            $table->string('observation');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
        });
      //}
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*
        Schema::dropIfExists('visite_technique');
        $table->dropForeign('visite_technique_car_id_foreign');
        $table->dropColumn('car_id');
        
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('visite_technique');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
       */
    }
}
