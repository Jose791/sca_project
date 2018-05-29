<?php

namespace App\Http\Controllers;

use App\Asylee;

use Illuminate\Http\Request;

use App\Http\Requests\CrearAsiladosRequest;

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
        $asilados = Asylee::all();
        return view('asilados.index')->with (compact('asilados'));
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
        $asilado = Asylee::create ($request->all());
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asilados=asylee::find($id);

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
        $asilado=Asylee::find($id);
        $asilado->nombre=$request->input('nombre');
        $asilado->apellido=$request->input('apellido');
        $asilado->cedula=$request->input('cedula');
        $asilado->sexo=$request->input('sexo');
        $asilado->residencia=$request->input('residencia');
        $asilado->fecha_nac=$request->input('fecha_nac');
        $asilado->condicion_especial=$request->input('condicion_especial');
        $asilado->estado=$request->input('estado');

        $asilado->save();

         // $asilados = Asylee::all();
        return redirect('/asilados_registrados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
