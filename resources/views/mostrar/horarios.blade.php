@extends('layouts.master')

@section('title','Horarios Medicamentos')

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
		        <th>Anciano</th>
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
		      		
		      		<tr>
				        <td>{{ $asilado['asylee']['nombre'] }}</td>
	                    <td>{{ $asilado['medicine']['medicamento'] }}</td>
				        <td>{{ Carbon\Carbon::parse($asilado['hora_medicamento'])->format('h:i A') }}
				        </td>
	                    <td>{{ $asilado['complemento'] }}</td>

	                    <td width="10px">
	                    	@if(!empty($asilado['asylee']['schedules']))
	                    		{{-- comprueba si la medicina ha sido suministrada o no --}}
	                    		@foreach($asilado['asylee']['schedules'] as $schedule)
		                    		@if($asilado['medicine_id'] == $schedule['medicine_id'])
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
								<form action="{{ route('mostrar.store', ['asylee_id' => $asilado['asylee_id'], 'medicine_id' => $asilado['medicine_id']]) }}" method="POST">
									@csrf
									<button type="submit" class="btn btn-info"><i class="fa fa-check-square-o iconos" aria-hidden="true"></i>Suministrar</button>
								</form>
							@endif
	                    </td>
			      	</tr>
		      	@endforeach
		    </tbody>
		  </table>
		  {!! $asilados->links() !!}
	  	</div>
	  </div>
  </div>
</div>
@endsection