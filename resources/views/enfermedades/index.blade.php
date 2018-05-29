@extends('layouts.master')

@section('content')
	
	<h2>Todos las Enfermedades</h2>
	  <p>Todos las Enfermedades Registradas</p>  
	  <div class="validation-system">
 		
 		<div class="validation-form">          
	  <div class="panel-danger">
	  	<div class="panel-body">
		  <table class="table">
		    <thead>
		      <tr>
		        <th>ID</th>
		        <th>Nombre</th>
		      </tr>
		    </thead>
		    <tbody>
		      @foreach($enfermedades as $enfermedad)
			      <tr>
			        <td>{{ $enfermedad->id }}</td>
			        <td>{{ $enfermedad->nombre }}</td>
			      </tr>
		      @endforeach
		    </tbody>
		  </table>
	  	</div>
	  </div>
   </div>
</div>
@endsection

