@extends('layouts.master')


@section('banner')

<div class="banner">
		    	<h2>
				<a >Mostrar Datos de:</a>
				<i class="fa fa-angle-right"></i>
				<span>{{$asilados->nombre}} {{$asilados->apellido}}</span>
				</h2>
		    </div>

@endsection

@section('content')


	
	<h2>Datos del Anciano</h2>
	  {{-- <p>Todos los Asilados registrados</p>   --}}
	  <div class="validation-system">
 		 
 		<div class="validation-form">
      <div class="col-sm-4">
  
@include('asilados.partials.aside')

</div>       
	  <div class="panel-danger">
	  	<div class="panel-body">
	  	
      <h2>
	  		
           <a href="{{route('asilado.index')}}" class="btn btn-primary pull-right">Lista de Asilados</a>

	  	</h2>
		  <table class="table ">
		    <thead>
		      <tr>
                 <th>Anciano #</th>
		         <th>Cedula</th>
                 <th>Nombre</th>
		         <th>Apellidos</th>
                 <th>Sexo</th>
		         <th>Residencia</th>
                 <th>Fecha de Nacimiento</th>
		         <th class="col-md-4">Condicion</th>
                 <th>Estado</th>
                 <th>Accion</th>
		      </tr>
		    </thead>
		    <tbody>

          <tr>
          <td>{{ $asilados->id}}</td>
          <td>{{ $asilados->cedula }}</td>
           <td>{{$asilados->nombre}}</td>
           <td>{{ $asilados->apellido }}</td>
              <td>{{ $asilados->sexo }}</td>
              <td>{{ $asilados->residencia }}</td>
              <td>{{ $asilados->fecha_nac }}</td>
              <td>{{ $asilados->condicion_especial }}</td>
              <td>{{ $asilados->estado }}</td>
            <td width="20px">
                      <a href="{{route('asilado.edit', $asilados->id)}}" class="btn btn-warning">
                          
                          Editar                        

                      </a>


                    </td>
          </tr>
		     {{--  @foreach($asilados as $asilado)
			      <tr>
              <td>{{ $asilado->id}}</td>
			        <td>{{ $asilado->cedula }}</td>
              <td>{{ $asilado->nombre }}</td>
			        <td>{{ $asilado->apellido }}</td>
              <td>{{ $asilado->sexo }}</td>
			        <td>{{ $asilado->residencia }}</td>
              <td>{{ $asilado->fecha_nac }}</td>
			        <td>{{ $asilado->condicion_especial }}</td>
              <td>{{ $asilado->estado }}</td>
                   
                
			      </tr>
		      @endforeach --}}


		    </tbody>
		  </table>
	  	</div>
	  </div>
</div>
</div>


@endsection
