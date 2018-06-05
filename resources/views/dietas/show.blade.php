@extends('layouts.master')

@section('content')
	
	<h2>Todos las Dietas</h2>
	  <p>Todas las Dietas registradas</p>
	  <div class="validation-system">
 		
 		<div class="validation-form">            
	  <div class="panel-danger">
	  	<div class="panel-body">
		  <table class="table">
		    <thead>
		      <tr>
		        <th>Dieta #</th>
		        <th>Asilado</th>  
                <th>Descripcion</th>
                <th colspan="3">Accion</th>
		      </tr>
		    </thead>
		    <tbody>
		    
			      <tr>
			        <td>{{ $dietas->id}}</td>
			        <td>{{ $dietas->asylee->nombre}}</td>
                    <td>{{ $dietas->descripcion }}</td>
                     {{-- <td width="10px">
                    	<a href="{{route('chequeo_medico.show',$chequeosmedicos->id)}}" class="btn btn-info">
                          
                          Ver                    		

                    	</a>
                     </td> --}}



                   

                    <td width="10px">
                    	<a href="{{route('dieta.edit',$dietas->id)}}" class="btn btn-warning">
                          
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


 
            