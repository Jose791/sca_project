<?php

namespace App\Http\Controllers;

use BD;
use App\Asylee;
use App\Schedule;
use Illuminate\Http\Request;
use App\AsyleeMedicine;
use Illuminate\Support\Facades\Session;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

use Barryvdh\DomPDF\Facade as PDF;

use Illuminate\Support\Facades\Input;

class MostrarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $asilados = AsyleeMedicine::with(['medicine', 'asylee' => function ($query) {
            $query->with('schedules')
                ->get();
        }])
            ->orderBy('hora_medicamento', 'asc')
            ->paginate(10);

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


        // $asilados = Asylee::has('medicines')
        //     ->with(['medicines', 'schedules' => function ($query) {
        //         $query->whereRaw('date_format(created_at, "%Y-%m-%d") = date_format(now(), "%Y-%m-%d")')
        //             ->get();
        //     }])->OrderBy('created_at','DESC')
        //     ->get()
        //     ->toArray(); 

         $asilados = AsyleeMedicine::with(['medicine', 'asylee' => function ($query) {
            $query->with('schedules')
                ->get();
        }])
            ->orderBy('hora_medicamento', 'asc')
            ->paginate(10);   
    
  return view('mostrar.printschedule', compact('asilados'));
       
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

    public function cantidadMedicSuministrar ()
    {
        $notificaciones = Asylee::has('medicines')
            ->with(['medicines', 'schedules' => function ($query) {
                $query->whereRaw('date_format(created_at, "%Y-%m-%d") = date_format(now(), "%Y-%m-%d")')
                    ->get();
            }])
            ->count();




        return $notificaciones;
    }



}
