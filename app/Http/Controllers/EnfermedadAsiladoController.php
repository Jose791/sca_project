<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Asylee;

use App\Medicine;

use App\AsyleeMedicine;

use App\Disease;

use App\Http\Requests\CrearEnfermedadesAsiladosRequest;

use Carbon\Carbon;

use Illuminate\Support\Facades\Session;

use Input;

class EnfermedadAsiladoController extends Controller
{

   public function __construct()
    {
        
        
       $this->middleware('auth');
       
        
    }


    public function index()
     {
        $asilados = Asylee::has('diseases')
            ->with('diseases')
            ->OrderBy('id','DESC')  
            ->get()
            ->toArray();

        return view('enfermedad_asilado.index',compact('asilados'));
     }

   
    public function create()
     {
        
        $diseases = Disease::all();
        $asilados = Asylee::all();
        
        return view('enfermedad_asilado.create', compact('asilados','diseases'))->with('diseases', Disease::all());
     }

    
    public function store(CrearEnfermedadesAsiladosRequest $request)
     {
         $asilados = Asylee::find($request->asylee_id);
         

         $asilados->diseases()->attach($request->disease_id);

         Session::flash('info','La Enfermedad del Anciano Fue Creada Exitosamente');


        return redirect()->route('enfermedad.index');
     }

   
    public function show($id)
    {
        //
    }

    
    public function edit($id)
     {
        
        
        $asiladosm = Asylee::find($id);

        
        return view('enfermedad_asilado.edit')->with('asiladosm', $asiladosm)
           ->with('asilados', Asylee::all())
           ->with('diseases', Disease::all());
     }

   
    public function update(CrearEnfermedadesAsiladosRequest $request, $id)
     {
        
        
        $asilados =Asylee::find($id);

        
        $asilados->diseases()->sync($request->disease_id);
       

        Session::flash('info','Enfermedad del Anciano Actualizada Exitosamente');
    

       return redirect()->route('enfermedad.index');
     }

    
    public function destroy($id)
    {
        //
    }
}
