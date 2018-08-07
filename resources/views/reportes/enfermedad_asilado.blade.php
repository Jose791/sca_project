@extends('layouts.master')
@section('title', 'Lista de Reportes')

@section('banner')

<div class="banner">
                <h2>
                <a >Reportes</a>
                <i class="fa fa-angle-right"></i>
                <span>todos</span>
                </h2>
            </div>

@endsection

@section('content')

<div class="content-top">

<div class="col-md-12 ">
            <h2>Reportes</h2>
            <br>
        </div>

     
    
        <button id="" type="button" class="btn btn-primary " data-toggle="modal" data-target="#myModal"><i class="fa fa-bar-chart iconos" aria-hidden="true"></i>Ancianos/Enfermedad</button>

        <button  type="button" class="btn btn-primary  " data-toggle="modal" data-target="#anciano_sexo"><i class="fa fa-bar-chart iconos" aria-hidden="true"></i>Ancianos/Sexo</button>

        <button  type="button" class="btn btn-primary  " data-toggle="modal" data-target="#anciano_medicamento"><i class="fa fa-bar-chart iconos" aria-hidden="true"></i>Ancianos/medicamento</button>

        <button  type="button" class="btn btn-primary  " data-toggle="modal" data-target="#anciano_provincia"><i class="fa fa-bar-chart iconos" aria-hidden="true"></i>Ancianos/provincia</button>  



     </div>


       



<!-- Modal Ancianos x Enfermedades -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
    
      <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ancianos agrupados por Enfermedad </h4>
      </div>
      <div class="modal-body">
        {{-- <h4>Ancianos agrupados por enfermedad (grafico de barra)</h4> --}}
         <canvas id="grafico_barra" height="300" width="500" style="width: 500px; height: 300px;"></canvas>
  
      </div>
     
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>




<!-- Modal Ancianos x Sexo -->
<div id="anciano_sexo" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">


        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ancianos agrupados por sexo</h4>
      </div>
      <div class="modal-body">
        {{-- <h4>Ancianos agrupados por enfermedad (grafico de barra)</h4> --}}
         
     {{-- <h4>Ancianos agrupado por sexo </h4> --}}
              <canvas id="grafico_barra_anciano_x_sexo" height="300" width="500" style="width: 500px; height: 300px;"></canvas>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
      </div>
    </div>

  </div>
</div>



<!-- Modal Ancianos x Medicamentos -->
<div id="anciano_medicamento" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">


        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ancianos agrupados por Medicamento </h4>
      </div>
      <div class="modal-body">
        {{-- <h4>Ancianos agrupados por enfermedad (grafico de barra)</h4> --}}
         
     {{-- <h4>Ancianos agrupados por medicamento (grafico de barra)</h4> --}}
                 <canvas id="grafico_barra2" height="300" width="500" style="width: 500px; height: 300px;"></canvas>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
      </div>
    </div>

  </div>

</div>


<div class="clearfix"> </div>


<!-- Modal Ancianos x provincia -->
<div id="anciano_provincia" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">


        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ancianos agrupados por Provincia</h4>
      </div>
      <div class="modal-body">
        {{-- <h4>Ancianos agrupados por Provincia</h4> --}}
         <canvas id="grafico_barra_anciano_x_provincia" height="300" width="500" style="width: 500px; height: 300px;"></canvas>
  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
      </div>
    </div>

  </div>
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
                text: 'Cantidad de Ancianos Agrupados por Enfermedad'
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



    // GRAFICO DE BARRAS ancianos x medicamentos
    var ctx = document.getElementById("grafico_barra2").getContext('2d');
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
                text: 'Cantidad de Ancianos Agrupados por medicamento'
            },

            legend: {
                display: false
            }
        }
    });


// GRAFICO DE BARRAS Anciano x provincia
    var ctx = document.getElementById("grafico_barra_anciano_x_provincia").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [
                <?php
                    foreach ($asilado_x_provincia as $key)
                    {
                        echo "'$key->residencia',";
                    }
                ?>],
            datasets: [{
                data: [
                <?php
                    foreach ($asilado_x_provincia as $key)
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
                text: 'Cantidad de Ancianos Agrupados por Provincia'
            },

            legend: {
                display: false
            }
        }
    });

</script>



@endsection




