<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PromocionesController extends Controller
{
    public function promociones(){
        return view('promociones');
    }
}
