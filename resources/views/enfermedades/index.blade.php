@extends('layouts.master')

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
        
           <a href="{{route('enfermedad.create')}}" class="btn btn-primary pull-right">Nuevo</a>

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
                    	<a href="{{route('enfermedad.show',$enfermedad->id)}}" class="btn btn-info">
                          
                          Ver                    		

                    	</a>
                     </td>



                   

                    <td width="10px">
                    	<a href="{{route('enfermedad.edit',$enfermedad->id)}}" class="btn btn-warning">
                          
                          Editar                    		

                    	</a>


                    </td>

          
                     <td width="10px">
                    
                    	
                    	<form action="{{action('EnfermedadController@destroy',$enfermedad['id'])}}"  method="post">

                    	{{ csrf_field() }}

                    	<input type="hidden" name="_method" value="DELETE">

                    	<button class="btn btn-danger" type="submit" onclick=" return confirm('seguro que desea eliminar?')">Borrar</button>

                    	</form>

                     </td>


			      </tr>
		      @endforeach
		    </tbody>
		  </table>
		  {!! $enfermedades->render() !!}
	  	</div>
	  </div>
   </div>
</div>
@endsection

