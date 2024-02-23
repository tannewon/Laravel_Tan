<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\categoriesController;
use App\Http\Controllers/Admin\ProductsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('categories')->group(function(){
    Route::get('/',[categoriesController::class,'index'])->name('categories.list');
    // lay chi tiet 1 chuyen muc
    Route::get('/edit/{id}',[categoriesController::class,'categories'])->name('categories.edit');
    // xu li update chuyen muc
    Route::post('/edit/{id}',[categoriesController::class,'updateCategories']);
    // hien thi form du lieu
    Route::get('/add',[categoriesController::class,'addCategories'])->name('categories.add');
    // handler
    Route::post('/add',[categoriesController::class,'handleAddCategories']);
    // xoa
    Route::delete('/add/{id}',[categoriesController::class,'deleteCategories'])->name('categories.delete');
    

    
});
Route::prefix('Admin')->group(function(){
        Route::resource('products',PhotoController::class);
});

