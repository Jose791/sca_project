
<!DOCTYPE HTML>
<html lang="es">
<head>
    <title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="SCA Project" />
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href=" {{asset('css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' />
@yield('styles')

<!-- Custom Theme files -->
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
<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">

		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
			

			
		});
		</script>

<!----->

</head>
<body>
<div id="wrapper">
        <!----->
    <nav class="navbar-default navbar-static-top" role="navigation">
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <h1> <a class="navbar-brand" href="#">SCA</a></h1>         
			   </div>
			 <div class=" border-bottom">
        	<div class="full-left">
        	  <section class="full-top">
				<button id="toggle" title="Pantalla Completa"><i class="fa fa-arrows-alt"></i></button>	
			</section>
			{{-- <form class=" navbar-left-right">
              <input type="text"  value="Buscar..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
              <input type="submit" value="" class="fa fa-search">
            </form> --}}
            <div class="clearfix"> </div>
           </div>
     
       
            <!-- Brand and toggle get grouped for better mobile display -->
		 
		   <!-- Collect the nav links, forms, and other content for toggling -->
		  <div class="drop-men" >
		        <ul class=" nav_1">
		           
		    		<li class="dropdown at-drop">
		              <a href="#" class="dropdown-toggle dropdown-at " data-toggle="dropdown"><i class="fa fa-bell" aria-hidden="true"></i>
                       
                       @if (count(Auth::user()->unreadNotifications))

		         <span class="number">{{count(Auth::user()->unreadNotifications)}}</span>
                 
                        @endif

	       	           </a>

		             

		         </li>
					<li class="dropdown">
		             

		              <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret">{{ Auth::user()->name}} <i class="caret"></i></span>
                      
                      @if(Auth::user()->type=='admin')
		              	  

		              	  <img src="{{asset('images/itachi.jpg')}}">
                       @else   

		              	<img src="{{asset('images/wo.jpg')}}">

		              	@endif
		              </a>

		              <ul class="dropdown-menu " role="menu">
<!--
		                <li><a href="profile.html"><i class="fa fa-user"></i>Edit Profile</a></li>
		                <li><a href="inbox.html"><i class="fa fa-envelope"></i>Inbox</a></li>
		                <li><a href="calendar.html"><i class="fa fa-calendar"></i>Calender</a></li>
		                <li><a href="inbox.html"><i class="fa fa-clipboard"></i>Tasks</a></li>
-->
                        <li><a  class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class=""></i>{{ __('Salir') }}</a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                          </li>

		              </ul>

		            </li>

		           
		        </ul>
		     </div> <!-- /.navbar-collapse -->
			<div class="clearfix">
       
     </div>
	  
		    <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
				
                    <li>
                        <a href="{{url('/inicio')}}" class=" hvr-bounce-to-right"><i class="fa fa-home nav_icon "></i><span class="nav-label">Inicio</span> </a>
                    </li>
                   
                    
                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-list nav_icon"></i> <span class="nav-label">Formularios</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level ">
                            <li><a href="{{url('/asilados')}}" class=" hvr-bounce-to-right"><i class="fa fa-align-left nav_icon"></i>Ancianos</a></li>
                            <li><a href="{{url('enfermedades')}}" class=" hvr-bounce-to-right"><i class="fa fa-align-left nav_icon"></i>Enfermedades</a></li>
                            <li><a href="{{url('medicamentos')}}" class=" hvr-bounce-to-right"><i class="fa fa-align-left nav_icon"></i>Medicamentos</a></li>
                            <li><a href="{{url('dietas')}}" class=" hvr-bounce-to-right"><i class="fa fa-align-left nav_icon"></i>Dietas</a></li>
                            <li><a href="{{url('chequeos_medicos')}}" class=" hvr-bounce-to-right"><i class="fa fa-align-left nav_icon"></i>Chequeos Medicos</a></li>
                            <li><a href="{{url('medicamento_asilado')}}" class=" hvr-bounce-to-right"><i class="fa fa-align-left nav_icon"></i>Anciano Medicamento</a></li>
                             <li><a href="{{url('enfermedad')}}" class=" hvr-bounce-to-right"><i class="fa fa-align-left nav_icon"></i>Anciano Enfermedad</a></li>
                            <li><a href="{{url('visitantes')}}" class=" hvr-bounce-to-right"><i class="fa fa-align-left nav_icon"></i>Visitantes</a></li>
                            <li><a href="{{url('visitas')}}" class=" hvr-bounce-to-right"><i class="fa fa-align-left nav_icon"></i>Visitas</a></li>
                        </ul>
                    </li>
                    
                       {{-- <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-list nav_icon"></i> <span class="nav-label">Index</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{url('/asilados_registrados')}}" class=" hvr-bounce-to-right"><i class="fa fa-align-left nav_icon"></i>Ancianos lista</a></li>
                            <li><a href="{{url('enfermedades_registradas')}}" class=" hvr-bounce-to-right"><i class="fa fa-align-left nav_icon"></i>Enfermedades</a></li>
                            <li><a href="{{url('medicamentos_registrados')}}" class=" hvr-bounce-to-right"><i class="fa fa-align-left nav_icon"></i>Medicamentos</a></li>
                            <li><a href="{{url('dietas_registradas')}}" class=" hvr-bounce-to-right"><i class="fa fa-align-left nav_icon"></i>Dietas</a></li>
                            <li><a href="{{url('chequeos_registrados')}}" class=" hvr-bounce-to-right"><i class="fa fa-align-left nav_icon"></i>Chequeos Medicos</a></li>
                            <li><a href="{{url('medicamento_asilado_registrados')}}" class=" hvr-bounce-to-right"><i class="fa fa-align-left nav_icon"></i>Anciano Medicamento</a></li>
                             <li><a href="{{url('enfermedad_asilado')}}" class=" hvr-bounce-to-right"><i class="fa fa-align-left nav_icon"></i>Anciano Enfermedad</a></li>
                            <li><a href="{{url('visitantes_registrados')}}" class=" hvr-bounce-to-right"><i class="fa fa-align-left nav_icon"></i>Visitantes</a></li>
                            <li><a href="{{url('visitas_registradas')}}" class=" hvr-bounce-to-right"><i class="fa fa-align-left nav_icon"></i>Visitas</a></li>
                        </ul>
                    </li> --}}
                   
                  @if(Auth::user()->type=='admin')
                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Reportes</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{url('/chart')}}" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i>Anciano x Enfermedad</a></li>
                            
                            {{-- <li><a href="{{url('sample')}}" class=" hvr-bounce-to-right"><i class="fa fa-area-chart nav_icon"></i>Anciano x Medicamento</a></li> --}}

                            <li><a href="{{url('asilado_x_medicamento')}}" class=" hvr-bounce-to-right"><i class="fa fa-area-chart nav_icon"></i>Anciano x Medicamento</a></li>
			
						{{-- <li><a href="#" class=" hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon"></i>#</a></li> --}}

					              </ul>
                    </li>
                    
                   
                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-cog nav_icon"></i> <span class="nav-label">Configuraciones</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{ route('login') }}" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>Iniciar Sesion</a></li>
                            <li><a href="{{ route('register') }}" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>Registrarse</a></li>
                                                   
                        </ul>
                    </li>

                    @endif
                     
                </ul>
            </div>
			</div>

 </nav>
		 <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
 	<!--banner-->	
		  <div>
           
           @yield('banner')
           
           
           </div>
           
           <div>
           
           @yield('title_form')
           
           </div>
           
           
  <div class="validation-system">
 		
      @yield('content')

  </div>         
<div class="copy">
            <p> &copy; 2018 SCA. All Rights Reserved | Design by <a href="#" target="_blank">SCA</a> </p>	    </div>
		</div>
		</div>
		<div class="clearfix"> </div>
       </div>
     
<!---->
<!--scrolling js-->
	<script src="{{asset('js/jquery.nicescroll.js')}}"></script>
	<script src="{{asset('js/scripts.js')}}"></script>
	@yield('scripts')
	<script src="{{asset('js/toastr.min.js')}}"></script>

	<script>
		
      @if(Session::has('info'))

        toastr.info("{{Session::get('info')}}")
     


      @endif


      @if (Session::has('success'))


         toastr.success("{{Session::get('success')}}")

      @endif 

     



	</script>
	<!--//scrolling js-->
</body>
</html>