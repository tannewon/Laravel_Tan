<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct(){
        // return 'khoi dong dashboard';
        echo'khoi dong dashboard'

    }

    //
    public function index (){
        return '<h2>Doashboard wel</h2>';
    }
}
