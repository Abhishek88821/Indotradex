<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TrandingController;
use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\TrandingCategoryController;


Route::get('/', [AuthController::class, 'index'])->name('admin');
Route::post('login', [AuthController::class, 'login'])->name('admin.login');
Route::middleware('admin')->group( function(){
    Route::get('logout', [AuthController::class, 'logout']);

    Route::group(['prefix' => 'tranding'] , function(){
        Route::get('/product' ,[TrandingController::class,'index'])->name('admin.tranding.product');
        Route::get('product/create' ,[TrandingController::class,'create'])->name("admin.tranding.product.create");
        Route::post('product/store', [TrandingController::class, 'productStore'])->name("admin.tranding.product.store");
        Route::get('product/edit/{id}', [TrandingController::class, 'productEdit'])->name("admin.tranding.product.edit");
        Route::put('product/update', [TrandingController::class, 'productUpdate'])->name("admin.tranding.product.update");
        Route::get('product/status/{id}', [TrandingController::class, 'productStatus'])->name("admin.tranding.product.status");
        Route::get('product/destroy/{id}', [TrandingController::class, 'productDestroy'])->name("admin.tranding.product.destroy");

        Route::get('/category', [TrandingCategoryController::class, 'index'])->name("admin.tranding.category");
        Route::get('category/create', [TrandingCategoryController::class, 'create'])->name("admin.tranding.category.create");
        Route::post('category/store', [TrandingCategoryController::class, 'store'])->name("admin.tranding.category.store");
        Route::get('category/edit/{id}', [TrandingCategoryController::class, 'edit'])->name("admin.tranding.category.edit");
        Route::put('category/update', [TrandingCategoryController::class, 'update'])->name("admin.tranding.category.update");
        Route::get('category/status/{id}', [TrandingCategoryController::class, 'status'])->name("admin.tranding.category.status");
        Route::get('category/destroy/{id}', [TrandingCategoryController::class, 'destroy'])->name("admin.tranding.category.destroy");
    });

});
