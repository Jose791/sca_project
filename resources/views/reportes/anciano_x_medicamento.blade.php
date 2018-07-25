@extends('layouts.master')


@section('banner')

<div class="banner">
                <h2>
                <a >Reportes</a>
                <i class="fa fa-angle-right"></i>
                <span>Anciano por medicamento </span>
                </h2>
            </div>

@endsection

@section('content')

<div class="graph">
  <div class="graph-grid">
         <div class="col-md-6 graph-1">
            <div class="grid-1">
            {{--  Grafico de barras --}}
    
              <h4>Ancianos agrupados por medicamento (grafico de barra)</h4>
                 <canvas id="grafico_barra" height="300" width="500" style="width: 500px; height: 300px;"></canvas>
            </div>
        </div>


        {{-- <div class="col-md-6 graph-2">
           <div class="grid-1">

            <h4>Ancianos agrupado por enfermedad (grafico de pastel/pie)</h4>
              <canvas id="enfermedad_asilado" height="300" width="500" style="width: 500px; height: 300px;"></canvas>
  
           </div>

        </div>

        <div class="col-md-6 graph-box1 clearfix">
          <div class="grid-1">
          Grafico de barras
    
           <h4>Ancianos agrupados por Sexo</h4>
             <canvas id="grafico_barra_anciano_x_sexo" height="300" width="500" style="width: 500px; height: 300px;"></canvas>
          </div>
        </div> --}}


     </div>
     <div class="clearfix"> </div>
</div>


@endsection





@section('scripts')

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
<script type="text/javascript">
    
   
    // GRAFICO DE BARRAS
    var ctx = document.getElementById("grafico_barra").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [
                <?php
                    foreach ($asilado_x_medicamento as $key)
                    {
                        echo "'$key->medicamento',";
                    }
                ?>],
            datasets: [{
                data: [
                <?php
                    foreach ($asilado_x_medicamento as $key)
                    {
                        echo "'$key->cantidad',";
                    }
                ?>],
                
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
                text: 'Cantidad de Asilados Agrupados por medicamento'
            },

            legend: {
                display: false
            }
        }
    });


</script>

@endsection