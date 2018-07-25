<?php

namespace App\Http\Controllers;

use App\Asylee;
use App\Schedule;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

use Barryvdh\DomPDF\Facade as PDF;

class MostrarController extends Controller
{
    

    public function __construct()
     {
        
        
       $this->middleware('auth');
       
        
     }


    public function index()
     {
        $asilados = Asylee::has('medicines')
            ->with(['medicines', 'schedules' => function ($query) {
                $query->whereRaw('date_format(created_at, "%Y-%m-%d") = date_format(now(), "%Y-%m-%d")')
                    ->get();
            }])->OrderBy('created_at','DESC')
            ->get()
            ->toArray();

        return view('mostrar.horarios', compact('asilados'));
     }

  

    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $schedule = new Schedule();

        $schedule->asylee_id = $request->asylee_id;
        $schedule->user_id = auth()->user()->id;
        $schedule->medicine_id = $request->medicine_id;
        $schedule->save();

         Session::flash('success','Medicamento Suministrado Exitosamente');


        return redirect()->back();
    }

   
    public function show($id)
    {
        //
    }

      public function pdf()
    {    


        $asilados = Asylee::has('medicines')
            ->with(['medicines', 'schedules' => function ($query) {
                $query->whereRaw('date_format(created_at, "%Y-%m-%d") = date_format(now(), "%Y-%m-%d")')
                    ->get();
            }])->OrderBy('created_at','DESC')
            ->get()
            ->toArray();    
        // /**
        //  * toma en cuenta que para ver los mismos 
        //  * datos debemos hacer la misma consulta
        // **/
        // // $products = Product::all(); 

        // $pdf = PDF::loadView('mostrar.horarios', compact('asilados'));

        // // dd($pdf);
  return view('mostrar.printschedule', compact('asilados'));
        // return $pdf->download('lista.pdf');
    }


    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
