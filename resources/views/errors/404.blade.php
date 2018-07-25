@extends('layouts.error404')

@section('content')



 <div class="four">
		<img src="{{asset('images/404.png')}}" alt="" />
		<p>Pagina no Encontrada.</p>
		<a href="{{ URL::previous() }}" class="hvr-shutter-in-horizontal">Volver Atras</a>
	</div>



@endsection