@extends('layouts.master')

@section('title', 'Inicio')

@section('content')
	<div class="content-top">
		<div class="col-md-12">
			<h2><i class="fa fa-tachometer"></i> Dashboard</h2>
			<br>
		</div>

		<div class="col-md-4">
			<a href="{{url('/asilados_registrados')}}">
			<div class="content-top-1">
				<div class="col-md-6 top-content">
					<h5>Ancianos</h5>
					<label>{{ $asilados }}</label>
				</div>

				<div class="col-md-4">
					<i class="fa fa-user text-info" style="font-size: 50px;"></i>
				</div>
			
			 	<div class="clearfix"> </div>
			</div>
			</a>
		</div>

		<div class="col-md-4">
			<a href="{{url('medicamentos_registrados')}}">
			<div class="content-top-1">
				<div class="col-md-6 top-content">
					<h5>Medicinas</h5>
					<label>{{ $medicinas }}</label>
				</div>

				<div class="col-md-4">
					<i class="fa fa-medkit text-danger" style="font-size: 50px;"></i>
				</div>
			
			 	<div class="clearfix"> </div>
			</div>
			</a>
		</div>

		<div class="col-md-4">
			
		<a href="{{url('enfermedades_registradas')}}">
			<div class="content-top-1">
				<div class="col-md-6 top-content">
					<h5>Enfermedades</h5>
					<label>{{ $enfermedades }}</label>
				</div>

				<div class="col-md-4">
					<i class="fa fa-wheelchair text-warning"  style="font-size: 50px; "></i>
				</div>
			 	<div class="clearfix"> </div>
			</div>
			
			</a>
		</div>
	</div>
	<div class="clearfix"> </div>
@endsection