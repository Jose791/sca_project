<?php

namespace App\Http\Controllers;

use App\Asylee;

use App\MedicalCheck;

use App\Http\Requests\CrearChequeosMedicosRequest;


use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;


class ChequeoMedicoController extends Controller
{
    

    public function __construct()
     {
        
        
       $this->middleware('auth');
       
        
     }

    public function index()
     {
       
        $chequeosmedicos = MedicalCheck::with('asylee')
            ->paginate(10);

        return view('chequeos_medicos.index',compact('chequeosmedicos'));
     }

    
    public function create()
     {  
      
       $asilados = Asylee::all();

       return view('chequeos_medicos.create', compact('asilados'));
     }

   
    public function store(CrearChequeosMedicosRequest $request)
     {
        
        $chequeosmedicos = MedicalCheck::create ($request->all());
        
        
        Session::flash('info','El Chequeo Medico Fue Creado Exitosamente');
     

        return redirect()->route('chequeo_medico.index');
     }



    public function show($id)
      {
        
        $chequeosmedicos = MedicalCheck::findOrFail($id);


        return view('chequeos_medicos.show', compact('chequeosmedicos'));
     }

    
    public function edit($id)
     {
        $cm=MedicalCheck::findOrFail($id);
        $asilados = Asylee::all();
        $chequeosmedicos=MedicalCheck::with('asylee')->where('id', $id)
            ->get()
            ->toArray();

        return view('chequeos_medicos.edit')->with (compact('chequeosmedicos', 'asilados', 'cm'));
     }

   
    public function update(CrearChequeosMedicosRequest $request, $id)
     {
        
        $chequeosmedicos=MedicalCheck::findOrFail($id);

        $chequeosmedicos->asylee_id=$request->input('asylee_id');
        $chequeosmedicos->diagnostico=$request->input('diagnostico');
       

        $chequeosmedicos->save();

        Session::flash('info','El Chequeo Medico Fue Actualizado Exitosamente');

        return redirect('/chequeos_registrados');
     }

    
    public function destroy($id)
     {

        
        $chequeosmedicos = \App\MedicalCheck::findOrFail($id);
        $chequeosmedicos->delete();

        Session::flash('info','Chequeo Medico Eliminado');

        return redirect()->route('chequeo_medico.index');
     }
}
