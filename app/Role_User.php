<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role_User extends Model
{
    protected $table = 'role_users';
    public function role(){
        return $this->belongsTo('App\Role_User');
    }
    public function user(){
        return $this->belongsTo('App\Role_User');
    }
}
