<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index (){
        return 'home';
    }
    public function getNews (){
        return 'home';
    }
    public function getCategories (){
        return 'chuyen muc';
    }
}
