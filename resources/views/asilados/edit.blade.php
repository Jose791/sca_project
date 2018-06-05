@extends('layouts.master')

@section('title')

Editar Asilados

@endsection


@section('banner')

<div class="banner">
		    	<h2>
				<a >Formularios</a>
				<i class="fa fa-angle-right"></i>
				<span>Asilados</span>
				</h2>
		    </div>

@endsection


@section('content')


<div class="validation-system">
    <div class="validation-form">
        <form method="post" action="{{ route('asilado.update', ['id' => $asilados->id]) }}">            
            
            @csrf
            

            @if(count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif

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

            <button class="btn btn-success" type="submit">Actualizar</button>
            <a href="{{url('/asilados_registrados')}}" class="btn btn-default">Cancelar</a>
        </form>
            {{-- <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary">Guardar Cambios</button>
              <a href="{{url('/asilados_registrados')}}" class="btn btn-secondary">Cancelar</a>

               <form action="{{action('AsiladoController@destroy',$asilados['id'])}}"  method="post">

                      {{ csrf_field() }}

                      <input type="hidden" name="_method" value="DELETE">

                      <button class="btn btn-danger pull-right" type="submit" onclick="return confirm('seguro que desea eliminar?')">Borrar</button>

                      </form>
            </div> --}}
    </div>
</div>
@endsection