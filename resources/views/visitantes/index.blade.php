@extends('layouts.master')

@section('content')
	
	<h2>Todos los Visitantes</h2>
	  <p>Todos los Visitantes Registrados</p> 
	  <div class="validation-system">
 		
 		<div class="validation-form"> 

    <div class="col-sm-4">
  
              @include('visitantes.partials.aside')

           </div>            
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
		      @foreach($visitantes as $visitante) 
			      <tr>
			        <td>{{ $visitante->id }}</td>
			        <td>{{ $visitante->nombre }}</td>
                    <td>{{ $visitante->apellido }}</td>
			        <td>{{ $visitante->cedula }}</td>
                    <td>{{ $visitante->direccion }}</td>
                    <td>{{ $visitante->sexo }}</td>
                    <td width="10px">
                    	<a href="{{route('visitante.show',$visitante->id)}}" class="btn btn-info">
                          
                          Ver                    		

                    	</a>
                     </td>



                   

                    <td width="10px">
                    	<a href="{{route('visitante.edit',$visitante->id)}}" class="btn btn-warning">
                          
                          Editar                    		

                    	</a>


                    </td>

          
                     <td width="10px">
                    
                    	
                    	<form action="{{action('VisitanteController@destroy',$visitante['id'])}}"  method="post">

                    	{{ csrf_field() }}

                    	<input type="hidden" name="_method" value="DELETE">

                    	<button class="btn btn-danger" type="submit" onclick=" return confirm('seguro que desea eliminar?')">Borrar</button>

                    	</form>

                     </td>
			      </tr>
		      @endforeach
		    </tbody>
		  </table>
      {!! $visitantes->render() !!}
	  	</div>
	  </div>
</div>
</div>
@endsection


 