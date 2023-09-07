<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TradingController;
use App\Http\Controllers\TrendingController;

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
Route::get('/about', [HomeController::class,'about'])->name('about');
Route::get('/business' , [HomeController::class,'business'])->name('business');
Route::get('membership',[HomeController::class,'membership'])->name('membership');
Route::get('/contact', function () {
    return view('frontend.pages.contact');
})->name('contact');

Route::get('/login',[AuthController::class,'login'])->name('login');
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::get('/trading',[TradingController::class, 'index'])->name('trading');
Route::get('/product/{slug}',[TradingController::class, 'product'])->name('product');
Route::get('product_details/{slug}',[TradingController::class, 'productDetails'])->name('productDetails');

Route::get('/trending',[TrendingController::class,'index'])->name('trending');
Route::get('/project/{slug}',[TrendingController::class,'project'])->name('project');

