@extends('layouts.master')

@section('title')

Inicio

@endsection

@section('banner')

<div class="banner">
		    	<h2>
				<a href="inicio">Inicio</a>
				<i class="fa fa-angle-right"></i>
				<span>Inicio</span>
				</h2>
		    </div>

@endsection


@section('content')


{{-- @foreach($asilados as $asilado)

<tr>
 <td>{{$asilado->pivot->complemento}}</td>
</tr>

@endforeach --}}




@endsection
