<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Traits\Upload\UploadTraits;

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
    
        // Perform the login after registration
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            // Successfully logged in
            $user->update([
                'photoId' => $this->createUpload($request->file('photo_id')),
                'photo' => $this->createUpload($request->file('photo')),
            ]);
            return redirect()->intended('dashboard');
        } else {
            // Login failed
            return redirect()->route('login')->with('success', 'Registration successful.');
        }
    }
    
}