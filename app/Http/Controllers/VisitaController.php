<?php

namespace App\Http\Controllers;

use App\Asylee;

use App\Visitor;

use App\Visit;

use App\Http\Requests\CrearVisitasRequest;

use Illuminate\Http\Request;

class VisitaController extends Controller
{


    public function __construct()
    {
        
        
       $this->middleware('auth');
       
        
    }
    
    public function index()
    {
        $visitas = Visit::with('asylee','visitor')->get()->toArray();
;
       // $visitas = Visit::all();
        // dd($visitas);
        
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
        // $visitas = Visit::all();
        
        return redirect()->route('visita.index');
    }

    public function show($id)
    {
        $visitas = Visit::find($id);


        return view('visitas.show', compact('visitas'));
    }

    public function edit($id)
    {
        
        $visitantes=Visitor::with('visits')->get();
        $asilados = Asylee::all();
        $visitas=Visit::with('visitor')->get()->toArray();
        // $asilados=Visit::with('asylee')->get()->toArray();
    
       

        return view('visitas.edit')->with (compact('visitas','asilados','visitantes'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        // dd("eliminado".$id);
        $visitas = \App\Visit::findOrFail($id);
        $visitas->delete();

        // Session::flash('info',$asilados->nombre, $asilados->apellido. ' Fue Eliminado');

         return redirect()->route('visita.index');
    }
}
