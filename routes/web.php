<?php

// Auth::loginUsingId(1);

// use App\Notifications\NotifyUser;

// use App\Events\TaskEvent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {


//    Auth::user()->notify(new NotifyUser);

//     return view('welcome');
// });





// Route::get('maskAsRead', function(){

// auth()->user()->unreadNotifications->markAsRead();

// return redirect()->back();


// })->name('markRead');

// Route::get('event', function () {
//     event(new TaskEvent('hola'));
// });
// Route::get('tes', function () {
//     event(new TaskEvent('Someone'));
//     return "Event has been sent!";
// });
//Route::get('asilados', function () {
//    return view('asilados');
//});


// Route::get('test', function() {
	
// 	$notificaciones = App\Asylee::has('medicines')
//         ->with(['medicines', 'schedules' => function ($query) {
//             $query->whereRaw('date_format(created_at, "%Y-%m-%d") = date_format(now(), "%Y-%m-%d")')
//                 ->get();
//         }])
//         ->count();

//     return $notificaciones;
// });

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/inicio', 'HomeController@index')->name('inicio');


//asilados
Route::get('/asilados_registrados', 'AsiladoController@index')->name('asilado.index');

Route::get('/asilados', 'AsiladoController@create')->name('asilado.create');

Route::post('/asilados_registrados', 'AsiladoController@store')->name('asilado.store');

Route::get('/asilados_registrados/{id}/edit', 'AsiladoController@edit')->name('asilado.edit');

Route::post('/asilado/update/{id}', 'AsiladoController@update')->name('asilado.update');

Route::get('/asilados/{id}', 'AsiladoController@show')->name('asilado.show');

Route::delete('/asilados/{id}', 'AsiladoController@destroy')->name('asilado.destroy');





//medicamentos
Route::get('medicamentos_registrados', 'MedicamentoController@index')->name('medicamento.index');

Route::get('medicamentos', 'MedicamentoController@create')->name('medicamento.create'); //medicamento.create

Route::post('/medicamentos', 'MedicamentoController@store')->name('medicamento.store'); //medicamento.store

Route::get('/medicamentos_registrados/{id}/edit', 'MedicamentoController@edit')->name('medicamento.edit');

Route::post('/medicamento/update/{id}', 'MedicamentoController@update')->name('medicamento.update');

Route::get('/medicamentos/{id}', 'MedicamentoController@show')->name('medicamento.show');

Route::delete('/medicamentos/{id}', 'MedicamentoController@destroy')->name('medicamento.destroy');


//chequeos_medicos

Route::get('chequeos_registrados', 'ChequeoMedicoController@index')->name('chequeo_medico.index');

Route::get('chequeos_medicos', 'ChequeoMedicoController@create')->name('chequeo_medico.create');

Route::post('/chequeos_medicos', 'ChequeoMedicoController@store')->name('chequeo_medico.store');

Route::get('/chequeos_registrados/{id}/edit', 'ChequeoMedicoController@edit')->name('chequeo_medico.edit');

Route::post('chequeos/update/{id}', 'ChequeoMedicoController@update')->name('chequeo_medico.update');

Route::get('/chequeos/{id}', 'ChequeoMedicoController@show')->name('chequeo_medico.show');

Route::delete('/chequeos/{id}', 'ChequeoMedicoController@destroy')->name('chequeo_medico.destroy');


//Route::resource('chequeos_medicos', 'ChequeosController');



//dietas

Route::get('dietas_registradas', 'DietaController@index')->name('dieta.index');

Route::get('dietas', 'DietaController@create')->name('dieta.create');

Route::post('/dietas_registradas', 'DietaController@store')->name('dieta.store');

Route::get('/dietas/{id}', 'DietaController@show')->name('dieta.show');

Route::get('dietas/edit/{id}', 'DietaController@edit')->name('dieta.edit');

Route::post('dietas/update/{id}', 'DietaController@update')->name('dieta.update');

Route::delete('/dietas/{id}', 'DietaMedicoController@destroy')->name('dieta.destroy');


//enfermedades

Route::get('enfermedades_registradas', 'EnfermedadController@index')->name('enfermedades.index');

Route::get('enfermedades', 'EnfermedadController@create')->name('enfermedades.create');

Route::post('/enfermedades', 'EnfermedadController@store')->name('enfermedades.store');

Route::get('/enfermedades/{id}', 'EnfermedadController@show')->name('enfermedades.show');

Route::get('enfermedades/edit/{id}', 'EnfermedadController@edit')->name('enfermedades.edit');

Route::post('enfermedades/update/{id}', 'EnfermedadController@update')->name('enfermedades.update');

Route::delete('/enfermedades/{id}', 'EnfermedadController@destroy')->name('enfermedades.destroy');


//enfermedad_asilado

Route::get('enfermedad_asilado', 'EnfermedadAsiladoController@index')->name('enfermedad.index');

Route::get('enfermedad', 'EnfermedadAsiladoController@create')->name('enfermedad.create');

Route::post('/enfermedad', 'EnfermedadAsiladoController@store')->name('enfermedad.store');

Route::get('/enfermedad/{id}', 'EnfermedadAsiladoController@show')->name('enfermedad.show');

Route::get('enfermedad/edit/{id}', 'EnfermedadAsiladoController@edit')->name('enfermedad.edit');

Route::post('enfermedad/update/{id}', 'EnfermedadAsiladoController@update')->name('enfermedad.update');

Route::delete('/enfermedad/{id}', 'EnfermedadAsiladoController@destroy')->name('enfermedad.destroy');


//medicamento_asilado

Route::get('medicamento_asilado_registrados', 'MedicamentoAsiladoController@index')->name('medicamento_asilado.index');

Route::get('medicamento_asilado', 'MedicamentoAsiladoController@create')->name('medicamentoasilado.create');

Route::post('/medicamento_asilado', 'MedicamentoAsiladoController@store')->name('medicamentoasilado.store');

// Route::get('/enfermedades/{id}', 'EnfermedadController@show')->name('enfermedad.show');

Route::get('/medicamento_asilado/edit/{id}', 'MedicamentoAsiladoController@edit')->name('medicamento_asilado.edit');

Route::post('medicamento_asilado/update/{id}', 'MedicamentoAsiladoController@update')->name('medicamento_asilado.update');

// Route::delete('/enfermedades/{id}', 'EnfermedadController@destroy')->name('enfermedad.destroy');


//visitantes

Route::get('visitantes_registrados', 'VisitanteController@index')->name('visitante.index');

Route::get('visitantes', 'VisitanteController@create')->name('visitante.create');

Route::post('/visitantes', 'VisitanteController@store')->name('visitante.store');

Route::get('/visitantes/{id}', 'VisitanteController@show')->name('visitante.show');

Route::get('visitantes/edit/{id}', 'VisitanteController@edit')->name('visitante.edit');

Route::post('visitantes/update/{id}', 'VisitanteController@update')->name('visitante.update');

Route::delete('/visitantes/{id}', 'VisitanteController@destroy')->name('visitante.destroy');


//visitas

Route::get('visitas_registradas', 'VisitaController@index')->name('visita.index');

Route::get('visitas', 'VisitaController@create')->name('visita.create');

Route::post('/visitas', 'VisitaController@store')->name('visita.store');

Route::get('/visitas/{id}', 'VisitaController@show')->name('visita.show');

Route::get('visitas/edit/{id}', 'VisitaController@edit')->name('visita.edit');

Route::post('visitas/update/{id}', 'VisitaController@update')->name('visita.update');

Route::delete('/visitas/{id}', 'VisitaController@destroy')->name('visita.destroy');

// esta ruta la hice solo para hacer prueba y ahorrarme el crear una vista para testearla xDDD
/*Route::get('test', function () {
	
	return \App\MedicalCheck::find(2);
});*/


//mostrar horarios

Route::get('mostrar', 'MostrarController@index')->name('mostrar.index');
Route::post('mostrar', 'MostrarController@store')->name('mostrar.store');
Route::get('descargar-horarios', 'MostrarController@pdf')->name('mostrar.pdf');



//Reportes

Route::get('chart', 'ReportController@chartjs');
Route::get('sample', 'ReportController@sample');
Route::post('sample/get', 'ReportController@getConsulting')->name('sample/get');
Route::get('asilado_x_sexo', 'ReportController@asilado_x_sexo')->name('asilado_x_sexo');
Route::get('asilado_x_medicamento', 'ReportController@asilado_x_medicamento')->name('asilado_x_medicamento');

Route::post('notification/get', 'MostrarController@cantidadMedicSuministrar');



// Route::get('chartjs', 'ReportController@chart');





// Route::get('chart','AsiladoController@chartindex');


// Route::get('stocks','StockController@index');
// Route::get('stock/chart','StockController@chart
