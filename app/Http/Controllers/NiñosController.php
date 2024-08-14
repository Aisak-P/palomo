<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NiñosController extends Controller
{
    public function niños(){
        return view('niños');
    }
}
