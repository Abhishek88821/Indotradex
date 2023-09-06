<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    Public function login(){
        return view('frontend.pages.login');
    }

    Public function register(){
        return view('frontend.pages.register');
    }
}
