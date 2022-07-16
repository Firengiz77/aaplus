<?php

namespace App\Helpers;

use App\Models\Role;

class RoleManager{
    public function createRole($role){
        if(!Role::all()->firstWhere('name','==',$role)){
            Role::create([
                'name'=>$role,
            ]);
        }
    }
}
