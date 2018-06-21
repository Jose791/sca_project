<?php

namespace App\Http\Controllers;

use DB;
use App\Asylee;
use Illuminate\Http\Request;

class ReportController extends Controller
{
   public function index()
   {
       $result = \DB::table('asylees')
            ->where('id','=','1')
            ->orderBy('fecha_nac', 'ASC')
            ->get();

       return view('reportes.chartjs', compact('result'));
    }

    public function chartjs()
	{

	    $viewer = Asylee::select(DB::raw("SUM(id) as count"))
	        ->orderBy("created_at")
	        ->groupBy(DB::raw("id"))
	        ->get()->toArray();

	    $viewer = array_column($viewer, 'count');

	    $click = Asylee::select(DB::raw("SUM(id) as count"))
	        ->orderBy("created_at")
	        ->groupBy(DB::raw("id"))
	        ->get()->toArray();

	    $click = array_column($click, 'count');

	    return view('reportes.chartjs')
            ->with('viewer',json_encode($viewer, JSON_NUMERIC_CHECK))
            ->with('click',json_encode($click, JSON_NUMERIC_CHECK));
	}
}
