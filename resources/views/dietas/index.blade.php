@extends('layouts.master')

@section('content')
	
	<h2>Todos las Dietas</h2>
	  <p>Todos Dietas registradas</p>   
	  <div class="validation-system">
 		
 		<div class="validation-form">         
	  <div class="panel-danger">
	  	<div class="panel-body">
		  <table class="table">
		    <thead>
		      <tr>
		        <th>ID</th>
		        <th>ID Asilado</th>  
                <th>Diagnostico</th>
		      </tr>
		    </thead>
		    <tbody>
		      @foreach ($dietas as $dieta)
			      <tr>
			        <td>{{ $dieta->id }}</td>
			        <td>{{ $dieta->asylee->nombre }}</td>
                    <td>{{ $dieta->descripcion}}</td>
			      </tr>
		      @endforeach
		    </tbody>
		  </table>
	  	</div>
	  </div>
   </div>
</div>
@endsection
