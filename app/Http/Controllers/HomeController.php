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

        $asilados = Asylee::find(1);

        // dd($enfermedades);

        return view('inicio',compact('asilados'));
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


public function chartjs()
{
    // $viewer = View::select(DB::raw("SUM(numberofview) as count"))
    //     ->orderBy("created_at")
    //     ->groupBy(DB::raw("year(created_at)"))
    //     ->get()->toArray();
    // $viewer = array_column($viewer, 'count');
    
    // $click = Click::select(DB::raw("SUM(numberofclick) as count"))
    //     ->orderBy("created_at")
    //     ->groupBy(DB::raw("year(created_at)"))
    //     ->get()->toArray();
    // $click = array_column($click, 'count');
    

    return view('reportes.chartjs');
            // ->with('viewer',json_encode($viewer,JSON_NUMERIC_CHECK))
            // ->with('click',json_encode($click,JSON_NUMERIC_CHECK));
}

}
