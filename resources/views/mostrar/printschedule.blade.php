@extends('layouts.my')

<br>
<br>
<br>
<br>
<br>


@section('content')
	
	<h2 style="text-align: center; font-weight: bold;">Lista Horas de Aplicar Medicamentos</h2>
	 <br>
	 <br>
	  <p> Fecha y hora de Impresion </p>  
       
       <?php date_default_timezone_set('Europe/Madrid');?>

	  	<?=date('d/m/Y g:ia');?>


	  {{-- <div class="validation-system">
 		
 		<div class="validation-form">  --}}        
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
		        <th>Anciano</th>
                <th>Medicamento</th>
                <th>Hora del Medicamento</th>
                <th>Complemento</th>
                <th>Marcar</th>
		      </tr>
		    </thead>
		    <tbody>
		      	@foreach($asilados as $asilado)
		      		
		      		

			      	{{-- @foreach($asilado['medicines'] as $medicina) --}}
			      	 <tr>
				        <td>{{ $asilado['asylee']['nombre'] }}</td>
	                    <td>{{ $asilado['medicine']['medicamento'] }}</td>
				        <td>{{ Carbon\Carbon::parse($asilado['hora_medicamento'])->format('h:i A') }}</td>
	                    <td>{{ $asilado['complemento'] }}</td>
                        <td  > 
                      

                        </td>
	                 
			      	</tr>
			      	{{-- @endforeach --}}
		      	@endforeach
		    </tbody>
		  </table>
	  	</div>
	  </div>
 {{--  </div>
</div> --}}
@endsection