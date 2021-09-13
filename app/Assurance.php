<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assurance extends Model
{
    protected $guarded=['*','id']; 

    // The attributes that should be  mutated to dates.

   /* protected $dates = [
        'seen_at',
    ];*/

   
    public function car()
    {
        return $this->hasOne(Car::class)->orderBy('created_at','DESC');
    }
}
