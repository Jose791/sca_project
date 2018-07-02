
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
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{asset('js/screenfull.js')}}"></script>
<script src="{{asset('jquery.maskedinput.min.js')}}" ></script>
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
               <h1> <a class="navbar-brand" href="inicio">SCA</a></h1>         
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
		              <a href="#" class="dropdown-toggle dropdown-at " data-toggle="dropdown"><i class="fa fa-globe"></i>
                       
                       @if (count(Auth::user()->unreadNotifications))

		         <span class="number">{{count(Auth::user()->unreadNotifications)}}</span>
                 
                        @endif

	       	           </a>

		              <ul class="dropdown-menu" role="menu">

		              	{{-- <li><a style="color: green" href="{{route('markRead')}}">Marcar todas como leidas</a></li> --}}
        
           {{--  @foreach (Auth::user()->unreadNotifications as $notification)
            
             <li style="background-color:lightgray">
                 <a href="#"><i> </i>  <b>{{ $notification->data['data'] }}</b></a>
             </li>

            @endforeach
        

         
            @foreach (Auth::user()->readNotifications as $notification)
              <li>
                <a href="#"><i> </i>  <b>{{ $notification->data['data'] }}</b></a>
              </li>
            @endforeach --}}
        
    </ul>

	
<!--
		              <ul class="dropdown-menu menu1 " role="menu">
		                <li><a href="#">
		               
		                	<div class="user-new">
		                	<p>New user registered</p>
		                	<span>40 seconds ago</span>
		                	</div>
		                	<div class="user-new-left">
		                
		                	<i class="fa fa-user-plus"></i>
		                	</div>
		                	<div class="clearfix"> </div>
		                	</a></li>
		                <li><a href="#">
		                	<div class="user-new">
		                	<p>Someone special liked this</p>
		                	<span>3 minutes ago</span>
		                	</div>
		                	<div class="user-new-left">
		                
		                	<i class="fa fa-heart"></i>
		                	</div>
		                	<div class="clearfix"> </div>
		                </a></li>
		                <li><a href="#">
		                	<div class="user-new">
		                	<p>John cancelled the event</p>
		                	<span>4 hours ago</span>
		                	</div>
		                	<div class="user-new-left">
		                
		                	<i class="fa fa-times"></i>
		                	</div>
		                	<div class="clearfix"> </div>
		                </a></li>
		                <li><a href="#">
		                	<div class="user-new">
		                	<p>The server is status is stable</p>
		                	<span>yesterday at 08:30am</span>
		                	</div>
		                	<div class="user-new-left">
		                
		                	<i class="fa fa-info"></i>
		                	</div>
		                	<div class="clearfix"> </div>
		                </a></li>
		                <li><a href="#">
		                	<div class="user-new">
		                	<p>New comments waiting approval</p>
		                	<span>Last Week</span>
		                	</div>
		                	<div class="user-new-left">
		                
		                	<i class="fa fa-rss"></i>
		                	</div>
		                	<div class="clearfix"> </div>
		                </a></li>
		                <li><a href="#" class="view">View all messages</a></li>
		              </ul>
-->
		            </li>
					<li class="dropdown">
		              <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret">{{ Auth::user()->name }}<i class="caret"></i></span><img src="{{asset('images/wo.jpg')}}"></a>
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
                   
                    
					<!-- <li>
                        <a href="inbox.html" class=" hvr-bounce-to-right"><i class="fa fa-inbox nav_icon"></i> <span class="nav-label">Inbox</span> </a>
                    </li>
                    
                    <li>
                        <a href="gallery.html" class=" hvr-bounce-to-right"><i class="fa fa-picture-o nav_icon"></i> <span class="nav-label">Gallery</span> </a>
                    </li>
                     <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-desktop nav_icon"></i> <span class="nav-label">Pages</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="404.html" class=" hvr-bounce-to-right"> <i class="fa fa-info-circle nav_icon"></i>Error 404</a></li>
                            <li><a href="faq.html" class=" hvr-bounce-to-right"><i class="fa fa-question-circle nav_icon"></i>FAQ</a></li>
                            <li><a href="blank.html" class=" hvr-bounce-to-right"><i class="fa fa-file-o nav_icon"></i>Blank</a></li>
                       </ul>
                    </li>
                     <li>
                        <a href="layout.html" class=" hvr-bounce-to-right"><i class="fa fa-th nav_icon"></i> <span class="nav-label">Grid Layouts</span> </a>
                    </li>
                   -->
                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-list nav_icon"></i> <span class="nav-label">Formularios</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{url('/asilados')}}" class=" hvr-bounce-to-right"><i class="fa fa-align-left nav_icon"></i>Ansianos</a></li>
                            <li><a href="{{url('enfermedades')}}" class=" hvr-bounce-to-right"><i class="fa fa-align-left nav_icon"></i>Enfermedades</a></li>
                            <li><a href="{{url('medicamentos')}}" class=" hvr-bounce-to-right"><i class="fa fa-align-left nav_icon"></i>Medicamentos</a></li>
                            <li><a href="dietas" class=" hvr-bounce-to-right"><i class="fa fa-align-left nav_icon"></i>Dietas</a></li>
                            <li><a href="{{url('chequeos_medicos')}}" class=" hvr-bounce-to-right"><i class="fa fa-align-left nav_icon"></i>Chequeos Medicos</a></li>
                            <li><a href="{{url('medicamento_asilado')}}" class=" hvr-bounce-to-right"><i class="fa fa-align-left nav_icon"></i>Asilado Medicamento</a></li>
                            <li><a href="{{url('visitantes')}}" class=" hvr-bounce-to-right"><i class="fa fa-align-left nav_icon"></i>Visitantes</a></li>
                            <li><a href="{{url('visitas')}}" class=" hvr-bounce-to-right"><i class="fa fa-align-left nav_icon"></i>Visitas</a></li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Reportes</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{url('/chart')}}" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i>Reporte #1</a></li>
                            
                            <li><a href="#" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i>Anciano x Medicamento</a></li>
			
						<li><a href="#" class=" hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon"></i>#</a></li>

					   </ul>
                    </li>
                    
                   
                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-cog nav_icon"></i> <span class="nav-label">Configuraciones</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{ route('login') }}" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>Iniciar Sesion</a></li>
                            <li><a href="{{ route('register') }}" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>Registrarse</a></li>
                                                   
                        </ul>
                    </li>
                     
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
	<!--//scrolling js-->
</body>
</html>