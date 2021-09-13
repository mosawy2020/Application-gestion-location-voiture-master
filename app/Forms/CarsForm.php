<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class CarsForm extends Form
{
    public function buildForm()
    {
        $this
      // ->add('name', 'text')
       ->add('matricule', 'text')
       ->add('marque', 'text')
       ->add('modele', 'text')
       ->add('puissance', 'text')
       ->add('vitice', 'text')
       ->add('image', 'file')
       
        /*->add('lyrics', 'textarea')
        ->add('publish', 'checkbox')
        ->add('languages', 'select', [
            'choices' => ['en' => 'English', 'fr' => 'French'],
        ])*/
        ->add('prixJour', 'select', [
            'choices' => ['250' => '250', '200' => '200'],
        ])
        ->add('disponible', 'select', [
            'choices' => ['1' => '1', '0' => '0'],
        ]) 
        ->add('etat', 'select', [
            'choices' => ['parc' => 'parc', 'panne' => 'panne','circulation'=>'circulation'],
        ])
        ->add('type_carburant', 'select', [
            'choices' => ['disel' => 'disel', 'essence' => 'essence','electrique'=>'electrique'],
        ])
        ->add('carburant', 'select', [
            'choices' => ['reserve' => 'reserve', '1/4' => '1/4','1/2' => '1/2','2/3'=>'2/3','plein'=>'plein'],
        ])
        
        ->add('submit', 'submit', ['label' => 'Save form']);
        
    }

}
