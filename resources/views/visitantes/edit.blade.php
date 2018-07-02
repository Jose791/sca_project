@extends('layouts.master')

@section('title')

Registro de Visitantes

@endsection


@section('banner')

<div class="banner">
		    	<h2>
				<a >Editar</a>
				<i class="fa fa-angle-right"></i>
				<span>Visitante</span>
				</h2>
		    </div>

@endsection


@section('content')


<div class="validation-system">
 		
 		<div class="validation-form">

   
 	<!---->
  	    
        <form method="post" action="{{ route('visitante.update', ['id' => $visitantes->id]) }}">
            

            @csrf
            
            @include('validation.partials.formvalidate')
            
         	<div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Nombre</label>
              <input name="nombre" type="text" placeholder="Nombre" value="{{$visitantes->nombre}}">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Apellidos</label>
              <input name="apellido" type="text" placeholder="Apellidos" value="{{$visitantes->apellido}}" >
            </div>
            <div class="clearfix"> </div>
            </div>
            
            <div class="col-md-6 form-group1 group-mail">
              <label class="control-label">cedula</label>
              <input name="cedula" type="text" placeholder="cedula" value="{{$visitantes->cedula}}">
            </div>
            
             <div class="col-md-6 form-group2 group-mail">
              <label class="control-label">Sexo</label>
            <select name="sexo" type="text">
            	<option @if($visitantes->sexo == 'M') 'selected' @endif value="M" >Masculino</option>
              <option @if($visitantes->sexo == 'F') 'selected' @endif value="F" >Femenino</option>
            	
            	
            </select>
            </div>
            
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Direccion</label>
              <input name="direccion" type="text" placeholder="Direccion" value="{{$visitantes->direccion}}">
            </div>
            
            
             
          
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-success">Actualizar</button>
              <a href="{{url('visitantes_registrados')}}" class="btn btn-default">Cancelar</a>
            </div>
          <div class="clearfix"> </div>
        </form>
    
 	<!---->
 </div>

</div>



@endsection