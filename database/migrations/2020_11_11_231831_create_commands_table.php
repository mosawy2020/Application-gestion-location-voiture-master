<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('commands')) {
            Schema::create('commands', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('client_id')->unsigned();
                $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
                $table->integer('car_id')->unsigned();
                $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade');
                $table->integer('N_command');
                $table->dateTime('date_location');
                $table->dateTime('date_debut');
                $table->dateTime('date_fin');
                $table->bigInteger('prixTTC');
                $table->bigInteger('remise');
            //  $table->string('type_paiement');
                $table->bigInteger('avance');
                $table->bigInteger('rest');
                $table->enum('etat', ["cours","retourne"]);
                $table->string('lieu_command');
                $table->bigInteger('km_depart');
                $table->string('garante');
                $table->text('notes');
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
    //    Schema::dropIfExists('commands');
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('commands');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
     /*
        $table->dropForeign('commands_client_id_foreign');
        $table->dropColumn('client_id');
       //   $table->dropForeign(['client_id']);
      */
        $table->dropForeign('commands_car_id_foreign');
        $table->dropColumn('car_id');
     // $table->dropForeign(['car_id']);  
    }
}
