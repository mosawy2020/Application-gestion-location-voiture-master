<?php

namespace App\Forms;
//use App\Car;

use Kris\LaravelFormBuilder\Form;

class VisiteForm extends Form
{
    public function buildForm()
    {
        //$cars=App\Car::All();

        $this
        
        /*->add('car_id', 'select', [
            'choices' => [
               /* @foreach($cars as $car) 
                   $car->id => $car->id,
                @endforeach /*
            ],  
        ]) */
       //  ->add('car_id', 'text')
         ->add('centre', 'text')
         ->add('id_controle', 'text')
         ->add('n_autorisation', 'text')
         ->add('date_visite', 'date')
         ->add('duree_mois', 'number')
         ->add('date_fin', 'date')
        /*->add('duree_mois', 'select', [
            'choices' => [
            '1' => '1', '2' => '2','3'=>'3',
            '4' => '4', '5' => '5','6'=>'6',
            '7'=>'7','8' => '8', '9' => '9',
            '10'=>'10','11' => '11', '12' => '12',
        ],
        ])*/
         ->add('prix', 'text')
         ->add('contact_center', 'text')
         ->add('observation', 'textarea')
        /* ->add('etat', 'select', [
            'choices' => ['parc' => 'parc', 'panne' => 'panne','circulation'=>'circulation'],
        ])  */     
         ->add('submit', 'submit', ['label' => 'Save form']);
         

    }
}
