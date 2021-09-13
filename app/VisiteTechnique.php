<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VisiteTechnique extends Model
{

    protected $fillable = [
        'car_id', 'centre','id_controle', 'n_autorisation',
        'date_visite', 'date_fin', 'duree_mois',
        'prix','contact_center','observation',
    ];
    protected $guarded=['*','id'];
    /* The attributes that should be 
    mutated to dates.*/

    protected $dates = [
        'seen_at',
        'date_visite',
        'date_fin'
    ];

    
    public function car()
    {
        return $this->hasOne(Car::class)->orderBy('created_at','DESC');
    }
}
