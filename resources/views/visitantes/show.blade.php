@extends('layouts.master')

@section('content')
	
	<h2>Todos los Visitantes</h2>
	  <p>Todos los Visitantes Registrados</p> 
	  <div class="validation-system">
 		
 		<div class="validation-form">           
	  <div class="panel-danger">
	  	<div class="panel-body">

	  		<h2>
        
           <a href="{{route('visitante.create')}}" class="btn btn-primary pull-right">Nuevo</a>

      </h2>
		  <table class="table">
		    <thead>
		      <tr>
		        <th>Visitante #</th>
		        <th>Nombre</th>
                <th>Apellido</th>
                <th>Cedula</th>
                <th>Direccion</th>
                <th>Sexo</th>
		      </tr>
		    </thead>
		    <tbody>
		      
			      <tr>
			        <td>{{ $visitantes->id }}</td>
			        <td>{{ $visitantes->nombre }}</td>
              <td>{{ $visitantes->apellido }}</td>
			        <td>{{ $visitantes->cedula }}</td>
              <td>{{ $visitantes->direccion }}</td>
              <td>{{ $visitantes->sexo }}</td>
                    
                    <td width="10px">
                    	<a href="{{route('visitante.edit',$visitantes->id)}}" class="btn btn-warning">
                          
                          Editar                    		

                    	</a>


                    </td>

			      </tr>
		      
		    </tbody>
		  </table>
	  	</div>
	  </div>
</div>
</div>
@endsection


 