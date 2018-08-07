<?php

namespace App\Http\Controllers;

use App\Disease;

use Illuminate\Http\Request;


use App\Http\Requests\CrearEnfermedadesRequest;

use Illuminate\Support\Facades\Session;

class EnfermedadController extends Controller
{
   

    public function __construct()
     {
        
        
       $this->middleware('auth');
       
        
     }
    
    public function index()
     {

        $enfermedades = \App\Disease::OrderBy('id','DESC')->paginate(5);
        

        return view('enfermedades.index',compact('enfermedades'));
     }

   
    public function create()
     {
       
        return view('enfermedades.create');
     }

   

    public function store(CrearEnfermedadesRequest $request)
     {

        $enfermedade = Disease::create ($request->all());

       
        Session::flash('info','Enfermedad Creada Exitosamente');


        return redirect()->route('enfermedad.index');
     }

  
    public function show($id)
     {
        
        $enfermedades = Disease::findOrFail($id);

      
         return view('enfermedades.show', compact('enfermedades'));
     }

   
    public function edit($id)
     {
       
        $enfermedades=Disease::findOrFail($id);

        return view('enfermedades.edit')->with (compact('enfermedades'));
     }

   
    public function update(CrearEnfermedadesRequest $request, $id)
     {
        
        $enfermedades = Disease::findOrFail($id);

        $enfermedades->enfermedad = $request->enfermedad;
        $enfermedades->descripcion = $request->descripcion;
       

        $enfermedades->save();

        Session::flash('info','Enfermedad Actualizada Exitosamente');


        return redirect()->route('enfermedad.index');
     }

    
    public function destroy($id)
     {
        
        $enfermedades = \App\Disease::findOrFail($id);
        $enfermedades->delete();

        Session::flash('info','El Registro Fue Eliminado');

        return redirect()->route('enfermedad.index');
     }
}
