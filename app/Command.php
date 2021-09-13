<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Command extends Model
{
    
    // eviter errour Mass Assignment
    //protected $guarded = [‘*’];
        protected $guarded=[];

        // relaction command with user
        
        public function user()
        {
            return $this->belongsT(User::class);

        }
        public function car()
        {
            return $this->hasOne(Car::class);

        }
}
