<?php

namespace App\Http\Controllers;

use App\Medicine;
use Illuminate\Http\Request;

use App\Http\Requests\CrearMedicamentosRequest;

use Illuminate\Support\Facades\Session;


class MedicamentoController extends Controller
{
    

    public function __construct()
     {
        
        
       $this->middleware('auth');
       
        
     }

    public function index()
     {
       
        $medicamentos = Medicine::all();

       
        
        return view('medicamentos.index', compact('medicamentos'));
     }

   
    public function create()
     {
       
        return view('medicamentos.create');
     }

    
    public function store(CrearMedicamentosRequest $request)
     {
        
        $medicamento = Medicine::create ($request->all());
        
        
        Session::flash('info','Medicamento Creado Exitosamente');


        return redirect()->route('medicamento.index');
     }

   
    public function show($id)
     {
        
        $medicamentos = Medicine::find($id);

       

        return view('medicamentos.show', compact('medicamentos'));
     }

   
    public function edit($id)
     {
        
        $medicamentos=Medicine::find($id);

        return view('medicamentos.edit')->with (compact('medicamentos'));
     }

   
    public function update(Request $request, $id)
     {
        
         $medicamentos = Medicine::find($id);

         $medicamentos->medicamento = $request->medicamento;
         $medicamentos->condicion = $request->condicion;
        

         $medicamentos->save();

         Session::flash('info','Medicamento Actualizado Exitosamente');


        return redirect()->route('medicamento.index');
     }

   
    public function destroy($id)
     {
         
        $medicamentos = \App\Medicine::findOrFail($id);
        $medicamentos->delete();

        Session::flash('success','El Registro Fue Eliminado');

         return redirect()->route('medicamento.index');
    }
}
