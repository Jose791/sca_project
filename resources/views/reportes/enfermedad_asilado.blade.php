@extends('layouts.master')


@section('banner')

<div class="banner">
                <h2>
                <a >Reportes</a>
                <i class="fa fa-angle-right"></i>
                <span>Anciano por Enfermedad </span>
                </h2>
            </div>

@endsection

@section('content')

<div class="graph">
  <div class="graph-grid">
         <div class="col-md-6 graph-1">
            <div class="grid-1">
            {{--  Grafico de barras --}}
    
              <h4>Ancianos agrupados por enfermedad (grafico de barra)</h4>
                 <canvas id="grafico_barra" height="300" width="500" style="width: 500px; height: 300px;"></canvas>
            </div>
        </div>


        <div class="col-md-6 graph-2">
           <div class="grid-1">

            <h4>Ancianos agrupado por enfermedad (grafico de pastel/pie)</h4>
              <canvas id="enfermedad_asilado" height="300" width="500" style="width: 500px; height: 300px;"></canvas>
  
           </div>

        </div>

        <div class="col-md-6 graph-box1 clearfix">
          <div class="grid-1">
          {{-- Grafico de barras --}}
    
           <h4>Ancianos agrupados por Sexo</h4>
             <canvas id="grafico_barra_anciano_x_sexo" height="300" width="500" style="width: 500px; height: 300px;"></canvas>
          </div>
        </div>


     </div>
     <div class="clearfix"> </div>
</div>


@endsection





@section('scripts')

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
<script type="text/javascript">
    
    {{-- Grafico de pie --}}
    {{-- esto obtiene el elemento por el id mandado --}}
    var oilCanvas = document.getElementById("enfermedad_asilado");

    var oilData = {
        // esta propiedad imprime los labels... 
        labels: [
            <?php
                foreach ($asilado_enferm as $key)
                {
                    echo "'$key->enfermedad',";
                }
            ?>
        ],
        datasets: [
            {
                // esta propiedad imprime la data que viene desde el contrador
                data: [
                    <?php
                        foreach ($asilado_enferm as $key)
                        {
                            echo "'$key->cantidad',";
                        }
                    ?>
                ],

                // estos son los colores que usaria el grafico... 
                backgroundColor: [
                    "#FF3D00",
                    "#D81B60",
                    "#00B8D4",
                    "#66BB6A",
                    "#9C24DAFF" 
                ]
            }]
    };

    var pieChart = new Chart(oilCanvas, {
        type: 'pie',
        data: oilData
    });


    // GRAFICO DE BARRAS
    var ctx = document.getElementById("grafico_barra").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [
                <?php
                    foreach ($asilado_enferm as $key1)
                    {
                        echo "'$key1->enfermedad',";
                    }
                ?>],
            datasets: [{
                data: [
                <?php
                    foreach ($asilado_enferm as $key)
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
                text: 'Cantidad de Asilados Agrupados por Enfermedad'
            },

            legend: {
                display: false
            }
        }
    });

// GRAFICO DE BARRAS Anciano x Sexo
    var ctx = document.getElementById("grafico_barra_anciano_x_sexo").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [
                <?php
                    foreach ($asilado_x_sexo as $key)
                    {
                        echo "'$key->sexo',";
                    }
                ?>],
            datasets: [{
                data: [
                <?php
                    foreach ($asilado_x_sexo as $key)
                    {
                        echo "'$key->anciano',";
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
                text: 'Cantidad de Ancianos Agrupados por sexo'
            },

            legend: {
                display: false
            }
        }
    });
</script>

@endsection