<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    Public function index(){
        $contact = Contact::latest()->get();
        return view('adminpanel.pages.contact.index' , compact('contact'));
    }
}
