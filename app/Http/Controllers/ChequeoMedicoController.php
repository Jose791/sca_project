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
       
      $chequeosmedicos = MedicalCheck::all();
      
//         dd($chequeosm );
        
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
        
        // pero despues que yo guarde un registro, quiere que me lleve a una vista principal de ese modulo...
        // seria algo como esto:

        return redirect()->route('chequeo_medico.index');
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
        //
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
        //
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
