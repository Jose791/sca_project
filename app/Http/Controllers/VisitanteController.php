<?php

namespace App\Http\Controllers;

use App\Visitor;

use Illuminate\Http\Request;

use App\Http\Requests\CrearVisitantesRequest;

class VisitanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        
        
       $this->middleware('auth');
       
        
    }
    public function index()
    {
        // $visitantes = Visitor::all();

         $visitantes = \App\Visitor::OrderBy('id','DESC')->paginate(10);

        // dd($medicamentos);
        
        return view('visitantes.index', compact('visitantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $visitantes = Visitor::all();
       return view('visitantes.create',compact('visitantes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrearVisitantesRequest $request)
    {
        $visitantes = Visitor::create ($request->all());
        
        // pero despues que yo guarde un registro, quiere que me lleve a una vista principal de ese modulo...
        // seria algo como esto:

        return redirect()->route('visitante.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $visitantes = Visitor::find($id);

        // dd($asilados);

        return view('visitantes.show', compact('visitantes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $visitantes=Visitor::find($id);

        return view('visitantes.edit')->with (compact('visitantes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $visitantes = Visitor::find($id);

        $visitantes->nombre = $request->nombre;
        $visitantes->apellido = $request->apellido;
        $visitantes->cedula = $request->cedula;
        $visitantes->sexo = $request->sexo;
        $visitantes->direccion = $request->direccion;
    

        $visitantes->save();

        return redirect()->route('visitante.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         // dd("eliminado".$id);
        $visitantes = \App\Visitor::findOrFail($id);
        $visitantes->delete();

        // Session::flash('info',$asilados->nombre, $asilados->apellido. ' Fue Eliminado');

         return redirect()->route('visitante.index');
    }
}
