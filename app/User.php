<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    public function phone(){
        return $this->hasOne('App\Phone');
    }
    public function role_user(){
        return $this->hasOne('App\Role-User');
    }
}
