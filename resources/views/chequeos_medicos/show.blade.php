@extends('layouts.master')


@section('title','Mostrar Chequeo Medico')

@section('content')
	
	<h2>Todos los Chequeos Medicos</h2>
	  <p>Todos los Chequeos Medicos registrados</p>
	  <div class="validation-system">
 		
 		<div class="validation-form">

 		<h2>
        
           <a href="{{route('chequeo_medico.index')}}" class="btn btn-primary pull-right"><i class="fa fa-list iconos" aria-hidden="true"></i>Lista Chequeos</a>

      </h2>            
	  <div class="panel-danger">
	  	<div class="panel-body">
		  <table class="table">
		    <thead>
		      <tr>
		        <th>Chequeo #</th>
		        <th>Asilado</th> 
                <th>Diagnostico</th>
                <th colspan="3">Accion</th>
		      </tr>
		    </thead>
		    <tbody>
		    
			      <tr>
			        <td>{{ $chequeosmedicos->id}}</td>
			        <td>{{ $chequeosmedicos->asylee->nombre}}</td>
                    <td>{{ $chequeosmedicos->diagnostico }}</td>
                     {{-- <td width="10px">
                    	<a href="{{route('chequeo_medico.show',$chequeosmedicos->id)}}" class="btn btn-info">
                          
                          Ver                    		

                    	</a>
                     </td> --}}



                   

                    <td width="10px">
                    	<a href="{{route('chequeo_medico.edit',$chequeosmedicos->id)}}" class="btn btn-warning">
                          <i class="fa fa-pencil iconos" aria-hidden="true"></i>
                          Editar                    		

                    	</a>


                    </td>

          
                    {{--  <td width="10px">
                    
                    	
                    	<form action="{{action('ChequeoMedicoController@destroy',$chequeosmedicos['id'])}}"  method="post">

                    	{{ csrf_field() }}

                    	<input type="hidden" name="_method" value="DELETE">

                    	<button class="btn btn-danger" type="submit" onclick="return confirm('seguro que desea eliminar?')">Borrar</button>

                    	</form>

                     </td> --}}
			      </tr>
		      
		    </tbody>
		  </table>
	  	</div>
	  </div>
</div>
</div>
@endsection


 
            