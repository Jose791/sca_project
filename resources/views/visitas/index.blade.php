@extends('layouts.master')

@section('content')
	
	<h2>Todas las Visitas</h2>
	  <p>Todas las Visitas Registradas</p>   
	  <div class="validation-system">
 		
 		<div class="validation-form">  

 		<div class="col-sm-4">
  
              @include('visitas.partials.aside')

           </div>         
	  <div class="panel-danger">
	  	<div class="panel-body">

	  		<h2>
        
           <a href="{{route('visita.create')}}" class="btn btn-primary pull-right">Nuevo</a>

      </h2>
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

		      @foreach($visitas as $visita) 
			      <tr>
			        <td>{{ $visita['id'] }}</td>
			        <td>{{ $visita['visitor']['nombre'] }} </td>
			        <td>{{ $visita['asylee']['nombre'] }}</td>
			        <td>{{ $visita['fecha_reserva'] }}</td>

			        <td width="10px">
                    	<a href="{{route('visita.show',$visita['id'])}}" class="btn btn-info">
                          
                          Ver                    		

                    	</a>
                     </td>



                   

                    <td width="10px">
                    	<a href="{{route('visita.edit',$visita['id'])}}" class="btn btn-warning">
                          
                          Editar                    		

                    	</a>


                    </td>

          
                     <td width="10px">
                    
                    	
                    	<form action="{{action('VisitaController@destroy',$visita['id'])}}"  method="post">

                    	{{ csrf_field() }}

                    	<input type="hidden" name="_method" value="DELETE">

                    	<button class="btn btn-danger" type="submit" onclick=" return confirm('seguro que desea eliminar?')">Borrar</button>

                    	</form>

                     </td>
			      </tr>
		      @endforeach
		    </tbody>
		  </table>
	  	</div>
	  </div>
	</div>
</div>

@endsection


           
            