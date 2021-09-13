<?php

namespace App;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use App\User;
class User extends Model implements AuthenticatableContract 
{

    use Authenticatable;
    // problem ORM
    protected $guarded = []; 
    
    const UPDATED_AT = false;

    public function isAdmin()
    {
        return $this->admin ? true :false;
    }
}
