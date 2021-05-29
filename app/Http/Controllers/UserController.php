<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function registrar(Request $request){
        return "registrar user";
    }

    public function login(Request $request){
        return "login user";
    }
}
