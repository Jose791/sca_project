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
	  <div class="panel-danger">
	  	<div class="panel-body">
		  <table class="table ">
		    <thead>
		      <tr>
		        <th>Asilado #</th>
		        <th>Cedula</th>
                <th>Nombre</th>
		        <th>Apellidos</th>
                <th>Sexo</th>
		        <th>Residencia</th>
                <th>Fecha de Nacimiento</th>
		        <th class="col-md-4">Condicion</th>
                <th>Estado</th>
                <th class="col-md-4">Opciones</th>
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
			        <td>{{ $asilado->residencia }}</td>
                    <td>{{ $asilado->fecha_nac }}</td>
			        <td>{{ $asilado->condicion_especial }}</td>
                    <td>{{ $asilado->estado }}</td>
                    {{-- <td>
                    	
                      <button type="button" rel="tooltip" title="ver Asilado" class="btn btn-info btn-simple btn-xs">
                      	<i class="fa fa-info"></i>

                      </button>

                      <a href="{{url('/asilados_registrados/'.$asilado->id.'/edit')}}" type="button" rel="tooltip" title="Editar Asilado" class="btn btn-success btn-simple btn-xs">
                      	<i class="fa fa-edit"></i>

                      </a>

                      <button type="button" rel="tooltip" title="Eliminar Asilado" class="btn btn-danger btn-simple btn-xs">
                      	<i class="fa fa-times"></i>

                      </button>



                    </td> --}}
			      </tr>
		      @endforeach
		    </tbody>
		  </table>
	  	</div>
	  </div>
</div>
</div>
@endsection

