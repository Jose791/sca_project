<?php

namespace App\Http\Controllers;

use App\Disease;

use Illuminate\Http\Request;


use App\Http\Requests\CrearEnfermedadesRequest;

class EnfermedadController extends Controller
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
        // $enfermedades = Disease::all();
       $enfermedades = Disease::with('asylees')->get();
        // dd($enfermedades);
        return view('enfermedades.index',compact('enfermedades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('enfermedades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrearEnfermedadesRequest $request)
    {
        $enfermedade = Disease::create ($request->all());

        // $enfermedades = Disease::all();
        
        // pero despues que yo guarde un registro, quiere que me lleve a una vista principal de ese modulo...
        // seria algo como esto:

        return redirect()->route('enfermedad.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $enfermedades = Disease::find($id);

        // dd($asilados);

        return view('enfermedades.show', compact('enfermedades'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $enfermedades=Disease::find($id);

        return view('enfermedades.edit')->with (compact('enfermedades'));
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
         $enfermedades = Disease::find($id);

        $enfermedades->nombre = $request->nombre;
       

        $enfermedades->save();

        return redirect()->route('enfermedad.index');
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
        $enfermedades = \App\Disease::findOrFail($id);
        $enfermedades->delete();

        // Session::flash('info',$asilados->nombre, $asilados->apellido. ' Fue Eliminado');

         return redirect()->route('enfermedad.index');
    }
}
