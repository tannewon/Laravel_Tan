<?php

namespace App\Http\Controllers;


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

}
