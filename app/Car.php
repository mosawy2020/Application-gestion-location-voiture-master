<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    // eviter errour Mass Assignment
    //protected $guarded = [‘*’];

    protected $guarded=[];
    
    public function commands()
    {
        return $this->hasMany(Command::class)->orderBy('created_at','DESC');
    }
    public function VisiteTechnique()
    {
        return $this->hasOne(VisiteTechnique::class)->orderBy('created_at','DESC');
    }
}
