@extends('layouts.master')

@section('content')
	
	<h2>Todos los Medicamentos de cada asilado</h2>
	  <p>Todos los Medicamentos de cada asilado Registrados</p>   
	  <div class="validation-system">
 		
 		<div class="validation-form">         
	  <div class="panel-danger">
	  	<div class="panel-body">
		  <table class="table">
		    <thead>
		      <tr>
		        <th>ID</th>
		        <th>ID Asilado</th>
                <th>ID Medicamento</th>
                <th>Hora del Medicamento</th>
                <th>Complemento</th>
		      </tr>
		    </thead>
		    <tbody>
		      @foreach($asilados as $asilado)
			      <tr>
			        <td>{{ $asiladomedicamento->id }}</td>
			        <td>{{ $asilado->asylee_id }}</td>
                    <td>{{ $medicamento->medicine_id }}</td>
			        <td>{{ $asiladomedicamento->hora_medicamento }}</td>
                    <td>{{ $asiladomedicamento->complemento }}</td>
			      </tr>
		      @endforeach
		    </tbody>
		  </table>
	  	</div>
	  </div>
  </div>
</div>
@endsection


            