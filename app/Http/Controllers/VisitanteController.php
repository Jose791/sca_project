<?php

namespace App\Http\Controllers;

use App\Visitor;

use Illuminate\Http\Request;

use App\Http\Requests\CrearVisitantesRequest;

use Illuminate\Support\Facades\Session;

class VisitanteController extends Controller
{
    


    public function __construct()
     {
        
        
        $this->middleware('auth');
       
        
     }
    public function index()
     {
        // $visitantes = Visitor::all();

         $visitantes = \App\Visitor::OrderBy('id','DESC')->paginate(10);
 
        
         return view('visitantes.index', compact('visitantes'));
     }



  
    public function create()
     {

        $visitantes = Visitor::all();

       return view('visitantes.create',compact('visitantes'));
     }

   

    public function store(CrearVisitantesRequest $request)
     {
       
        $visitantes = Visitor::create ($request->all());
        

        Session::flash('info','Visitante Creado Exitosamente');


        return redirect()->route('visitante.index');
     }

    

    public function show($id)
    
     {
        
        $visitantes = Visitor::find($id);

       

        return view('visitantes.show', compact('visitantes'));
     }

   


    public function edit($id)
     {

        $visitantes=Visitor::find($id);

        return view('visitantes.edit')->with (compact('visitantes'));
     }

    

    public function update(CrearVisitantesRequest $request, $id)
     {
        
         $visitantes = Visitor::find($id);

        $visitantes->nombre = $request->nombre;
        $visitantes->apellido = $request->apellido;
        $visitantes->cedula = $request->cedula;
        $visitantes->sexo = $request->sexo;
        $visitantes->direccion = $request->direccion;
    

        $visitantes->save();

        Session::flash('info','Visitante Actualizado Exitosamente');


        return redirect()->route('visitante.index');
     }

    
    public function destroy($id)
     {
         

        $visitantes = \App\Visitor::findOrFail($id);

        $visitantes->delete();

        Session::flash('success', 'El Visitante Fue Eliminado');

         return redirect()->route('visitante.index');
     }
}
