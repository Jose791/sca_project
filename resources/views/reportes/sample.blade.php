@extends('layouts.master')

@section('content')

<div class="row">
	<div class="col-md-12">
		<h4>Parámetros para la consulta</h4>
		<br>
		<form>
			<div class="form-group">
				<label for="medicinas">Medicinas</label>
				<select class="form-control" id="medicina">
					@foreach($medicinas as $medicina)
						<option value="{{ $medicina->id }}">{{ $medicina->medicamento }}</option>
					@endforeach
				</select>
			</div>
		</form>
		<button class="btn btn-info" id="consultar">Consultar</button>
	</div>

	{{-- Grafico de barras --}}
    <div class="col-lg-6" style="margin-top: 50px;">
        <div class="grafico_medicinas">
        	<canvas id="grafico_medicinas" height="250"></canvas>
        </div>
    </div>
</div>

@endsection


@section('scripts')

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
<script type="text/javascript">
	
	$('#consultar').click(function () {
		
		$.ajax({
	        type: 'POST',
	        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
	        url: '{{ route('sample/get') }}',
	        data: { 'medicina_id': $('#medicina').val() },
	       	success: function(response) {
	       		
	       		var medicinas = response.data.medicinas;
	       		var consumo = response.data.consumo;

	       		// GRAFICO DE BARRAS
	       		$("canvas#grafico_medicinas").remove();
				$("div.grafico_medicinas").append('<canvas id="grafico_medicinas" class="animated fadeIn" height="250"></canvas>');

			    var ctx = document.getElementById("grafico_medicinas").getContext('2d');
			    var myChart = new Chart(ctx, {
			        type: 'bar',
			        data: {
			            labels: medicinas,
			            datasets: [{
			                data: consumo,
			                
			                backgroundColor: [
			                    '#00ACC1',
			                    '#FBC02D',
			                    '#424242',
			                    '#FF3D00',
			                    '#d50000',
			                    '#E040FB',
			                    '#388E3C',
			                    '#03A9F4',
			                    '#EC407A',
			                    '#FFCC80',
			                    '#757575',
			                    '#607D8B'
			                ],
			                borderColor: [
			                    '#00ACC1',
			                    '#FBC02D',
			                    '#424242',
			                    '#FF3D00',
			                    '#d50000',
			                    '#E040FB',
			                    '#388E3C',
			                    '#03A9F4',
			                    '#EC407A',
			                    '#FFCC80',
			                    '#757575',
			                    '#607D8B'
			                ],
			                borderWidth: 2
			            }]
			        },
			        options: {
			            scales: {
			                yAxes: [{
			                    ticks: {
			                        beginAtZero: true
			                    }
			                }]
			            },

			            title: {
			                display: true,
			                text: 'Cantidad de Asilados que Utilizan Un Medicamento X'
			            },

			            legend: {
			                display: false
			            }
			        }
			    });
	       	}
	    });
	});

</script>

@endsection