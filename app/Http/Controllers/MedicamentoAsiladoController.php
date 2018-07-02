<?php

namespace App\Http\Controllers;


use App\Asylee;

use App\Medicine;

use App\AsyleeMedicine;

use App\Http\Requests\CrearMedicamentosAsiladosRequest;

use Illuminate\Http\Request;

use Carbon\Carbon;

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
        $asilados = Asylee::has('medicines')
            ->with('medicines')
            ->OrderBy('id','DESC')  
            ->get()
            ->toArray();
// OrderBy('id','DESC')->paginate(10)

        // posiblemente algo nos va a dar error... ya ando viendo un pro con los asilados que tienen mas de un medicamento....
        // pero ese pro solo es a nivel de presentacion de datos... (nada grave!) ese er el pro!! xDDD
        // dd($asilados);
        return view('medicamento_asilado.index',compact('asilados'));
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
        return view('medicamento_asilado.create', compact('asilados','medicamentos'))->with('medicines', Medicine::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrearMedicamentosAsiladosRequest $request)
    {
          
          
          $asilados = Asylee::find($request->asylee_id);
         

         $asilados->medicines()->attach($request->medicine_id,['asylee_id'=>$request->asylee_id,'hora_medicamento'=>$request->hora_medicamento,'complemento'=>$request->complemento]);

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
         // $asiladosm=AsyleeMedicine::find($id);
         // $asilados=Asylee::all();
         // $medicines=Medicine::all();
        
        $asiladosm = Asylee::find($id);

        /*$asiladosm = Asylee::where('id', $id)
            ->with('medicines')
            ->get()
            ->toArray();*/

        // $asilados = Asylee::with('medicines')->get()->toArray();

        // dd($asilados);
       
        // dd($asiladosm->medicines);
        return view('medicamento_asilado.edit')->with('asiladosm', $asiladosm)
           ->with('asilados', Asylee::all())
           ->with('medicines', Medicine::all());
                                              
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CrearMedicamentosAsiladosRequest $request, $id)
    {
       
     // dd($request->id);

        // $asilados = Asylee::find($id);
        $asilados =Asylee::find($id);

        // $asilados->update($request->all());

        // $asilados->medicines()->sync();

        // $medicine_ids = $request->input('medicine_id');

       // $asilados->asylee_id= $request->asylee_id;
       // $asilados->medicine_id= $request->medicine_id;
       // $asilados->hora_medicamento= $request->hora_medicamento;
       // $asilados->complemento= $request->complemento;
      
        // $asilados->medicines()->sync($request->medicine_id, $request->hora_medicamento,$request->complemento);

       
    

       return redirect()->route('medicamento_asilado.index');
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
