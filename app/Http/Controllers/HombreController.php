<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HombreController extends Controller
{
    public function hombre(){
        return view('hombre');
    }
}
