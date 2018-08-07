<?php

namespace App\Http\Controllers;

use App\Asylee;
use App\Medicine;
use App\Disease;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $asilados = Asylee::count();
        $medicinas = Medicine::count();
        $enfermedades = Disease::count();

        return view('inicio', compact('asilados', 'medicinas', 'enfermedades'));
    }
}