@extends('layouts.master')

@section('title','Mostrar Enfermedad')

@section('content')
	
	<h2>Todos las Enfermedades</h2>
	  <p>Todos las Enfermedades Registradas</p>  
	  <div class="validation-system">
 		
 		<div class="validation-form">

 		<h2>
        
           <a href="{{route('enfermedades.index')}}" class="btn btn-primary pull-right"><i class="fa fa-list iconos" aria-hidden="true"></i>Lista Enfermedades</a>

      </h2>          
	  <div class="panel-danger">
	  	<div class="panel-body">

	  		 

		  <table class="table">
		    <thead>
		      <tr>
		        <th># Enfermedad </th>
		        <th>Nombre de la Enfermedad</th>
		        <th>Descripcion</th>
		        <th colspan="3">Accion</th>
		      </tr>
		    </thead>
		    <tbody>
		     
			      <tr>
			        <td>{{ $enfermedades->id }}</td>
			        <td>{{ $enfermedades->enfermedad }}</td>
			        <td>{{ $enfermedades->descripcion }}</td>

                    <td width="10px">
                    	<a href="{{route('enfermedades.edit',$enfermedades->id)}}" class="btn btn-warning">
                          <i class="fa fa-pencil iconos" aria-hidden="true"></i>
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

