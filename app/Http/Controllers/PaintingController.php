<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaintingController extends Controller
{
    public function index(){
        return view('handyman.painting');
    }
}
