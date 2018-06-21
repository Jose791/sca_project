@extends('layouts.master')

@section('content')
	
	<h2>Todos los medicamentos</h2>
	  <p>Todos los medicamentos registrados</p>   
	  <div class="validation-system">
 		
 		<div class="validation-form">   

 		<div class="col-sm-4">
  
              @include('medicamentos.partials.aside')

           </div>        
	  <div class="panel-danger">
	  	<div class="panel-body">

	  		<h2>
        
           <a href="{{route('medicamento.create')}}" class="btn btn-primary pull-right">Nuevo</a>

      </h2>
		  <table class="table">
		    <thead>
		      <tr>
		        <th>Medicamento</th>
		        <th>Condicion</th>
		      </tr>
		    </thead>
		    <tbody>
		      @foreach($medicamentos as $medicamento)
			      <tr>
			        <td>{{ $medicamento->medicamento }}</td>
			        <td>{{ $medicamento->condicion }}</td>



                   <td width="10px">
                    	<a href="{{route('medicamento.show',$medicamento->id)}}" class="btn btn-info">
                          
                          Ver                    		

                    	</a>
                     </td>



                   

                    <td width="10px">
                    	<a href="{{route('medicamento.edit',$medicamento->id)}}" class="btn btn-warning">
                          
                          Editar                    		

                    	</a>


                    </td>

          
                     <td width="10px">
                    
                    	
                    	<form action="{{action('MedicamentoController@destroy',$medicamento['id'])}}"  method="post">

                    	{{ csrf_field() }}

                    	<input type="hidden" name="_method" value="DELETE">

                    	<button class="btn btn-danger" type="submit" onclick=" return confirm('seguro que desea eliminar?')">Borrar</button>

                    	</form>

                     </td>
			      </tr>
		      @endforeach
		    </tbody>
		  </table>
	  	</div>
	  </div>
  </div>
</div>
@endsection