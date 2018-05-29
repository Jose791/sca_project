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

class RegistroController extends Controller
{
public function __construct()
    {
        
        
       $this->middleware('auth');
       
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
   
    
      public function asilados(Request $request)
    {
//        dd($request->all());
    
         Asylee::create ($request->all());
          
          
          return 'completado';
          
          
}
    
    /* public function medicamentos(Request $request)
    {
//        dd($request->all());
    
          Medicine::create ($request->all());
          
          
          return 'completado';
          
          
}*/
    
        public function enfermedades(Request $request)
    {
        
          Disease::create ($request->all());
          
          
          return 'completado';;
    }
    
       public function chequeos_medicos(Request $request)
    {
        
          
        
           
          MedicalCheck::create ($request->all());
          
          
          return 'completado';
    }
    
        public function dietas(Request $request)
    {
        
            Diet::create ($request->all());
          
          
            return 'completado';
    }
    
          public function medicamento_asilado(Request $request)
    {
        
            AsyleeMedicine::create ($request->all());
          
          
            return 'completado';
    }
    
          public function visitas(Request $request)
    {
        
             Visit::create ($request->all());
          
          
             return 'completado';
    }
    
          public function visitantes(Request $request)
    {
        
             Visitor::create ($request->all());
          
          
             return 'completado';
    }
}