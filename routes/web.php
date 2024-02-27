<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\categoriesController;
use App\Http\Controllers\admin\ProductsController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\HomeController;


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
Route::get('/',[HomeController::class,'index'])->name ('home');


Route::middleware('Auth.admin')->prefix('categories')->group(function(){
    Route::get('',[categoriesController::class,'index'])->name('categories.list');
    // lay chi tiet 1 chuyen muc
    Route::get('/edit/{id}',[categoriesController::class,'categories'])->name('categories.edit');
    // xu li update chuyen muc
    Route::post('/edit/{id}',[categoriesController::class,'updateCategories']);
    // hien thi form du lieu
    Route::get('/add',[categoriesController::class,'addCategories'])->name('categories.add');
    // handler
    Route::post('/add',[categoriesController::class,'handleAddCategories']);
    // xoa
   
    Route::post('/upload',[categoriesController::class,'handlerFile'])->name('categories.upload');
    Route::post('/upload',[categoriesController::class,'handlerFile'])->name('categories.upload');
    // Route::delete('/delete/{id}',[categoriesController::class,'deleteCategories'])->name('categories.delete');
    

    
});
// Route::get('san-pham/{id}',HomeController::class,'getProductDetail');
// Route::middleware('Auth.admin')->group(function(){
//     Route::get('/', [DashboardController::class,'index']);

    Route::resource('products', ProductsController::class)->middleware('Auth.admin.product');
// });


