<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
  Public function index(){
     return view('frontend.pages.dashboard');
  }


  Public function supply(){
    return view('frontend.pages.supply');
  }

  Public function buy(){
    return view('frontend.pages.buy');
  }

  Public function resources(){
    return view('frontend.pages.resources');
  }

  public function call(){
    return view('frontend.pages.call');
  }

  Public function meeting(){
    return view('frontend.pages.meeting');
  }
}
