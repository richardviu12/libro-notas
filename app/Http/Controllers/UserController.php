<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\User;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('usuarios',['users' =>$users]);
    }

}