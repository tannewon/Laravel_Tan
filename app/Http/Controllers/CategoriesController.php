<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function _construct(){

    }
    // hien thi danh sach chuyen muc
    public function index(Request $request){
        // return view('clients/categories/list');


    }
    // lay ra mot chuyen muc
    public function Categories($id){
        return view('clients/categories/edit');
    }
    // sua mot chuyen muc post
    public function updateCategories($id){
        return 'form them chuyen muc';
    }

    // // show form them du lieu
    // public function showCategories($id){
        
    // }
    // // them du lieu vao chuyen  muc /get
    public function addCategories(){
        return view('clients/categories/add');;
    }
    public function handleAddCategories(){
        // return 'xu li chuyen muc';
        if($request->method('POST')){
            echo'phuong thuc';
        }
    }
    // xoa du lieu
    public function deleteCategories($id){
        return 'xoa chuyen muc';
        
    }
}
