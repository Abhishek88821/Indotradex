<?php 
namespace App\Http\Controllers\Admin\Auth;

use App\Models\Product;
use App\Models\project;
use PharIo\Manifest\Email;
use Illuminate\Http\Request;
use App\Models\ProjectEnquiry;
use App\Models\ProductsEnquiry;
use App\Models\BussinessEnquiry;
use Yoeunes\Toastr\Facades\Toastr;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;

class AuthController extends Controller
{
    public function index()
    {
        if( Auth::guard('admin')->check()){

            $Product  = Product::count();
            $Project = project::count();
            $ProductsEnquiry  = ProductsEnquiry::count();
            $ProjectEnquiry = ProjectEnquiry::count();
            $BussinessEnquiry = BussinessEnquiry::count();

          return  view('adminpanel.dashboard' , compact('ProjectEnquiry', 'BussinessEnquiry','Project','Product','ProductsEnquiry'));
        }
         return  view('adminpanel.auth.login');
       
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
