@extends('layouts.master')

@section('title', 'Lista de Enfermedades de Ancianos')

@section('banner')

<div class="banner">
		    	<h2>
				<a >Lista de</a>
				<i class="fa fa-angle-right"></i>
				<span>Enfermedades de Ancianos </span>
				</h2>
		    </div>

@endsection

@section('content')
	
	<h2>Todas las Enfermedades de cada Anciano</h2>
	  <p>Todas las Enfermedades de cada Anciano Registrado</p>   
	  <div class="validation-system">
 		
 		<div class="validation-form">         
	  <div class="panel-danger">
	  	<div class="panel-body">
	  			<h2>
	  		
           <a href="{{route('enfermedad.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus iconos" aria-hidden="true"></i>Añadir Enfermedad/Anciano</a>

	  	</h2>
		  <table class="table">
		    <thead>
		      <tr>
		        <th># Registro</th>
		        <th> Anciano</th>
                <th>Enfermedad</th>
                {{-- <th>Hora del Medicamento</th>
                <th>Complemento</th> --}}
                <th>Editar</th>
                ?
		      </tr>
		    </thead>
		    <tbody>
		      	@foreach($asilados as $asilado)
			      	@foreach($asilado['diseases'] as $enfermedad)
			      	<tr>
				        <td>{{ $asilado['id'] }}</td>
				        <td>{{ $asilado['nombre'] }}</td>
	                    <td>{{ $enfermedad['enfermedad'] }}</td>
				        {{-- <td>{{ $enfermedad['descripcion'] }}</td> --}}
	                    {{-- <td>{{ $enfermedad['pivot']['complemento'] }}</td> --}}

	                    <td width="10px">
	                    	<a href="{{route('enfermedad.edit',$asilado['id'])}}" class="btn btn-warning">
	                          <i class="fa fa-eye iconos" aria-hidden="true"></i>
	                          Editar
	                    	</a>
	                    </td>

	                    <td width="10px">
	                    	<form action="{{-- {{action('AsiladoController@destroy',$asilado['id'])}} --}}"  method="post">
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

		  {{ $asilados->links() }}
	  	</div>
	  </div>
  </div>
</div>
@endsection