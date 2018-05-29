@extends('layouts.master')

@section('content')
	
	<h2>Todos los Chequeos Medicos</h2>
	  <p>Todos los Chequeos Medicos registrados</p>
	  <div class="validation-system">
 		
 		<div class="validation-form">            
	  <div class="panel-danger">
	  	<div class="panel-body">
		  <table class="table">
		    <thead>
		      <tr>
		        <th>Chequeo #</th>
		        <th>Asilado</th> 
                <th>Diagnostico</th>
		      </tr>
		    </thead>
		    <tbody>
		      @foreach ($chequeosmedicos as $chequeo)
			      <tr>
			        <td>{{ $chequeo->id}}</td>
			        <td>{{ $chequeo->asylee->nombre}}</td>
                    <td>{{ $chequeo->diagnostico }}</td>
			      </tr>
		      @endforeach
		    </tbody>
		  </table>
	  	</div>
	  </div>
</div>
</div>
@endsection


 
            