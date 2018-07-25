@extends('layouts.master')

@section('content')
	
	<h2>Todos los Horarios Registrados</h2>
	  <p>Todas las Horas de Aplicar Medicamentos</p>   
	  <div class="validation-system">


   
 		
 		<div class="validation-form">         
	  <div class="panel-danger">
	  	<div class="panel-body">

	  {{--  <p> --}}
         <a href="{{ url('descargar-horarios') }}" class="btnprn btn btn-primary"><i class="fa fa-print iconos" aria-hidden="true"></i>
            Imprimir Lista
         </a>

         <script type = "text/javascript">

            $(document).ready(function(){

               $('.btnprn').printPage();

            });

        </script>
         {{-- <a href="{{ url('/prnpriview') }}" class="btnprn btn"> Vista previa de impresión </a>  --}}
       {{-- </p> --}}
		  <table class="table ">
		    <thead>
		      <tr class="tr">
		        <th>Asilado</th>
                <th>Medicamento</th>
                <th>Hora del Medicamento</th>
                <th>Complemento</th>
                <th>Acciones</th>
		      </tr>
		    </thead>
		    <tbody>
		      	@foreach($asilados as $asilado)
		      		{{-- variable de control para verificar si el asilado se le ha suministrado un medicamento x --}}
		      		<?php $suministrado = false; ?>

			      	@foreach($asilado['medicines'] as $medicina)
			      	<tr>
				        <td>{{ $asilado['nombre'] }}</td>
	                    <td>{{ $medicina['medicamento'] }}</td>
				        <td>{{ $medicina['pivot']['hora_medicamento'] }}</td>
	                    <td>{{ $medicina['pivot']['complemento'] }}</td>

	                    <td width="10px">
	                    	@if(!empty($asilado['schedules']))
	                    		{{-- comprueba si la medicina ha sido suministrada o no --}}
	                    		@foreach($asilado['schedules'] as $schedule)
		                    		@if($medicina['id'] == $schedule['medicine_id'])
										@php $suministrado = true; @endphp
										@break
									@else
										@php $suministrado = false; @endphp
									@endif
								@endforeach
	                    	@endif
							
							{{-- comprueba de que el asilado se le ha suministrado el medicamento o no --}}
	                    	@if($suministrado)
								<span class="label label-success">Suministado</span>
							@else
								<form action="{{ route('mostrar.store', ['asylee_id' => $asilado['id'], 'medicine_id' => $medicina['id']]) }}" method="POST">
									@csrf
									<button type="submit" class="btn btn-info">Suministrar</button>
								</form>
							@endif
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