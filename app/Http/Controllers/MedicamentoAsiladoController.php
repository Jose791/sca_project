<?php

namespace App\Http\Controllers;

use DB;

use App\Asylee;

use App\Medicine;

use App\AsyleeMedicine;

use App\Http\Requests\CrearMedicamentosAsiladosRequest;

use Illuminate\Http\Request;

use Carbon\Carbon;

use Illuminate\Support\Facades\Session;

use Input;


class MedicamentoAsiladoController extends Controller
{
    

    public function __construct()
     {
        
        
       $this->middleware('auth');
       
        
     }

    public function index()
     {
        $asilados = DB::table('asylees')
            ->join('asylee_medicine', 'asylees.id', '=', 'asylee_medicine.asylee_id')
            ->join('medicines', 'medicines.id', '=', 'asylee_medicine.medicine_id')
            ->orderBy('asylee_medicine.hora_medicamento', 'asc')
            ->paginate(10);

        return view('medicamento_asilado.index',compact('asilados'));
     }

   
    public function create()
     {  
         $medicamentos = Medicine::all();
          $asilados = Asylee::all();
        return view('medicamento_asilado.create', compact('asilados','medicamentos'))->with('medicines', Medicine::all());
     }

   

    public function store(CrearMedicamentosAsiladosRequest $request)
     {
          
          
          $asilados = Asylee::find($request->asylee_id);
         

         $asilados->medicines()->attach($request->medicine_id,['asylee_id'=>$request->asylee_id,'hora_medicamento'=>$request->hora_medicamento,'complemento'=>$request->complemento]);

        Session::flash('info','Registro Guardado Exitosamente');


        return redirect()->route('medicamento_asilado.index');
     }

   
    public function show($id)
     {
        //
     }

    
    public function edit($id)
    {
        $asiladosm = Asylee::findOrFail($id);
        $asilados = Asylee::all();
        $medicines = Medicine::all();
        
        return view('medicamento_asilado.edit', compact('asiladosm', 'asilados', 'medicines'));
    }

   
    public function update(CrearMedicamentosAsiladosRequest $request, $id)
     {
       
 
        $asilados =Asylee::find($id);

        $medicine_id  = (array) $request->medicine_id;

        $datosAdicionales = array_fill(0, count($medicine_id), ['hora_medicamento' => $request->hora_medicamento, 'complemento'=>$request->complemento]);

        $valores  = array_combine($medicine_id,$datosAdicionales);

        $asilados->medicines()->sync($valores);
    
       
        Session::flash('info','Medicamento de Anciano Actualizado Exitosamente');
    

       return redirect()->route('medicamento_asilado.index');
       
     }


     
    public function destroy($id)
     {
        //
     }
}
