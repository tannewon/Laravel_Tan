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
    public function getAdd()
{
    $this->data['title'] = 'Thêm sản phẩm';
    return view('clients.add', $this->data);
}

public function postAdd(Request $request)
{
    $request->validate([
        'product_name' => 'required|min:6',
        'product_price' => 'required|integer',
    ], [
        'product_name.required' => 'Tên sản phẩm bắt buộc phải nhập',
        'product_name.min' => 'Tên sản phẩm không được nhỏ hơn 6 ký tự',
        'product_price.required' => 'Giá sản phẩm bắt buộc phải nhập',
        'product_price.integer' => 'Giá sản phẩm phải là một số nguyên',
    ]);

    // Xử lý việc thêm dữ liệu vào cơ sở dữ liệu ở đây

    // ...
}

public function putAdd(Request $request)
{
    return 'Phương thức PUT';
        dd($request);
}

//     public function downloadImage(Request $request) {
//         if (!empty($request->image)){
//         $image = ($request->image);
//         return response()->download($image);
//         }
//     }
//     public function downloadDoc (request $request) {
//         if (!empty($request->file)) {
//         $file = trim($request->file);
//         $fileName = 'tai-lieu_'.uniqid().'.pdf';
//         $heard = [
//             'content-type' => 'application/pdf'
//             ];
//             return response()->download($file, $fileName);
//         }
//     }
}