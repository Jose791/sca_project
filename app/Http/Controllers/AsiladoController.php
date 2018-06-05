<?php

namespace App\Http\Controllers;

use App\Asylee;

use Illuminate\Http\Request;

use App\Http\Requests\CrearAsiladosRequest;

use Illuminate\Support\Facades\Session;

class AsiladoController extends Controller
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
      

        // dd($medicamentos);
        $asilados = \App\Asylee::OrderBy('id','DESC')->paginate(10);
        


        return view('asilados.index',compact('asilados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('asilados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrearAsiladosRequest $request)
    {
        $asilados = Asylee::create ($request->all());
        // $asilados = Asylee::all();
        // pero despues que yo guarde un registro, quiere que me lleve a una vista principal de ese modulo...
        // seria algo como esto:

        return redirect()->route('asilado.index');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asilados = Asylee::find($id);

        // dd($asilados);

        return view('asilados.show', compact('asilados'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asilados=Asylee::find($id);

        return view('asilados.edit')->with (compact('asilados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CrearAsiladosRequest $request, $id)
    {
        $asilados = Asylee::find($id);

        $asilados->nombre = $request->nombre;
        $asilados->apellido = $request->apellido;
        $asilados->cedula = $request->cedula;
        $asilados->sexo = $request->sexo;
        $asilados->residencia = $request->residencia;
        $asilados->fecha_nac = $request->fecha_nac;
        $asilados->condicion_especial = $request->condicion_especial;
        $asilados->estado = $request->estado;

        $asilados->save();

        return redirect()->route('asilado.index');
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
        $asilados = \App\Asylee::findOrFail($id);
        $asilados->delete();

        Session::flash('info',$asilados->nombre, $asilados->apellido. ' Fue Eliminado');

         return redirect()->route('asilado.index');
    }
}
