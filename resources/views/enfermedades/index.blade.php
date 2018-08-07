@extends('layouts.master')

@section('title', 'Lista de Enfermedades')

@section('banner')

<div class="banner">
		    	<h2>
				<a >Lista de</a>
				<i class="fa fa-angle-right"></i>
				<span>Enfermedades</span>
				</h2>
		    </div>

@endsection

@section('content')
	
	<h2>Todos las Enfermedades</h2>
	  <p>Todos las Enfermedades Registradas</p>  
	  <div class="validation-system">
 		
 		<div class="validation-form">  

 		<div class="col-sm-4">
  
              @include('enfermedades.partials.aside')

           </div>  

	  <div class="panel-danger">
	  	<div class="panel-body">

	  	   <h2>
        
           <a href="{{route('enfermedades.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus iconos" aria-hidden="true"></i>Añadir Enfermedad</a>

           </h2>

		  <table class="table">
		    <thead>
		      <tr>
		        <th># Enfermedad</th>
		        <th>Nombre</th>
		       {{--  <th>Descripcion</th> --}}
		        <th colspan="3">Accion</th>
		      </tr>
		    </thead>
		    <tbody>
		      @foreach($enfermedades as $enfermedad)
			      <tr>
			        <td>{{ $enfermedad->id }}</td>
			        <td>{{ $enfermedad->enfermedad }}</td>
                   {{--  <td>{{ $enfermedad->descripcion }}</td> --}}

                   <td width="10px">
                    	<a href="{{route('enfermedades.show',$enfermedad->id)}}" class="btn btn-info">
                          <i class="fa fa-eye iconos" aria-hidden="true"></i>
                          Ver                    		

                    	</a>
                     </td>



                   

                    <td width="10px">
                    	<a href="{{route('enfermedades.edit',$enfermedad->id)}}" class="btn btn-warning">
                          <i class="fa fa-pencil iconos" aria-hidden="true"></i>
                          Editar                    		

                    	</a>


                    </td>

          
                     <td width="10px">
                    
                    	
                    	<form action="{{action('EnfermedadController@destroy',$enfermedad['id'])}}"  method="post">

                    	{{ csrf_field() }}

                    	<input type="hidden" name="_method" value="DELETE">

                    	<button class="btn btn-danger" type="submit" onclick=" return confirm('seguro que desea eliminar?')"><i class="fa fa-trash-o iconos" aria-hidden="true"></i>Borrar</button>

                    	</form>

                     </td>


			      </tr>
		      @endforeach
		    </tbody>
		  </table>
		  {!! $enfermedades->links() !!}
	  	</div>
	  </div>
   </div>
</div>
@endsection

