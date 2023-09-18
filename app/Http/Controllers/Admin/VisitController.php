<?php

namespace App\Http\Controllers\Admin;

use App\Models\Visit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VisitController extends Controller
{
    Public function index(){
        $visit = Visit::latest()->get();
        return view('adminpanel/pages/enquiry/visit/index' , compact('visit'));
    }
}
