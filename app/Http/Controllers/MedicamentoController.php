<?php

namespace App\Http\Controllers;

use App\Medicine;
use Illuminate\Http\Request;

use App\Http\Requests\CrearMedicamentosRequest;


class MedicamentoController extends Controller
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
        $medicamentos = Medicine::all();

        // dd($medicamentos);
        
        return view('medicamentos.index', compact('medicamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medicamentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrearMedicamentosRequest $request)
    {
        $medicamento = Medicine::create ($request->all());
        
        // pero despues que yo guarde un registro, quiere que me lleve a una vista principal de ese modulo...
        // seria algo como esto:
        // $medicamentos = Medicine::all();

        return redirect()->route('medicamento.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medicamentos = Medicine::find($id);

        // dd($asilados);

        return view('medicamentos.show', compact('medicamentos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medicamentos=Medicine::find($id);

        return view('medicamentos.edit')->with (compact('medicamentos'));
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
         $medicamentos = Medicine::find($id);

        $medicamentos->nombre = $request->nombre;
        $medicamentos->condicion = $request->condicion;
        

        $medicamentos->save();

        return redirect()->route('medicamento.index');
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
        $medicamentos = \App\Medicine::findOrFail($id);
        $medicamentos->delete();

        // Session::flash('info',$asilados->nombre, $asilados->apellido. ' Fue Eliminado');

         return redirect()->route('medicamento.index');
    }
}
