<?php

namespace App\Http\Controllers;

use App\Asylee;

use App\Diet;

use App\Http\Requests\CrearDietasRequest;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

class DietaController extends Controller
{
    
     public function __construct()
     {
        
        
       $this->middleware('auth');
       
        
     }

    public function index()
     {

          $dietas = Diet::paginate(10);

        return view('dietas.index',compact('dietas'));
     }

  
    public function create()
     {
        $asilados = Asylee::all();

        return view('dietas.create')->with (compact('asilados'));
     }

    
    public function store(CrearDietasRequest $request)
     {
        
        $dieta = Diet::create ($request->all());
   
        Session::flash('info','La Dieta Fue Creada Exitosamente');
      

        return redirect()->route('dieta.index');
     }


    public function show($id)
     {
       
        $dietas = Diet::findOrFail($id);


        return view('dietas.show', compact('dietas'));
     }

    

    public function edit($id)
     {
       
       $asilados = Asylee::all();
       $dietas=Diet::findOrFail($id);

       return view('dietas.edit')->with (compact('dietas','asilados'));

     }

   
    public function update(CrearDietasRequest $request, $id)
     {
         
        $dietas = Diet::findOrFail($id);

        $dietas->asylee_id = $request->asylee_id;
        $dietas->descripcion = $request->descripcion;
        $dietas->estado = $request->estado;
        $dietas->hora_dieta = $request->hora_dieta;
      

        $dietas->save();

        Session::flash('info','La Dieta Fue Actualizada Exitosamente');


        return redirect()->route('dieta.index');
     }

   
    public function destroy($id)
     {

        
        $dietas = \App\Diet::findOrFail($id);
        $dietas->delete();

        Session::flash('info','La Dieta Fue Eliminada');

         return redirect()->route('dieta.index');
     }
}
