<?php

use Illuminate\Database\Seeder;

class VisiteSeeder extends Seeder
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
       factory(App\VisiteTechnique::class,10)->make()->each(function($VisiteTechnique) use ($cars){
        $VisiteTechnique->car_id=$cars->random()->id;
        $VisiteTechnique->save();
       });
    }
}
