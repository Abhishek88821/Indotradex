<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[HomeController::class,'index'])->name('/');

Route::get('/about', function () {
    return view('frontend.pages.about');
});
Route::get('/business', function () {
    return view('frontend.pages.business');
});
Route::get('/contact', function () {
    return view('frontend.pages.contact');
});
Route::get('/membership', function () {
    return view('frontend.pages.membership');
});

Route::get('/out_team', function () {
    return view('frontend.pages.out_team');
});

Route::get('/product', function () {
    return view('frontend.pages.product');
});

Route::get('/productdetails', function () {
    return view('frontend.pages.productdetails');
});

Route::get('/productdetails', function () {
    return view('frontend.pages.productdetails');
});
Route::get('/tranding', function () {
    return view('frontend.pages.tranding');
});

Route::get('/tranding1', function () {
    return view('frontend.pages.tranding1');
});


Route::get('/tranding_details', function () {
    return view('frontend.pages.tranding_details');
});

