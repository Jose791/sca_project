@extends('layouts.master')

@section('title','Mostrar Visita')

@section('content')
	
	<h2>Ver Visitas</h2>
	  <p>Ver Visita Registrada</p>   
	  <div class="validation-system">
 		
 		<div class="validation-form"> 

 		<h2>
        
           <a href="{{route('visita.index')}}" class="btn btn-primary pull-right"><i class="fa fa-list iconos" aria-hidden="true"></i>Lista Visitas</a>

      </h2>        
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
                          <i class="fa fa-pencil iconos" aria-hidden="true"></i>
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


           
            