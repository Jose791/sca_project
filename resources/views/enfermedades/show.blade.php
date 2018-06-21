@extends('layouts.master')

@section('content')
	
	<h2>Todos las Enfermedades</h2>
	  <p>Todos las Enfermedades Registradas</p>  
	  <div class="validation-system">
 		
 		<div class="validation-form">          
	  <div class="panel-danger">
	  	<div class="panel-body">

	  		 

		  <table class="table">
		    <thead>
		      <tr>
		        <th># Enfermedad </th>
		        <th>Nombre de la Enfermedad</th>
		        {{-- <th>Descripcion</th> --}}
		        <th colspan="3">Accion</th>
		      </tr>
		    </thead>
		    <tbody>
		     
			      <tr>
			        <td>{{ $enfermedades->id }}</td>
			        <td>{{ $enfermedades->enfermedad }}</td>
			        {{-- <td>{{ $enfermedades->descripcion }}</td>
 --}}
                    <td width="10px">
                    	<a href="{{route('enfermedad.edit',$enfermedades->id)}}" class="btn btn-warning">
                          
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

