<?php

namespace App\Http\Controllers;

use App\Asylee;

use App\Disease;

use App\Medicine;

use Illuminate\Http\Request;

use App\Http\Requests\CrearAsiladosRequest;

use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\DB;

class AsiladoController extends Controller
{
   

    public function __construct()
     {
        
        
       $this->middleware('auth');
       
        
     }

    public function index()
     {
       
      
        $contar=Asylee::all()->count();

        $asilados = \App\Asylee::OrderBy('id','DESC')->paginate(5);

        
        return view('asilados.index',compact('asilados','contar'));
   

      }

    
    public function create()
     {



        return view('asilados.create')->with('diseases', Disease::all())->with('medicines', Medicine::all());
     }

    

    public function store(CrearAsiladosRequest $request )
     {     

         $asilados = Asylee::create ($request->only(['nombre','apellido','cedula','sexo','residencia','fecha_nac','condicion_especial','estado']));

  
         // $asilados->diseases()->attach($request->enfermedad);
          
        // $asilados->medicines()->attach($request->medicamento, ['hora_medicamento' => $request->hora_medicamento, 'complemento'=>$request->complemento]);
        
         Session::flash('info','Anciano Fue Creado Exitosamente');


        return redirect()->route('asilado.index');
    }



    public function show($id)
     {
        
        $asilados = Asylee::findOrFail($id);

        // if($asilados == null){


        //   return response()->view('errors.404', [] , 404 );



        // }

        return view('asilados.show', compact('asilados'));
    }

   

    public function edit($id)
     {
        
        $asilados=Asylee::findOrFail($id);

        return view('asilados.edit')->with (compact('asilados'));
     }

   

    public function update(CrearAsiladosRequest $request, $id)
     {
       
        $asilados = Asylee::findOrFail($id);

        $asilados->nombre = $request->nombre;
        $asilados->apellido = $request->apellido;
        $asilados->cedula = $request->cedula;
        $asilados->sexo = $request->sexo;
        $asilados->residencia = $request->residencia;
        $asilados->fecha_nac = $request->fecha_nac;
        $asilados->condicion_especial = $request->condicion_especial;
        $asilados->estado = $request->estado;

        $asilados->save();

        Session::flash('info','Anciano Fue Actualizado Exitosamente');


        return redirect()->route('asilado.index');
     }

   

    public function destroy($id)
     {

        $asilados = \App\Asylee::findOrFail($id);
        $asilados->delete();

        Session::flash('info',$asilados->nombre, $asilados->apellido. ' Fue Eliminado');

         return redirect()->route('asilado.index');
     }



      
}


