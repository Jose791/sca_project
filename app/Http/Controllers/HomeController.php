<?php

namespace App\Http\Controllers;


use App\Asylee;

use App\AsyleeDisease;

use App\AsyleeMedicine;

use App\Diet;

use App\Disease;

use App\MedicalCheck;

use App\Medicine;

use App\Visit;

use App\Visitor;

use Illuminate\Http\Request;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
        
       $this->middleware('auth');
       
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inicio');
    }
    
//     public function asilados()
//    {
//        
////        
//         return view('asilados');
//    }
    
    
     /* public function medicamentos()
    {
        
//        
         return view('medicamentos');
    }*/
    
    
//          public function enfermedades()
//    {
//        
////        
//         return view('enfermedades');
//    }
//    
//          public function chequeos_medicos()
//    {
//         $asylee=Asylee::all();
//       
//        return view('chequeos_medicos',compact('asylee'));
////        
////         return view('chequeos_medicoss');
//    }
//    
//          public function dietas()
//    {
//        
//         $asylee=Asylee::all();
//       
//        return view('dietas',compact('asylee'));
////        
//    }
//    
//          public function medicamento_asilado()
//    {
//          $asylee=Asylee::all();
//          $medicine=Medicine::all();
//       
//        return view('medicamento_asilado',compact('asylee'),compact('medicine'));
//    }
//    
//          public function visitas()
//    {
//        
//          $asylee=Asylee::all();
//          $visitor=Visitor::all();
//       
//        return view('visitas',compact('asylee'),compact('visitor'));
//    }
//    
//          public function visitantes()
//    {
//        
////        
//         return view('visitantes');
//    }
//    
}
