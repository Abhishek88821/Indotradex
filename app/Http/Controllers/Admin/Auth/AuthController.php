<?php 
namespace App\Http\Controllers\Admin\Auth;

use PharIo\Manifest\Email;
use Illuminate\Http\Request;
use Yoeunes\Toastr\Facades\Toastr;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;

class AuthController extends Controller
{
    public function index()
    {
       return Auth::guard('admin')->check()
          ?  view('adminpanel.dashboard')
          :  view('adminpanel.auth.login');
       
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
       $loginAttempt = Auth::guard('admin')->attempt($credentials);
        return $loginAttempt
            ? redirect()->route('admin')
            : back()->withInput()->withErrors(['message' => 'Invalid credentials. Please try again.']);
    }

    public function logout()
    {    
        Auth::guard('admin')->logout();
        return redirect()->route('admin');
    }
    
}
