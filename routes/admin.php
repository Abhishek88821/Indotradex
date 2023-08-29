<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\Trading\ProductsController;
use App\Http\Controllers\Admin\Business\BusinessController;
use App\Http\Controllers\Admin\Tranding\ProjectsController;
use App\Http\Controllers\Admin\Trading\TradingCategoryController;
use App\Http\Controllers\Admin\Tranding\TrandingCategoryController;



Route::get('/', [AuthController::class, 'index'])->name('admin');
Route::post('login', [AuthController::class, 'login'])->name('admin.login');
Route::middleware('admin')->group( function(){
    Route::get('logout', [AuthController::class, 'logout']);

   Route::get('category',[CategoryController::class,'index'])->name('admin.category');
   Route::get('category/create', [CategoryController::class, 'create'])->name("admin.category.create");
   Route::post('category/store', [CategoryController::class, 'store'])->name("admin.category.store");
   Route::get('category/edit/{id}', [CategoryController::class, 'edit'])->name("admin.category.edit");
   Route::put('category/update', [CategoryController::class, 'update'])->name("admin.category.update");
   Route::get('category/status/{id}', [CategoryController::class, 'status'])->name("admin.category.status");
   Route::get('category/destroy/{id}', [CategoryController::class, 'destroy'])->name("admin.category.destroy");

   Route::get('trading/category',[TradingCategoryController::class,'index'])->name('admin.trading.category');
   Route::get('trading/category/create', [TradingCategoryController::class, 'create'])->name("admin.trading.category.create");
   Route::post('trading/category/store', [TradingCategoryController::class, 'store'])->name("admin.trading.category.store");
   Route::get('trading/category/edit/{id}', [TradingCategoryController::class, 'edit'])->name("admin.trading.category.edit");
   Route::put('trading/category/update', [TradingCategoryController::class, 'update'])->name("admin.trading.category.update");
   Route::get('trading/category/status/{id}', [TradingCategoryController::class, 'status'])->name("admin.trading.category.status");
   Route::get('trading/category/destroy/{id}', [TradingCategoryController::class, 'destroy'])->name("admin.trading.category.destroy");

   Route::get('product/' ,[ProductsController::class,'index'])->name('admin.product');
   Route::get('product/create/' ,[ProductsController::class,'create'])->name("admin.product.create");
   Route::post('product/store/', [ProductsController::class, 'productStore'])->name("admin.product.store");
   Route::get('product/edit/{id}', [ProductsController::class, 'productEdit'])->name("admin.product.edit");
   Route::put('product/update/', [ProductsController::class, 'productUpdate'])->name("admin.product.update");
   Route::get('product/status/{id}', [ProductsController::class, 'productStatus'])->name("admin.product.status");
   Route::get('product/destroy/{id}', [ProductsController::class, 'productDestroy'])->name("admin.product.destroy");

   Route::get('tranding/category',[TrandingCategoryController::class,'index'])->name('admin.tranding.category');
   Route::get('tranding/category/create', [TrandingCategoryController::class, 'create'])->name("admin.tranding.category.create");
   Route::post('tranding/category/store', [TrandingCategoryController::class, 'store'])->name("admin.tranding.category.store");
   Route::get('tranding/category/edit/{id}', [TrandingCategoryController::class, 'edit'])->name("admin.tranding.category.edit");
   Route::put('tranding/category/update', [TrandingCategoryController::class, 'update'])->name("admin.tranding.category.update");
   Route::get('tranding/category/status/{id}', [TrandingCategoryController::class, 'status'])->name("admin.tranding.category.status");
   Route::get('tranding/category/destroy/{id}', [TrandingCategoryController::class, 'destroy'])->name("admin.tranding.category.destroy");

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

 




});
