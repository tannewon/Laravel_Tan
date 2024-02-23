<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

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

Route::get('/', function () {
    $html='<h1>Học lap trinh tai unicode</h1>';
    return $html;
});

// Route::get('unicode', function () {
//     return view ('form');
// });
// Route::post('unicode', function () {
//     $html='<h1>Phuong thuc post cua path /unicode</h1>';
//     return $html;
// });
// Route::put('unicode', function () {
//     $html='<h1>Phuong thuc put cua path /unicode</h1>';
//     return $html;
// });
// Route::delete('unicode', function () {
//     $html='<h1>Phuong thuc delete cua path /unicode</h1>';
//     return $html;
// });
// Route::patch('unicode', function () {
//     $html='<h1>Phuong thuc patch cua path /unicode</h1>';
//     return $html;
// });
// Route::match(['get','post'],'unicode', function () {
//     return $_SERVER['REQUEST_METHOD'];
// });
// // route::any('unicode',function(){
// //     // return $_SERVER['REQUEST_METHOD'];
// //     return $request->method();
// // });
// route::get ('show-form',function(){
//     return view ('form');
// });
// route::redirec('unicode','show-form');
// route::view('show-fform','form');
route::get('/','App\Http\Controllers\HomeController@index')->name('home');

route::get('/tin-tuc','HomeController@getNews')->name('news');

route::get('/chuyenmujc',[HomeController:: class,'getCategories'])->name('news');


route::prefix('admin')->group(function(){
    Route::get('tin-tuc/{id?}/{}slug?', function ($id=null, $slug=null) {
        $content = 'phuong thuc get cua path/ unicode vois tham so';
        $content .='id='.$id.'<br/>';
        $content .='slug='.$slug;
        return $content ;
    })->where('id','\d+')->where('slug','.+')->name('admin.tintuc');

    route::get ('show-form',function(){
        return view ('form');
    })->name('admin.show-form');

    route::prefix('product')-> middleware('CheckPermission')->group(function(){
        Route::get('/', function () {
            return 'danh sach san pham';
        });
        route::get ('add',function(){
            return 'them san pham';
        });
        route::get ('edit',function(){
            return 'sua san pham';
        });
        route::get ('delete',function(){
            return 'xoa san pham';
        });
    });
});

