<?php

namespace App\Http\Controllers;

use DB;
use App\Asylee;
use App\Medicine;
use Illuminate\Http\Request;

class ReportController extends Controller
{
   public function __construct()
    {
        
        
       $this->middleware('admin');
       $this->middleware('auth');
       
        
    }


   // public function index()
   // {
   //     $result = \DB::table('asylees')
   //          ->where('id','=','1')
   //          ->orderBy('fecha_nac', 'ASC')
   //          ->get();

   //     return view('reportes.chartjs', compact('result'));
   //  }

    public function chartjs()
	   {
       
        $asilado_enferm = DB::select('select count(a.id) cantidad, d.enfermedad from asylees a, diseases d, asylee_disease ad where a.id = ad.asylee_id and ad.disease_id = d.id group by d.enfermedad');

        $asilado_x_sexo = DB::select('select sexo, count(*)  anciano from asylees a group by sexo');


        return view('reportes.enfermedad_asilado', compact('asilado_enferm','asilado_x_sexo'));
	   }


    public function sample ()
     {
        
        $medicinas = Medicine::all();

        return view('reportes.sample', compact('medicinas'));
     
     }


    public function getConsulting (Request $request)
    {
        /*$data = DB::select('select count(am.medicine_id) as total, m.medicamento from medicines m, asylee_medicine am where m.id = am.medicine_id group by m.medicamento order by total desc');*/

        $data = DB::select('select count(am.medicine_id) as total, m.medicamento from medicines m, asylee_medicine am where m.id = am.medicine_id and m.id = ? group by m.medicamento order by total desc', array($request->medicina_id));

        foreach($data as $key)
         {
            $medicinas[] = $key->medicamento;
            $consumo[] = $key->total;
         }

        $response = array (
            'medicinas' => $medicinas,
            'consumo' => $consumo
         );
        

        return response()->json(['data' => $response]);
     }

public function asilado_x_medicamento()
     {

        $asilado_x_medicamento = DB::select('select count(a.id) cantidad, m.medicamento from asylees a, medicines m, asylee_medicine am where a.id = am.asylee_id and am.medicine_id = m.id group by m.medicamento');

        return view('reportes.anciano_x_medicamento', compact('asilado_x_medicamento'));
    
}
   
}
