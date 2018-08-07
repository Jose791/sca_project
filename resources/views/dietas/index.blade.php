@extends('layouts.master')

@section('title', 'Lista de Dietas')

@section('banner')

<div class="banner">
		    	<h2>
				<a >Lista de</a>
				<i class="fa fa-angle-right"></i>
				<span>Dietas</span>
				</h2>
		    </div>

@endsection

@section('content')
	
	<h2>Todos las Dietas</h2>
	  <p>Todos Dietas registradas</p>   
	  <div class="validation-system">
 		
 		<div class="validation-form"> 

 		<div class="col-sm-4">
  
              @include('dietas.partials.aside')

           </div>          
	  <div class="panel-danger">
	  	<div class="panel-body">

	  	<h2>
	  		
           <a href="{{route('dieta.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus iconos" aria-hidden="true"></i>Añadir Dieta</a>

	  	</h2>
		  <table class="table">
		    <thead>
		      <tr>
		        <th>Dieta #</th>
		        <th>Asilado</th>  
                <th>Hora (aplicacion)</th>
                <th>Descripcion</th>
                <th colspan="3">Accion</th>
		      </tr>
		    </thead>
		    <tbody>
		      @foreach ($dietas as $dieta)
			      <tr>
			        <td>{{ $dieta->id }}</td>
			        <td>{{ $dieta->asylee->nombre }}</td>
                    <td>{{Carbon\Carbon::parse( $dieta->hora_dieta)->format('h:i A')}}</td>
                    <td>{{ $dieta->descripcion}}</td>

{{-- <td>{{ Carbon\Carbon::parse($medicina['pivot']['hora_medicamento'])->format('h:i A') }} --}}
				        </td>

                    <td width="10px">
                    	<a href="{{route('dieta.show',$dieta->id)}}" class="btn btn-info">
                          <i class="fa fa-eye iconos" aria-hidden="true"></i> 
                          Ver                    		

                    	</a>
                     </td>



                   

                    <td width="10px">
                    	<a href="{{route('dieta.edit',$dieta->id)}}" class="btn btn-warning">
                          <i class="fa fa-pencil iconos" aria-hidden="true"></i>
                          Editar                    		

                    	</a>


                    </td>

          
                     <td width="10px">
                    
                    	
                    	<form action="{{action('DietaMedicoController@destroy',$dieta['id'])}}"  method="post">

                    	{{ csrf_field() }}

                    	<input type="hidden" name="_method" value="DELETE">

                    	<button class="btn btn-danger" type="submit" onclick=" return confirm('seguro que desea eliminar?')"><i class="fa fa-trash-o iconos" aria-hidden="true"></i>Borrar</button>

                    	</form>

                     </td>
			      </tr>
		      @endforeach
		    </tbody>
		  </table>

		  {{ $dietas->links() }}
	  	</div>
	  </div>
   </div>
</div>
@endsection
