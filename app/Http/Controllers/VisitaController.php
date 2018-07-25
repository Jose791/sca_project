<?php

namespace App\Http\Controllers;

use App\Asylee;

use App\Visitor;

use App\Visit;

use App\Http\Requests\CrearVisitasRequest;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

class VisitaController extends Controller
{


    public function __construct()
     {
        
        
       $this->middleware('auth');
       
        
     }
    

    public function index()
     {
        
         $visitas = Visit::OrderBy('id', 'DESC')->with('asylee','visitor')->get()->toArray();

       
        
         return view('visitas.index', compact('visitas'));
     }


    public function create()
     {
       
        $visitantes = Visitor::all();
        $asilados = Asylee::all();
        
        return view('visitas.create',compact('visitantes','asilados'));
     }


    public function store(CrearVisitasRequest $request)
     {
        
        $visitas = Visit::create($request->all());
        

        Session::flash('info','Visita Creada Exitosamente');

        
        return redirect()->route('visita.index');
     }


    public function show($id)
     {
        
        $visitas = Visit::find($id);


        return view('visitas.show', compact('visitas'));
     }


    public function edit($id)
     {
        
        $vi=Visit::find($id);
        
        $visitantes=Visitor::with('visits')->get();
        $asilados = Asylee::all();
        $visitas=Visit::with('visitor')->get()->toArray();
        // $asilados=Visit::with('asylee')->get()->toArray();
    
       

        return view('visitas.edit')->with (compact('visitas','asilados','visitantes', 'vi'));
     }


    public function update(Request $request, $id)
     {
         
         

        $visita = Visit::find($id);

        $visita->asylee_id = $request->asylee_id;
        $visita->visitor_id = $request->visitor_id;
        $visita->fecha_reserva = $request->fecha_reserva;
        
    

        $visita->save();

        Session::flash('info','Visita Actualizada Exitosamente');

        
        return redirect()->route('visita.index');

    }


    public function destroy($id)
     {
        
        $visitas = \App\Visit::findOrFail($id);
       
        $visitas->delete();

        Session::flash('success','La Visita Fue Eliminada...');

         return redirect()->route('visita.index');
    }
    
}
