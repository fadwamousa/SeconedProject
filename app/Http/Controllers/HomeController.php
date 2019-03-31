<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;
class HomeController extends Controller
{
    
    public function index(){

    	$role = Role::find(1)->users;
    	$user = User::find(1)->roles;
    	return $role;
    	return $user;
    }
}
