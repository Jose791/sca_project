@extends('layouts.master')

@section('title')

Editar A {{$asilados->nombre}} {{$asilados->apellido}}

@endsection


@section('banner')

<div class="banner">
		    	<h2>
				<a >Editar A</a>
				<i class="fa fa-angle-right"></i>
				<span>{{$asilados->nombre}} {{$asilados->apellido}}</span>
				</h2>
		    </div>

@endsection


@section('content')


<div class="validation-system">
    <div class="validation-form">
        <form method="post" action="{{ route('asilado.update', ['id' => $asilados->id]) }}">            
            
            @csrf
            
          @include('validation.partials.formvalidate')
             

         	<div class="vali-form">
                <div class="col-md-6 form-group1">
                    <label class="control-label">Nombre</label>
                    <input name="nombre" type="text" placeholder="Nombre" value="{{$asilados->nombre}}">
                </div>
                
                <div class="col-md-6 form-group1 form-last">
                    <label class="control-label">Apellidos</label>
                    <input name="apellido" type="text" placeholder="Apellidos" value="{{$asilados->apellido}}" >
                </div>
                
                <div class="clearfix"> </div>
            </div>
            
            <div class="col-md-6 form-group1 group-mail">
                <label class="control-label">Cedula</label>
                <input name="cedula" type="text" placeholder="cedula"  value="{{$asilados->cedula}}">
            </div>
            
            <div class="col-md-6 form-group2 group-mail">
                <label class="control-label">Sexo</label>
                <select name="sexo" type="text"  >
            	   {{-- <option disable selected value>{{$asilados->sexo}}</option> --}}
            	   <option @if($asilados->estado == 'M') 'selected' @endif value="M">Masculino</option>
            	   <option @if($asilados->estado == 'F') 'selected' @endif value="F">Femenino</option>
                </select>
            </div>
            
            <div class="clearfix"> </div>
            
            <div class="col-md-12 form-group1 group-mail">
                <label class="control-label">Residencia (En donde vivia)</label>
                <input name="residencia" type="text" placeholder="Direccion" value="{{$asilados->residencia}}">
            </div>

            <div class="col-md-12 form-group1 group-mail">
                <label class="control-label ">Fecha de Nacimiento</label>
                <input name="fecha_nac" type="date" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" value="{{$asilados->fecha_nac}}" >
            </div>
            
            <div class="col-md-12 form-group1 group-mail">
                <label class="control-label ">Condicion Especial</label>
                <input name="condicion_especial" type="text" placeholder="Condicion Especial" value="{{$asilados->condicion_especial}}" >
            </div>

            <div class="clearfix"> </div>
              
            <div class="col-md-12 form-group2 group-mail">
                <label class="control-label">Estado</label>
                <select name="estado" >
            	   {{-- <option disable selected value>{{$asilados->estado}}</option> --}}
            	   <option @if($asilados->estado == 'A') 'selected' @endif value="A">Activo</option>
                   <option @if($asilados->estado == 'I') 'selected' @endif value="I">Inactico</option>
                </select>
            </div>
            
            <div class="clearfix"> </div>

            <button class="btn btn-success" type="submit"><i class="fa fa-pencil-square-o iconos" aria-hidden="true"></i>Actualizar</button>
            <a href="{{url('/asilados_registrados')}}" class="btn btn-danger"><i class="fa fa-ban iconos" aria-hidden="true"></i>Cancelar</a>
        </form>
            
    </div>
</div>
@endsection