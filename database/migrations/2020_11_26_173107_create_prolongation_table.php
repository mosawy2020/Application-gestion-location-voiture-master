<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProlongationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('prolongation')) {
        Schema::create('prolongation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('command_id')->unsigned();
            $table->foreign('command_id')->references('id')->on('commands')->onDelete('cascade');
            $table->integer("nbr_jour");
            $table->integer("prix");
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
     /*   Schema::dropIfExists('prolongation');
        $table->dropForeign('prolongation_command_id_foreign');
        $table->dropColumn('command_id');
      */

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('prolongation');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
