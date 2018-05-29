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
        $visitas = Visit::all();
        
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
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
