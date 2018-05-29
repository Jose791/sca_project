<?php

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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('asilados', function () {
//    return view('asilados');
//});



Auth::routes();

Route::get('/inicio', 'HomeController@index')->name('inicio');


//asilados
Route::get('/asilados_registrados', 'AsiladoController@index')->name('asilado.index');


Route::get('/asilados', 'AsiladoController@create')->name('asilado.create');

Route::post('/asilados_registrados', 'AsiladoController@store')->name('asilado.store');

Route::get('/asilados_registrados/{id}/edit', 'AsiladoController@edit')->name('asilado.edit');

Route::post('/asilados_registrados/{id}/edit', 'AsiladoController@update')->name('asilado.update');


#Ejemplo en estas rutas
// es bueno que las rutas no tengan el mismo nombre, sino que se llamen segun lo que hacen...

//medicamentos
Route::get('medicamentos_registrados', 'MedicamentoController@index')->name('medicamento.index');

Route::get('medicamentos', 'MedicamentoController@create')->name('medicamento.create'); //medicamento.create

Route::post('/medicamentos', 'MedicamentoController@store')->name('medicamento.store'); //medicamento.store


//chequeos_medicos

Route::get('chequeos_registrados', 'ChequeoMedicoController@index')->name('chequeo_medico.index');

Route::get('chequeos_medicos', 'ChequeoMedicoController@create')->name('chequeo_medico.create');

Route::post('/chequeos_medicos', 'ChequeoMedicoController@store')->name('chequeo_medico.store');


//Route::resource('chequeos_medicos', 'ChequeosController');



//dietas

Route::get('dietas_registradas', 'DietaController@index')->name('dieta.index');

Route::get('dietas', 'DietaController@create')->name('dieta.create');

Route::post('/dietas_registradas', 'DietaController@store')->name('dieta.store');



//enfermedades

Route::get('enfermedades_registradas', 'EnfermedadController@index')->name('enfermedad.index');

Route::get('enfermedades', 'EnfermedadController@create')->name('enfermedad.create');

Route::post('/enfermedades', 'EnfermedadController@store')->name('enfermedad.store');



//medicamento_asilado

Route::get('medicamento_asilado_registrados', 'MedicamentoAsiladoController@index')->name('medicamento_asilado.index');

Route::get('medicamento_asilado', 'MedicamentoAsiladoController@create')->name('medicamentoasilado.create');

Route::post('/medicamento_asilado', 'MedicamentoAsiladoController@store')->name('medicamentoasilado.store');


//visitantes

Route::get('visitantes_registrados', 'VisitanteController@index')->name('visitante.index');

Route::get('visitantes', 'VisitanteController@create')->name('visitante.create');

Route::post('/visitantes', 'VisitanteController@store')->name('visitante.store');


//visitas

Route::get('visitas_registradas', 'VisitaController@index')->name('visita.index');

Route::get('visitas', 'VisitaController@create')->name('visita.create');

Route::post('/visitas', 'VisitaController@store')->name('visita.store');

// esta ruta la hice solo para hacer prueba y ahorrarme el crear una vista para testearla xDDD
/*Route::get('test', function () {
	
	return \App\Visitor::find(1)->visitas;
});*/