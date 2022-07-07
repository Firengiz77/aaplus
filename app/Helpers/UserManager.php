<?php

namespace App\Helpers;

use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;
use Exception;

class UserManager{
    public function addRole($user, $role){
        $rl = Role::all()->firstWhere('name',$role);
        if($rl){
            $user->roles()->attach($rl->id);
        }else{
            return response('This role doesn\'t exist!',404);
        }
    }
}
