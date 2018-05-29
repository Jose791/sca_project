<?php

namespace App\Http\Controllers;


use App\Asylee;

use App\Medicine;

use App\AsyleeMedicine;

use App\Http\Requests\CrearMedicamentosAsiladosRequest;

use Illuminate\Http\Request;

class MedicamentoAsiladoController extends Controller
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
        // $asilados = Asylee::all();
        
        // $medicamentos = Medicine::all();
        
        $asiladosmedicamentos = AsyleeMedicine::all();

        // dd($medicamentos);
        
        return view('medicamento_asilado.index',compact('asiladosmedicamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
         $medicamentos = Medicine::all();
          $asilados = Asylee::all();
        return view('medicamento_asilado.create', compact('asilados','medicamentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrearMedicamentosAsiladosRequest $request)
    {
          

          // $medicamentos = Medicine::all();
          // $asilados = Asylee::all();
         $asiladosmedicamentos = AsyleeMedicine::create ($request->all());
        
        // pero despues que yo guarde un registro, quiere que me lleve a una vista principal de ese modulo...
        // seria algo como esto:

        return redirect()->route('medicamento_asilado.index');
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
