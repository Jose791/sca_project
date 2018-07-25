@extends('layouts.master')

@section('title')

Lista Chequeos Medicos

@endsection

@section('banner')

<div class="banner">
		    	<h2>
				<a >Lista de</a>
				<i class="fa fa-angle-right"></i>
				<span>Chequeos Medicos</span>
				</h2>
		    </div>

@endsection

@section('content')
	
	<h2>Todos los Chequeos Medicos</h2>
	  <p>Todos los Chequeos Medicos registrados</p>
	  <div class="validation-system">
 	
 		<div class="validation-form"> 
 			<div class="col-sm-4">
  
              @include('chequeos_medicos.partials.aside')

           </div>  

	  <div class="panel-danger">
	  	<div class="panel-body">

	  	<h2>
	  		
           <a href="{{route('chequeo_medico.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus iconos" aria-hidden="true"></i>Añadir Chequeo Medico</a>

	  	</h2>
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

		      @foreach ($chequeosmedicos as $chequeo)
			      <tr>
			        <td>{{ $chequeo['id'] }}</td>
			        <td>{{ $chequeo['asylee']['nombre'] }}</td>
                    <td>{{ $chequeo['diagnostico'] }}</td>
                     
                     <td width="10px">
                    	<a href="{{route('chequeo_medico.show', $chequeo['id'])}}" class="btn btn-info">
                          
                          Ver                    		

                    	</a>
                     </td>



                   

                    <td width="10px">
                    	<a href="{{route('chequeo_medico.edit', $chequeo['id'])}}" class="btn btn-warning">
                          
                          Editar                    		

                    	</a>


                    </td>

          
                     <td width="10px">
                    
                    	
                    	<form action="{{action('ChequeoMedicoController@destroy', $chequeo['id'])}}"  method="post">

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


 
            