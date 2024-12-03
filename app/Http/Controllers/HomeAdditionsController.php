<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeAdditionsController extends Controller
{
    public function index(){
        return view('remodeling.home-additions');
    }
}
