<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\plan;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\ResetPasswordOtpMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Http\Traits\Upload\UploadTraits;
use Illuminate\Support\Facades\Password;

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


    public function update(Request $request)
    {  
        $request->validate([
            'role' => 'required',
            'firstName' => 'required',
            'LastName' => 'required',
            'email' => 'required|email',
            'remark' => 'required',
            'pinCode' => 'required|integer'
        ]);
    
        $user = Auth::user();
    
        $userData = [
            'role_id' => $request->role,
            'firstName' => $request->input('firstName'),
            'LastName' => $request->input('LastName'),
            'mobile' => $request->input('mobile'),
            'email' => $request->input('email'),
            'website' => $request->input('website'),
            'address' => $request->input('address'),
            'city' => $request->input('city'),
            'pinCode' => $request->input('pinCode'),
            'remark' => $request->input('remark'),
          
        ];
    
        if ($request->hasFile('photo_id')) {
            $userData['photoId'] = $this->createUpload($request->file('photo_id'));
        }
    
        if ($request->hasFile('photo')) {
            $userData['photo'] = $this->createUpload($request->file('photo'));
        }
    
        $user->update($userData);
    
        return redirect()->back()->with('success', 'Profile updated successfully');
    }
    
    Public function forgetpassword(){
        return view('frontend/pages/forget-password');
    }
    
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);
        
        $user = User::where('email', $request->email)->first();
    
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }
    
        if (isset($request->otp) && isset($request->new_password)) {
            // This part handles password reset
            $user = User::where('email', $request->email)->where('otp', $request->otp)->first();
    
            if (!$user) {
                return response()->json(['message' => 'Invalid OTP'], 422);
            }
    
            $newPassword = $request->new_password; // Use $request->new_password instead of $request->password
            $user->update([
                'password' => Hash::make($newPassword),
                'otp' => null,
            ]);
    
            return response()->json(['message' => 'Password reset successfully']);
        } else {
            // This part sends the OTP
            $otp = Str::random(6); // Generate a 6-digit OTP
    
            $user->update(['otp' => $otp]);
    
            Mail::to($user->email)->send(new ResetPasswordOtpMail($otp));
    
            return response()->json(['message' => 'OTP sent successfully', 'status' => 'success'], 200);
        }
    }
    



    
}