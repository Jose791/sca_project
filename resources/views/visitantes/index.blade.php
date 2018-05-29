@extends('layouts.master')

@section('content')
	
	<h2>Todos los Visitantes</h2>
	  <p>Todos los Visitantes Registrados</p> 
	  <div class="validation-system">
 		
 		<div class="validation-form">           
	  <div class="panel-danger">
	  	<div class="panel-body">
		  <table class="table">
		    <thead>
		      <tr>
		        <th>ID</th>
		        <th>Nombre</th>
                <th>Apellido</th>
                <th>Cedula</th>
                <th>Direccion</th>
                <th>Sexo</th>
		      </tr>
		    </thead>
		    <tbody>
		      @foreach($visitantes as $visitante) 
			      <tr>
			        <td>{{ $visitante->id }}</td>
			        <td>{{ $visitante->nombre }}</td>
                    <td>{{ $visitante->apellido }}</td>
			        <td>{{ $visitante->cedula }}</td>
                    <td>{{ $visitante->direccion }}</td>
                    <td>{{ $visitante->sexo }}</td>
			      </tr>
		      @endforeach
		    </tbody>
		  </table>
	  	</div>
	  </div>
</div>
</div>
@endsection


 