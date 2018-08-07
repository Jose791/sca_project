@extends('layouts.master')

@section('title','Mostrar Medicamento')

@section('content')
	
	<h2> medicamento</h2>
	  <p></p>   
	  <div class="validation-system">
 		
 		<div class="validation-form"> 
 		 <h2>
        
           <a href="{{route('medicamento.index')}}" class="btn btn-primary pull-right"><i class="fa fa-list iconos" aria-hidden="true"></i>Lista Medicamentos</a>

      </h2>        
	  <div class="panel-danger">
	  	<div class="panel-body">
	  		
		  <table class="table">
		    <thead>
		      <tr>
		        <th>Medicamento</th>
		        <th>Condicion</th>
		      </tr>
		    </thead>
		    <tbody>
		      
			      <tr>
			        <td>{{ $medicamentos->medicamento }}</td>
			        <td>{{ $medicamentos->condicion }}</td>

                   <td width="10px">
                    	<a href="{{route('medicamento.edit',$medicamentos->id)}}" class="btn btn-warning">
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