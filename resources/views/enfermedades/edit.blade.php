@extends('layouts.master')

@section('title')

Registro de Enfermedades

@endsection


@section('banner')

<div class="banner">
		    	<h2>
				<a >Formularios</a>
				<i class="fa fa-angle-right"></i>
				<span>Enfermedades</span>
				</h2>
		    </div>

@endsection


@section('content')


<div class="validation-system">
 		
 		<div class="validation-form">

      <h2>
        
           <a href="{{route('enfermedades.index')}}" class="btn btn-primary pull-right">Enfermedades Registradas</a>

      </h2>
 	<!---->
<!--  	    <h1 align="center">Registro de Enfermedades</h1>-->
            
        <form method="post" action="{{ route('enfermedades.update', ['id' => $enfermedades->id]) }}">
            

            @csrf
            
            @include('validation.partials.formvalidate')




            <div class="col-md-10 form-group1 group-mail">
              <label class="control-label">Nombre de Enfermedad</label>
              <input name="enfermedad" type="text" placeholder="Nombre Enfermedad"  value="{{$enfermedades->enfermedad}}">
            </div>

            <div class="col-md-10 form-group1 group-mail">
              <label class="control-label">Descripcion de la Enfermedad</label>
              <input name="descripcion" type="text" placeholder="descripcion" value="{{$enfermedades->descripcion}}" >
            </div>
            
            <div class="col-md-12 form-group">
              <button class="btn btn-success" type="submit"><i class="fa fa-pencil-square-o iconos" aria-hidden="true"></i>Actualizar</button>
              <a href="{{url('enfermedades_registradas')}}" class="btn btn-danger"><i class="fa fa-ban iconos" aria-hidden="true"></i>Cancelar</a>
            </div>
          <div class="clearfix"> </div>
        </form>
    
 	<!---->
 </div>

</div>



@endsection