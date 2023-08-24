<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TrandingController;
use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\SubCategoryController;



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

   Route::get('subCategory', [SubCategoryController::class, 'index'])->name("admin.subCategory");
   Route::get('subCategory/create', [SubCategoryController::class, 'create'])->name("admin.subCategory.create");
   Route::post('subCategory/store', [SubCategoryController::class, 'store'])->name("admin.subCategory.store");
   Route::get('subCategory/edit/{id}', [SubCategoryController::class, 'edit'])->name("admin.subCategory.edit");
   Route::put('subCategory/update', [SubCategoryController::class, 'update'])->name("admin.subCategory.update");
   Route::get('subCategory/status/{id}', [SubCategoryController::class, 'status'])->name("admin.subCategory.status");
   Route::get('subCategory/destroy/{id}', [SubCategoryController::class, 'destroy'])->name("admin.subCategory.destroy");

    Route::get('product' ,[TrandingController::class,'index'])->name('admin.product');
    Route::get('product/create' ,[TrandingController::class,'create'])->name("admin.product.create");
    Route::post('product/store', [TrandingController::class, 'productStore'])->name("admin.product.store");
    Route::get('product/edit/{id}', [TrandingController::class, 'productEdit'])->name("admin.product.edit");
    Route::put('product/update', [TrandingController::class, 'productUpdate'])->name("admin.product.update");
    Route::get('product/status/{id}', [TrandingController::class, 'productStatus'])->name("admin.product.status");
    Route::get('product/destroy/{id}', [TrandingController::class, 'productDestroy'])->name("admin.product.destroy");

       
 

});
