<?php

use Illuminate\Database\Seeder;

class AssuranceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cars=App\Car::All();
        //factory(App\VisiteTechnique::class,10)->create();
        factory(App\Assurance::class,10)->make()->each(
            function($Assurances) use ($cars){
         $Assurances->car_id=$cars->random()->id;
         $Assurances->save();
        });
    }
}
