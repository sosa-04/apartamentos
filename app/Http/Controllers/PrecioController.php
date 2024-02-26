<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\propiedad;
use App\Models\duenio;

class PrecioController extends Controller
{
    //

    public function index(){
        $propiedades = propiedad::all();

        return view('home', compact('propiedades'));
    }

    public function create(){
        return view('crear');
    }

    public function duenios(){
        $duenios = duenio::all();

        return view('duenios', compact('duenios'));
    }
}
