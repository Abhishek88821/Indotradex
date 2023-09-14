<?php

namespace App\Http\Controllers;

use App\Models\plan;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Traits\Upload\UploadTraits;
use Cron\MonthField;

class AuthController extends Controller
{  use UploadTraits;

    Public function login(){
        return view('frontend.pages.login');
    }

    Public function register(){
        $role = Role::active()->get();
        return view('frontend.pages.register' , compact('role'));
    }

    public function sign_in(Request $request)
    {
     
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
          
            return redirect()->intended('dashboard');
        } else {
            return back()->withInput()->withErrors(['email' => 'These credentials do not match our records.']);
        }
    }

    public function signUp(Request $request)
    {
        $request->validate([
            'role' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:20',
            'confirmed' => 'required|same:password',
            'photo_id' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'remark' => 'required',
        ]);
    
        $user = new User([
            'role_id' => $request->role,
            'firstName' => $request->input('first_name'),
            'LastName' => $request->input('last_name'),
            'mobile' => $request->input('mobile'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'website' => $request->input('website'),
            'address' => $request->input('address'),
            'city'    => $request->input('city'),
            'pinCode'  => $request->input('pincode'),
            'remark' => $request->input('remark'),
            'status' => 1,
        ]);

        $user->save(); 

        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
           
            $user->update([
                'photoId' => $this->createUpload($request->file('photo_id')),
                'photo' => $this->createUpload($request->file('photo')),
            ]);
            $this->Plan();
            return redirect()->intended('dashboard');
        } else {
            return redirect()->route('login')->with('success', 'Registration successful.');
        }
    }

    Public function plan(){

        Plan::create([
            'user_id' => Auth::user()->id,
            'start_date' => Carbon::now()->format('Y-m-d'),
            'end_date' => Carbon::now()->addMonths(3)->format('Y-m-d'), 
            'type' => 1,
        ]);
        
    }


    Public function logout(){
        Auth::logout();
        return redirect('/');
    }
    
}