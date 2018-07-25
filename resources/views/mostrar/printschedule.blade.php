@extends('layouts.my')

<br>
<br>
<br>
<br>
<br>


@section('content')
	
	<h2 style="text-align: center; font-weight: bold;">Lista Horas de Aplicar Medicamentos</h2>
	  <p> Fecha y hora de Impresion </p>  
      
        	<?php date_default_timezone_set('Europe/Madrid');?>

	  	<?=date('d/m/Y g:ia');?>


	  <div class="validation-system">
 		
 		<div class="validation-form">         
	  <div class="panel-danger">
	  	<div class="panel-body">

	   {{-- <p>
         <a href="{{ route('mostrar.pdf') }}" class="btn btn-sm btn-primary">
            Descargar horas en PDF
         </a>
       </p> --}}
		  <table class="table table-bordered">
		    <thead >
		      <tr >
		        <th>Asilado</th>
                <th>Medicamento</th>
                <th>Hora del Medicamento</th>
                <th>Complemento</th>
                <th>Marcar</th>
		      </tr>
		    </thead>
		    <tbody>
		      	@foreach($asilados as $asilado)
		      		{{-- variable de control para verificar si el asilado se le ha suministrado un medicamento x --}}
		      		

			      	@foreach($asilado['medicines'] as $medicina)
			      	<tr>
				        <td>{{ $asilado['nombre'] }}</td>
	                    <td>{{ $medicina['medicamento'] }}</td>
				        <td>{{ $medicina['pivot']['hora_medicamento'] }}</td>
	                    <td>{{ $medicina['pivot']['complemento'] }}</td>
                      <td  > 
                      

                  </td>
	                 
			      	</tr>
			      	@endforeach
		      	@endforeach
		    </tbody>
		  </table>
	  	</div>
	  </div>
  </div>
</div>
@endsection