<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CallController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ProductEnquiries;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\ProjectEnquiryController;
use App\Http\Controllers\Admin\BusinessEnquiryController;
use App\Http\Controllers\Admin\Trading\ProductsController;
use App\Http\Controllers\Admin\Business\BusinessController;
use App\Http\Controllers\Admin\Tranding\ProjectsController;
use App\Http\Controllers\Admin\Trading\TradingCategoryController;
use App\Http\Controllers\Admin\Tranding\TrandingCategoryController;
use App\Http\Controllers\Admin\Trading\TrandingSubcategoryController;



Route::get('/', [AuthController::class, 'index'])->name('admin');
Route::post('login', [AuthController::class, 'login'])->name('admin.login');
Route::middleware('admin')->group( function(){
    Route::get('logout', [AuthController::class, 'logout']);

    Route::get('product/enquiries',[ProductEnquiries::class, 'index'])->name('admin.product.enquiries');
    Route::post('product/enquiries/data',[ProductEnquiries::class, 'modeldata'])->name('admin.product.enquiries.data');
    Route::post('product/enquiries/status',[ProductEnquiries::class, 'updateStatus'])->name('admin.product.enquiries.status');

    Route::get('project/enquiries',[ProjectEnquiryController::class,'index'])->name('admin.project.enquiries');
    Route::post('project/enquiries/data',[ProjectEnquiryController::class, 'modeldata'])->name('admin.project.enquiries.data');
    Route::post('project/enquiries/status',[ProjectEnquiryController::class, 'updateStatus'])->name('admin.project.enquiries.status');
    
    Route::get('project/business',[BusinessEnquiryController::class,'index'])->name('admin.business.enquiries');
    Route::post('project/business/data',[BusinessEnquiryController::class, 'modeldata'])->name('admin.business.enquiries.data');
    Route::post('project/business/status',[BusinessEnquiryController::class, 'updateStatus'])->name('admin.business.enquiries.status');
    
    Route::get('project/call',[CallController::class,'index'])->name('admin.call.enquiries');
    Route::post('project/call/data',[CallController::class, 'modeldata'])->name('admin.call.enquiries.data');
    Route::post('project/call/status',[CallController::class, 'updateStatus'])->name('admin.call.enquiries.status');
    
   Route::get('category',[CategoryController::class,'index'])->name('admin.category');
   Route::get('category/create', [CategoryController::class, 'create'])->name("admin.category.create");
   Route::post('category/store', [CategoryController::class, 'store'])->name("admin.category.store");
   Route::get('category/edit/{id}', [CategoryController::class, 'edit'])->name("admin.category.edit");
   Route::put('category/update', [CategoryController::class, 'update'])->name("admin.category.update");
   Route::get('category/status/{id}', [CategoryController::class, 'status'])->name("admin.category.status");
   Route::get('category/destroy/{id}', [CategoryController::class, 'destroy'])->name("admin.category.destroy");

   Route::get('trading/category/create/{id?}',[TradingCategoryController::class, 'create'])->name("admin.trading.category.create");

   Route::get('trading/category/{id?}', [TradingCategoryController::class, 'index'])->name('admin.trading.category');

   Route::post('trading/category/store', [TradingCategoryController::class, 'store'])->name("admin.trading.category.store");
   Route::get('trading/category/edit/{id}', [TradingCategoryController::class, 'edit'])->name("admin.trading.category.edit");
   Route::put('trading/category/update', [TradingCategoryController::class, 'update'])->name("admin.trading.category.update");
   Route::get('trading/category/status/{id}', [TradingCategoryController::class, 'status'])->name("admin.trading.category.status");
   Route::get('trading/category/destroy/{id}', [TradingCategoryController::class, 'destroy'])->name("admin.trading.category.destroy");

   Route::get('trading/subcategory',[TrandingSubcategoryController::class,'index'])->name('admin.trading.subcategory');
   Route::get('trading/subcategory/create', [TrandingSubcategoryController::class, 'create'])->name("admin.trading.subcategory.create");
   Route::post('trading/subcategory/store', [TrandingSubcategoryController::class, 'store'])->name("admin.trading.subcategory.store");
   Route::get('trading/subcategory/edit/{id}', [TrandingSubcategoryController::class, 'edit'])->name("admin.trading.subcategory.edit");
   Route::put('trading/subcategory/update', [TrandingSubcategoryController::class, 'update'])->name("admin.trading.subcategory.update");
   Route::get('trading/subcategory/status/{id}', [TrandingSubcategoryController::class, 'status'])->name("admin.trading.subcategory.status");
   Route::get('trading/subcategory/destroy/{id}', [TrandingSubcategoryController::class, 'destroy'])->name("admin.trading.subcategory.destroy");

   Route::get('product/' ,[ProductsController::class,'index'])->name('admin.product');
   Route::get('product/create/' ,[ProductsController::class,'create'])->name("admin.product.create");
   Route::post('product/store/', [ProductsController::class, 'productStore'])->name("admin.product.store");
   Route::get('product/edit/{id}', [ProductsController::class, 'productEdit'])->name("admin.product.edit");
   Route::put('product/update/', [ProductsController::class, 'productUpdate'])->name("admin.product.update");
   Route::get('product/status/{id}', [ProductsController::class, 'productStatus'])->name("admin.product.status");
   Route::get('product/destroy/{id}', [ProductsController::class, 'productDestroy'])->name("admin.product.destroy");

   Route::get('tranding/category',[TrandingCategoryController::class,'index'])->name('admin.tranding.category');
   Route::post('tranding/category/store', [TrandingCategoryController::class, 'store'])->name("admin.tranding.category.store");
   Route::get('tranding/category/edit/{id}', [TrandingCategoryController::class, 'edit'])->name("admin.tranding.category.edit");
   Route::put('tranding/category/update', [TrandingCategoryController::class, 'update'])->name("admin.tranding.category.update");
   Route::get('tranding/category/status/{id}', [TrandingCategoryController::class, 'status'])->name("admin.tranding.category.status");
   Route::DELETE('tranding/category/destroy/{id}', [TrandingCategoryController::class, 'destroy'])->name("admin.tranding.category.destroy");

   Route::get('project/' ,[ProjectsController::class,'index'])->name('admin.project');
   Route::get('project/create/' ,[ProjectsController::class,'create'])->name("admin.project.create");
   Route::post('project/store/', [ProjectsController::class, 'store'])->name("admin.project.store");
   Route::get('project/edit/{id}', [ProjectsController::class, 'edit'])->name("admin.project.edit");
   Route::put('project/update/', [ProjectsController::class, 'update'])->name("admin.project.update");
   Route::get('project/status/{id}', [ProjectsController::class, 'status'])->name("admin.project.status");
   Route::get('project/destroy/{id}', [ProjectsController::class, 'destroy'])->name("admin.project.destroy");

   Route::get('business',[BusinessController::class,'index'])->name('admin.business');
   Route::get('business/create', [BusinessController::class, 'create'])->name("admin.business.create");
   Route::post('business/store', [BusinessController::class, 'store'])->name("admin.business.store");
   Route::get('business/edit/{id}', [BusinessController::class, 'edit'])->name("admin.business.edit");
   Route::put('business/update', [BusinessController::class, 'update'])->name("admin.business.update");
   Route::get('business/status/{id}', [BusinessController::class, 'status'])->name("admin.business.status");
   Route::get('business/destroy/{id}', [BusinessController::class, 'destroy'])->name("admin.business.destroy");

   Route::resource('slider', SliderController::class);
   Route::resource('about', AboutController::class);

});
