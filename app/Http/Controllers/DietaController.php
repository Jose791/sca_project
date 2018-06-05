<?php

namespace App\Http\Controllers;

use App\Asylee;

use App\Diet;

use App\Http\Requests\CrearDietasRequest;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

class DietaController extends Controller
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
//         $asilados = Asylee::all();
          $dietas = Diet::all();
//        $visitas = Visit::all();
//         dd($dietas);
        
        return view('dietas.index',compact('dietas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $asilados = Asylee::all();
        
//        dd($dietas);
        return view('dietas.create')->with (compact('asilados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrearDietasRequest $request)
    {
         $dieta = Diet::create ($request->all());
         // $dietas = Diet::all();
        // pero despues que yo guarde un registro, quiere que me lleve a una vista principal de ese modulo...
        // seria algo como esto:

        return redirect()->route('dieta.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
      public function show($id)
    {
        $dietas = Diet::find($id);

        // dd($asilados);

        return view('dietas.show', compact('dietas'));
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
       $dietas=Diet::find($id);

        return view('dietas.edit')->with (compact('dietas','asilados'));

        // $asilados = Asylee::all();
        // $dietas=Diet::with('asylee')->where('id', $id)
        //     ->get()
        //     ->toArray();

        // return view('dietas.edit')->with (compact('dietas', 'asilados'));   

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
          $dietas = Diet::find($id);

        $dietas->asylee_id = $request->asylee_id;
        $dietas->descripcion = $request->descripcion;
        $dietas->estado = $request->estado;
        $dietas->hora_dieta = $request->hora_dieta;
      

        $dietas->save();

        return redirect()->route('dieta.index');
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
        $dietas = \App\Diet::findOrFail($id);
        $dietas->delete();

        // Session::flash('info',$dietas->nombre, $asilados->apellido. ' Fue Eliminado');

         return redirect()->route('dieta.index');
    }
}
