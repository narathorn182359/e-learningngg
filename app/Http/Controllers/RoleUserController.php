<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class RoleUserController extends Controller
{
    public function index(){

        Role::create(['name' => 'adminpage']);
        Role::create(['name' => 'employee']);

    }
}
