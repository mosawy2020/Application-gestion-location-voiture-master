<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agence extends Model
{
    protected $guarded=[];
    
   // public $timestamps = false;
   /* public function setUpdatedAt($value)
    {
        return $this;
    }

    /*public function user()
    {
        return $this->hasMany(User::class);

    }
    public function commands()
    {
        return $this->hasMany(Command::class)->orderBy('created_at','DESC');
    }
    public function car()
    {
        return $this->hasMany(Car::class);

    }*/
}
