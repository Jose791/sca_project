<html>

<head>

{{-- <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> --}}
<link href=" {{asset('css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' />

<link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />

<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet"> 
<script src="{{asset('js/jquery.min.js')}}"> </script>
<script src="{{asset('js/bootstrap.min.js')}}"> </script>
<script src="{{asset('js/Chart.js')}}"></script>
 
<!-- Mainly scripts -->
<script src="{{asset('js/jquery.metisMenu.js')}}"></script>
<script src="{{asset('js/jquery.slimscroll.min.js')}}"></script>
<!-- Custom and plugin javascript -->
<link href="{{asset('css/custom.css')}}" rel="stylesheet">
<link rel="stylesheet"  href="{{asset('css/toastr.min.css')}}">
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{asset('js/screenfull.js')}}"></script>
<script src="{{asset('js/jquery.printPage.js')}}"></script>


<!-- Fonts -->

{{-- <link href="https://fonts.googleapis.com/css?family=Coda+Caption:800" rel="stylesheet"> --}}
{{-- <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet"> --}}
<link rel="stylesheet" type="text/css" href="{{asset('fonts/Merriweather-regular.ttf')}}">




<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/jquery-2.2.4.min.js')}}"></script>


<script src="{{asset('js/jquery.printPage.js')}}"></script>

</head>

<body>

     <div class="container">

      <div class="col-md-12">

               @yield('content')

      </div>

     </div>

</body>

</html>