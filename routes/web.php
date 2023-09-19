<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TradingController;
use App\Http\Controllers\TrendingController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\ProductEnqueryController;
use App\Http\Controllers\ProjectEnquiryController;
use App\Http\Controllers\VisitorCounterController;
use App\Http\Controllers\BussinessEnquiryController;


Route::get('/',[HomeController::class,'index'])->name('/');
Route::get('/about', [HomeController::class,'about'])->name('about');
Route::get('/business' , [HomeController::class,'business'])->name('business');
Route::get('membership',[HomeController::class,'membership'])->name('membership');
Route::get('/contact',[ContactController::class,'index'])->name('contact');
Route::post('contact.save',[ContactController::class,'save'])->name('contact.save');
Route::get('/trading',[TradingController::class, 'index'])->name('trading');
Route::get('/product/{slug}',[TradingController::class, 'product'])->name('product');
Route::get('/product_details/{slug}',[TradingController::class, 'productDetails'])->name('productDetails');
Route::get('/trending',[TrendingController::class,'index'])->name('trending');
Route::get('/project/{slug}',[TrendingController::class,'project'])->name('project');
Route::get('our-team',[UserDashboardController::class,'team'])->name('our-team');
Route::get('/visitor-counter',[VisitorCounterController::class,'index'])->name('visitor_counter');


Route::get('/login',[AuthController::class,'login'])->name('login');
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('sign_in',[AuthController::class,'sign_in'])->name('sign_in');
Route::post('sign_up',[AuthController::class,'signUp'])->name('sign_up');
Route::get('forgetpassword', [AuthController::class,'forgetpassword'])->name('forgetPassword');
Route::post('/password/reset', [AuthController::class,'sendResetLinkEmail'])->name('password.reset');

Route::middleware('user')->group( function(){
Route::get('logout',[AuthController::class,'logout'])->name('logout');
Route::get('dashboard',[UserDashboardController::class,'index'])->name('dashboard');
Route::get('supply',[UserDashboardController::class,'supply'])->name('supply');
Route::get('Enqueiry/delete/{id}',[UserDashboardController::class,'delete'])->name('delete.Enqueiry');
Route::get('buy',[UserDashboardController::class,'buy'])->name('buy');
Route::get('resources',[UserDashboardController::class,'resources'])->name('resources');
Route::get('call',[UserDashboardController::class,'call'])->name('call'); 
Route::post('callback',[UserDashboardController::class,'callback'])->name('callback');
Route::get('meeting',[UserDashboardController::class,'meeting'])->name('meeting'); 
Route::post('metting/request',[UserDashboardController::class,'mettingStore'])->name('metting.request');
Route::get('delete/metting/{id}',[UserDashboardController::class,'mettingDelete'])->name('delete.metting');
Route::get('visit',[UserDashboardController::class,'visit'])->name('visit');
Route::post('/visit/save',[UserDashboardController::class,'visitstore'])->name('visit.save');
Route::get('profile',[UserDashboardController::class,'profile'])->name('profile');
Route::post('profile/update',[AuthController::class,'update'])->name('profile.update');
Route::get('investment',[UserDashboardController::class,'investment'])->name('investment');
Route::post('/submit-supplier-enquiry',[ProductEnqueryController::class,'submit'])->name('submitSupplierEnquiry');
Route::POST('/save-investment',[ProjectEnquiryController::class,'saveInvestment'])->name('save.investment');
Route::post('/business-enquiry',[BussinessEnquiryController::class,'store'])->name('business.enquiry.submit');
});



