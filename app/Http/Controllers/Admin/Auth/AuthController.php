<?php 
namespace App\Http\Controllers\Admin\Auth;

use App\Models\Product;
use App\Models\project;
use App\Models\AdminUser;
use PharIo\Manifest\Email;
use Illuminate\Http\Request;
use App\Models\ProjectEnquiry;
use App\Models\ProductsEnquiry;
use App\Models\BussinessEnquiry;
use Yoeunes\Toastr\Facades\Toastr;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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


    Public function profile(){
        return view('adminpanel.profile');
    }
    

    // app/Http/Controllers/AdminController.php
    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:6',
        ]);
    
        $user = Auth::guard('admin')->user();
    
        if (Hash::check($request->current_password, $user->password)) {
            $user->update([
                'password' => Hash::make($request->new_password),
            ]);
    
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false, 'message' => 'The current password is incorrect.'], 422);
        }
    }
    


    public function createSubAdmin(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:admin_users',
            'password' => 'required|min:6',
        ]);

    
        $subadmin = new AdminUser([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 2, //  2 represents SubAdmin role
        ]);

        $subadmin->save();

        return response()->json(['success' => true]);
    }

}
