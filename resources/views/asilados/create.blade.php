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

      <h2>
        
           <a href="{{route('asilado.index')}}" class="btn btn-primary pull-right">Asilados Registrados</a>

      </h2>
 	<!---->
        
<!--            <h1 align="center">Registro de Asilado</h1>-->
         
        <form method="post" action="{{ url('/asilados_registrados') }}">
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
              <input name="nombre" type="text" placeholder="Nombre" >
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Apellidos</label>
              <input name="apellido" type="text" placeholder="Apellidos" >
            </div>
            <div class="clearfix"> </div>
            </div>
            
            <div class="col-md-6 form-group1 group-mail">
              <label class="control-label">Cedula</label>
              <input name="cedula" type="text" placeholder="cedula" >
            </div>
            
             <div class="col-md-6 form-group2 group-mail">
              <label class="control-label">Sexo</label>
            <select name="sexo" type="text">
            	<option disable selected value>Sexo</option>
            	<option value="M">Masculino</option>
            	<option value="F">Femenino</option>
            	
            </select>
            </div>
            
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Residencia (En donde vivia)</label>
              <input name="residencia" type="text" placeholder="Direccion" >
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label ">Fecha de Nacimiento</label>
              <input name="fecha_nac" type="date" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" >
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label ">Condicion Especial</label>
              <input name="condicion_especial" type="text" placeholder="Condicion Especial" >
            </div>
             <div class="clearfix"> </div>
              
            <div class="col-md-6 form-group2 group-mail">
              <label class="control-label">Estado</label>
               <select name="estado">
            	   <option disable selected value>Estado</option>
            	   <option value="A">Activo</option>
        
                </select>
            
        </div>
             
              {{-- datos de tabla enfermedad --}}
             <div class="col-md-6 form-group1 group-mail">
              <label class="control-label">Nombre de Enfermedad</label>
              <input name="enfermedad" type="text" placeholder="Nombre Enfermedad" >
            </div>

            {{-- datos de tabla medicamento --}}
            <div class="col-md-7 form-group1 group-mail">
              <label class="control-label">Nombre del Medicamento</label>
              <input name="medicamento" type="text" placeholder="nombre del medicamento" >
            </div>

            <div class="col-md-5 form-group1 group-mail">
              <label class="control-label">Condicion (uso Medicamento)</label>
              <input name="condicion" type="text" placeholder="uso medicamento" >
            </div>

          {{-- datos de tabla pivot asylee_medicine --}}

            
            <div class="col-md-6 form-group1 group-mail">
              <label class="control-label">Complemento</label>
              <input name="complemento" type="text" placeholder="complemento" >

            </div>
            
            <div class="col-md-6 form-group1 group-mail">
              <label class="control-label">Hora (Aplicar el Medicamento) </label>
              <input name="hora_medicamento" type="time" placeholder="" >
            </div>

       
            

           

          
            <div class="col-md-12 form-group1">
              <button type="submit" class="btn btn-primary">Enviar</button>
              <button type="reset" class="btn btn-default">Cancelar</button>
            </div>
          <div class="clearfix"> </div>
        </form>
    
 	<!---->
 </div>

</div>



@endsection