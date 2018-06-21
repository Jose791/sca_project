@extends('layouts.master')

@section('content')
	
	<h2> medicamento</h2>
	  <p></p>   
	  <div class="validation-system">
 		
 		<div class="validation-form">         
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