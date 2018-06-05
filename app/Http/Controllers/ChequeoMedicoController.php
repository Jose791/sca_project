<?php

namespace App\Http\Controllers;

use App\Asylee;

use App\MedicalCheck;

use App\Http\Requests\CrearChequeosMedicosRequest;


use Illuminate\Http\Request;

class ChequeoMedicoController extends Controller
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
       
        $chequeosmedicos = MedicalCheck::with('asylee')
            ->get()
            ->toArray();

        // dd($chequeosmedicos);
        return view('chequeos_medicos.index',compact('chequeosmedicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
       $asilados = Asylee::all();
       return view('chequeos_medicos.create', compact('asilados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrearChequeosMedicosRequest $request)
    {
         $chequeosmedicos = MedicalCheck::create ($request->all());
        // $chequeosmedicos = MedicalCheck::all();
        
     

        return redirect()->route('chequeo_medico.index');
    }

     public function show($id)
    {
        $chequeosmedicos = MedicalCheck::find($id);

        // dd($asilados);

        return view('chequeos_medicos.show', compact('chequeosmedicos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asilados = Asylee::all();
        $chequeosmedicos=MedicalCheck::with('asylee')->where('id', $id)
            ->get()
            ->toArray();

        return view('chequeos_medicos.edit')->with (compact('chequeosmedicos', 'asilados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CrearChequeosMedicosRequest $request, $id)
    {
        $chequeosmedicos=MedicalCheck::find($id);

        $chequeosmedicos->asylee_id=$request->input('asylee_id');
        $chequeosmedicos->diagnostico=$request->input('diagnostico');
       

        $chequeosmedicos->save();

         // $asilados = Asylee::all();
        return redirect('/chequeos_registrados');
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
        $chequeosmedicos = \App\MedicalCheck::findOrFail($id);
        $chequeosmedicos->delete();

        // Session::flash('info',$chequeosmedicos->nombre, $asilados->apellido. ' Fue Eliminado');

         return redirect()->route('chequeo_medico.index');
    }
}
