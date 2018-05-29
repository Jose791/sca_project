@extends('layouts.master')

@section('content')
	
	<h2>Todas las Visitas</h2>
	  <p>Todas las Visitas Registradas</p>   
	  <div class="validation-system">
 		
 		<div class="validation-form">         
	  <div class="panel-danger">
	  	<div class="panel-body">
		  <table class="table">
		    <thead>
		      <tr>
		        <th>Visita #</th>
                <th>Visitante</th>
                <th>Asilado</th>
                <th>Fecha de Visita</th>
                
		      </tr>
		    </thead>
		    <tbody>
		    	{{-- esta maner nunca la he visto... --}}
		    	{{--  && ($visitantes as $visitante) && ($visitas as $visita) --}}


		      @foreach($visitas as $visita) 
			      <tr>
			        <td>{{ $visita->id }}</td>
			        {{-- aqui estoy usando la relacion visitor() del modelo Visit.php --}}
			        <td>{{ $visita->visitor->nombre }}</td>
			        <td>{{ $visita->asylee->nombre }}</td>
			        <td>{{ $visita->fecha_reserva }}</td>
			      </tr>
		      @endforeach
		    </tbody>
		  </table>
	  	</div>
	  </div>
	</div>
</div>

@endsection


           
            