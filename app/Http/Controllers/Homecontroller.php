<?php

namespace App\Http\Controllers;


class Homecontroller extends Controller
{
    public function index (){
        $title = 'lap trinh web tai unicode';
        $content = 'lap trinh web tai unicode 22';
       
        return view('home', compact('title','content'));  
    }

    public function getNews (){
        return 'home';
    }
    public function getCategories (){
        return 'chuyen muc';
    }
    public function getProductDetail($id){
        return view('client/product.detail',compact('id'));
    }
}
