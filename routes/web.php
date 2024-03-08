<?php

use Illuminate\Support\Facades\Route;


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
Route::get('/',[HomeController::class,'index']);
Route::get('san pham',[HomeController::class,'product']);

// Route::get('demo-response', function () {
//     // return view('clients.demo-test');
//     $response = response()
//     ->view('clients.demo-test',
//     [ 'title' => 'Học HTTP Response' ],
//     201)
//     ->header('Content-Type', 'application/json')
//     ->header('API-Key', '123456');
//     return $response    ;
//     });
    Route::get('demo-response', function () {
    return view('clients.demo-test');
    })->name('demo-response');
    
    Route::post('demo-response', function (Request $request) { 
    if (!empty($request->username)){
    return back()->withInput()->with('mess', 'Xác thực thành công');
    }
    return redirect(route('demo-response'))->with('mess', 'Xác thực khong thành công');

    
    
    });

    Route::get('download-image', [HomeController::class, 'downloadImage'])->name
    ('download-image');
    Route::get('download-doc', [HomeController::class, 'downloadDoc'])->name
    ('download-Doc');
