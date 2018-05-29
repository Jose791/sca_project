@extends('layouts.master')

@section('title')

Registro de Asilados

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
 	<!---->
        
<!--            <h1 align="center">Registro de Asilado</h1>-->
         
        <form method="post" action="{{ url('/asilados_registrados/'.$asilados->id.'/edit') }}">
            {{ csrf_field() }}
            
            
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
            	<option disable selected value>{{$asilados->sexo}}</option>
            	<option value="M">Masculino</option>
            	<option value="F">Femenino</option>
            	
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
            	<option disable selected value>{{$asilados->estado}}</option>
            	<option value="A">Activo</option>
            	<option value="I">Inactico</option>
            	
            	
            </select>
            
            
            </div>
            
           
          
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary">Guardar Cambios</button>
              <a href="{{url('/asilados_registrados')}}" class="btn btn-default">Cancelar</a>
            </div>
          <div class="clearfix"> </div>
        </form>
    
 	<!---->
 </div>

</div>



@endsection