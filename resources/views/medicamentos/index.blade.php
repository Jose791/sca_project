@extends('layouts.master')

@section('content')
	
	<h2>Todos los medicamentos</h2>
	  <p>Todos los medicamentos registrados</p>   
	  <div class="validation-system">
 		
 		<div class="validation-form">         
	  <div class="panel-danger">
	  	<div class="panel-body">
		  <table class="table">
		    <thead>
		      <tr>
		        <th>Medicamento</th>
		        <th>Condicion</th>
		      </tr>
		    </thead>
		    <tbody>
		      @foreach($medicamentos as $medicamento)
			      <tr>
			        <td>{{ $medicamento->nombre }}</td>
			        <td>{{ $medicamento->condicion }}</td>
			      </tr>
		      @endforeach
		    </tbody>
		  </table>
	  	</div>
	  </div>
  </div>
</div>
@endsection