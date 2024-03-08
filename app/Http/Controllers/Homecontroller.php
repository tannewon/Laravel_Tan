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
    public function downloadImage(Request $request) {
        if (!empty($request->image)){
        $image = ($request->image);
        return response()->download($image);
        }
    }
    public function downloadDoc (request $request) {
        if (!empty($request->file)) {
        $file = trim($request->file);
        $fileName = 'tai-lieu_'.uniqid().'.pdf';
        $heard = [
            'content-type' => 'application/pdf'
            ];
            return response()->download($file, $fileName);
        }
    }
}