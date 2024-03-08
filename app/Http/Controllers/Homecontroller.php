<?php

namespace App\Http\Controllers;
use App\Http\Controllers\HomeController;

class Homecontroller extends Controller
{
    public $data = [];
    public function index (){
        $this->data['title'] = "Dao tao lap trinh web ";
        return view('clients.home',$this->data);

    }
    public function product(){
        $this->data['title'] = "san pham";
        return view('clients.product',$this->data);
    }
  

    // public function getAdd(){
    //     $this->data['title'] = "them san pham";
    //     return view('clients.add', $this->data);
    // }
    // public function postAdd (Request $request)
    // { dd($request);
    // }
    // public function putAdd (Request $request){
    //     return ("Phương thức PUT");
    // { dd($request);
        

    }



