@extends('layouts.master')

@section('content')
	
	<h2>Ver Visitas</h2>
	  <p>Ver Visita Registrada</p>   
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

		      
			      <tr>
			        <td>{{ $visitas->id }}</td>
			        <td>{{ $visitas->visitor->nombre }} {{$visitas->visitor->apellido}}</td>
			        <td>{{ $visitas->asylee->nombre }} {{ $visitas->asylee->apellido }}</td>
			        <td>{{ $visitas->fecha_reserva }}</td>

			       
                   

                    <td width="10px">
                    	<a href="{{route('visita.edit',$visitas->id)}}" class="btn btn-warning">
                          
                          Editar                    		

                    	</a>


                    </td>


                     </td>
			      </tr>
		      
		    </tbody>
		  </table>
	  	</div>
	  </div>
	</div>
</div>

@endsection


           
            