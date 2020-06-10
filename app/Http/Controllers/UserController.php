<?php

namespace App\Http\Controllers;
use App\User;
use App\Role;
use App\Role_User;
use App\Phone;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function findform(){
        return view('find_user');
    }
    public function searchRole($role_id){

    }
    public function find(Request $request){
        $user_id = $request->input('user_id');
        //$phone = $request->input('phone');
        $role_name = $request->input('role_name');
        $users = User::all();
        $roles = Role::all();  

        $phone = \App\User::find($user_id)->phone;
        foreach($roles as $role){
            if($role->name == $role_name){
                $role_user = \App\Role::find($role->id)->role;
                if($phone->user_id == $role_user->user_id){
                    $user = \App\User::find($user_id);
                    echo $user;
                    
                }
            }
        }
    }
}
