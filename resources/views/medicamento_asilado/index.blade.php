@extends('layouts.master')
@section('banner')

<div class="banner">
		    	<h2>
				<a >Lista de</a>
				<i class="fa fa-angle-right"></i>
				<span>Medicamentos de Ancianos</span>
				</h2>
		    </div>

@endsection

@section('content')
	
	<h2>Todos los Medicamentos de cada asilado</h2>
	  <p>Todos los Medicamentos de cada asilado Registrados</p>   
	  <div class="validation-system">
 		
 		<div class="validation-form">         
	  <div class="panel-danger">
	  	<div class="panel-body">
	  			<h2>
	  		
           <a href="{{route('medicamentoasilado.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus iconos" aria-hidden="true"></i>Añadir Medicamento/Anciano</a>

	  	</h2>
		  <table class="table">
		    <thead>
		      <tr>
		        <th># Registro</th>
		        <th> Asilado</th>
                <th>Medicamento</th>
                <th>Hora del Medicamento</th>
                <th>Complemento</th>
                <th>Editar</th>
                <th>Borrar</th>
		      </tr>
		    </thead>
		    <tbody>
		      	@foreach($asilados as $asilado)
			      	@foreach($asilado['medicines'] as $medicina)
			      	<tr>
				        <td>{{ $asilado['id'] }}</td>
				        <td>{{ $asilado['nombre'] }}</td>
	                    <td>{{ $medicina['medicamento'] }}</td>
				        <td>{{ $medicina['pivot']['hora_medicamento'] }}</td>
	                    <td>{{ $medicina['pivot']['complemento'] }}</td>

	                    <td width="10px">
	                    	<a href="{{route('medicamento_asilado.edit',$asilado['id'])}}" class="btn btn-warning">
	                          
	                          Editar
	                    	</a>
	                    </td>

	                    <td width="10px">
	                    	<form action="{{action('AsiladoController@destroy',$asilado['id'])}}"  method="post">
		                    	{{ csrf_field() }}

		                    	<input type="hidden" name="_method" value="DELETE">
		                    	{{-- <button class="btn btn-danger" type="submit" onclick="return confirm('seguro que desea eliminar?')">Borrar</button> --}}
	                    	</form>
	                    </td>
			      	</tr>
			      	@endforeach
		      	@endforeach
		    </tbody>
		  </table>
	  	</div>
	  </div>
  </div>
</div>
@endsection