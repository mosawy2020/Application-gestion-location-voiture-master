<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('cars')) {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('matricule');
            $table->string('marque');
            $table->string('modele');
            $table->string('couleur');
            $table->bigInteger('puissance');
            $table->bigInteger('vitice');
          //  $table->string('type');
            $table->enum('etat', ["circulation","parc","panne"]);
            $table->enum('type_carburant', ["disel", "essence","electrique"]);
            $table->enum('carburant', ["reserve", "1/4","1/2","2/3","plein"]);
           // $table->bigInteger('prixJour');
            $table->enum('prixJour', [200,250])->default(200);
           // $table->boolean('disponible')->default(0);
            $table->enum('disponible', [1, 0])->default(0);
            $table->string('image')->default('https://www.carhuddle.com/images/default/car-default.jpg');
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
        Schema::dropIfExists('cars');
    }
}
