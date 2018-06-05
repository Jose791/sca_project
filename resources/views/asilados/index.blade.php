@extends('layouts.master')


@section('banner')

<div class="banner">
		    	<h2>
				<a >Formularios</a>
				<i class="fa fa-angle-right"></i>
				<span>Asilados registrados</span>
				</h2>
		    </div>

@endsection

@section('content')


	
	<h2>Todos los Asilados</h2>
	  <p>Todos los Asilados registrados</p>  
	 
	  <div class="validation-system">
 		
 		<div class="validation-form">  
	<div class="col-sm-4">
  
@include('asilados.partials.aside')

</div>
 		        
	  <div class="panel-danger">
	  	<div class="panel-body">
	  
	  	<h2>
	  		
           <a href="{{route('asilado.create')}}" class="btn btn-primary pull-right">Nuevo</a>

	  	</h2>
	  	@include('asilados.partials.info')
		  <table class="table table-bordered ">
		    <thead>
		      <tr >
		        <th >Asilado #</th>
		        <th>Cedula</th>
                <th>Nombre</th>
		        <th>Apellidos</th>
                <th>Sexo</th>
		        {{-- <th>Residencia</th>
                <th>Fecha de Nacimiento</th> --}}
		        <th >Condicion</th>
                <th>Estado</th>
                <th colspan="3">Accion</th>
                {{-- <th class="col-md-4">Opciones</th> --}}
		      </tr>
		    </thead>
		    <tbody>
		      @foreach($asilados as $asilado)
			      <tr>
			        <td>{{ $asilado->id }}</td>
			        <td>{{ $asilado->cedula }}</td>
                    <td>{{ $asilado->nombre }}</td>
			        <td>{{ $asilado->apellido }}</td>
                    <td>{{ $asilado->sexo }}</td>
			        {{-- <td>{{ $asilado->residencia }}</td>
                    <td>{{ $asilado->fecha_nac }}</td> --}}
			        <td>{{ $asilado->condicion_especial }}</td>
                    <td>{{ $asilado->estado }}</td>
                    <td width="10px">
                    	<a href="{{route('asilado.show',$asilado->id)}}" class="btn btn-info">
                          
                          Ver                    		

                    	</a>
                     </td>



                   

                    <td width="10px">
                    	<a href="{{route('asilado.edit',$asilado->id)}}" class="btn btn-warning">
                          
                          Editar                    		

                    	</a>


                    </td>

          
                     <td width="10px">
                    
                    	
                    	<form action="{{action('AsiladoController@destroy',$asilado['id'])}}"  method="post">

                    	{{ csrf_field() }}

                    	<input type="hidden" name="_method" value="DELETE">

                    	<button class="btn btn-danger" type="submit" onclick="return confirm('seguro que desea eliminar?')">Borrar</button>

                    	</form>

                     </td>
                    
                  
			      </tr>

		      @endforeach

		    </tbody>
		  </table>
		  {!! $asilados->render() !!}
	  	
	  </div>
	  </div>
</div>



</div>


@endsection

