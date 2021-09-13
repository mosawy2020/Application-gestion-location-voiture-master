<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNbrJourToCommands extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    //    if (!Schema::hasTable('commands')) {
            Schema::table('commands', function (Blueprint $table) {
                $table->integer('NbrJour')->nullable();
            });
      //  }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('commands', function (Blueprint $table) {
           $table->dropColumn(['NbrJour']);
        });
    }
}
