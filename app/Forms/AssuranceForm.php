<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class AssuranceForm extends Form
{
    public function buildForm()
    {
        $this
        ->add('assurance', 'text')
        ->add('num_police', 'text')
        ->add('date_operation', 'date')
        ->add('date_debut', 'date')
        ->add('duree_mois', 'number')
        ->add('prix', 'text')
        ->add('contact_assurance', 'text')
        ->add('observation', 'textarea')

        ->add('submit', 'submit', ['label' => 'Save form']);
                
    }
}
