<?php

namespace App\Http\Controllers;


class Homecontroller extends Controller
{
    public $data = [];
    public function index (){
        $this->data['welcom']= 'học lập trình laravel tại <b> Unicode</b>';
        $this->data['content']= '<h3> chương 1 học laravel </h3>
        <p> kiến thức 1</p>
        <p> kiến thức 2</p>
        <p> kiến thức 3</p>';


        $this->data['index']=1;
        $this->data['dataArr']=[];
        $this->data['number']=3;
        $this->data['message']='dat hang thanh cong';

        return view('home',$this->data);

    }

}
