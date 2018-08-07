@extends('layouts.master')

@section('title','Registro de Ancianos')


@section('banner')

<div class="banner">
		  <h2>
				 <a>Formularios</a>
				 <i class="fa fa-angle-right"></i>
				 <span>Ancianos</span>
			</h2>
</div>

@endsection


@section('content')


<div class="validation-system">
 		
 		<div class="validation-form">

      <h2>
        
           <a href="{{route('asilado.index')}}" class="btn btn-primary pull-right"><i class="fa fa-list iconos" aria-hidden="true"></i>Lista Ancianos</a>

      </h2>
 	<!---->
        
         
        <form method="post" action="{{ url('/asilados_registrados') }}" autocomplete="off">
            {{ csrf_field() }}
            

            @include('validation.partials.formvalidate')

         	<div class="vali-form">
            <div class="col-md-6 form-group1 ">
              <label for="nombre" class="control-label">Nombre</label>
              <input id="nombre" name="nombre" type="text" placeholder="Nombre" value="{{ old('nombre') }}"/>
              
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Apellidos</label>
              <input name="apellido" type="text" placeholder="Apellidos" value="{{ old('apellido') }}">
            </div>
            <div class="clearfix"> </div>
            </div>
            
            <div class="col-md-6 form-group1 group-mail">
              <label  class="control-label">Cedula</label>
              <input  name="cedula" type="text" placeholder="cedula" value="{{ old('cedula') }}">
            </div>
            
             <div class="col-md-6 form-group2 group-mail">
              <label class="control-label">Sexo</label>
            <select name="sexo" type="text" >
            	<option disable selected value>Sexo</option>
            	<option value="M">Masculino</option>
            	<option value="F">Femenino</option>
            	
            </select>
            </div>
            
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Residencia (En donde vivia)</label>
              <input name="residencia" type="text" placeholder="Direccion" value="{{ old('residencia') }}">
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label ">Fecha de Nacimiento</label>
              <input name="fecha_nac" type="date" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" value="{{ old('fecha_nac') }}" >
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label ">Condicion Especial</label>
              <input name="condicion_especial" type="text" placeholder="Condicion Especial" value="{{ old('condicion_especial') }}">
            </div>
             <div class="clearfix"> </div>
              
            <div class="col-md-12 form-group2 group-mail">
              <label class="control-label">Estado</label>
               <select name="estado" value="{{ old('estado') }}">
            	   <option disable selected value>Estado</option>
            	   <option value="A">Activo</option>
        
                </select>
            
            </div>
             
           
             
           
         {{--   <div class="form-group">
            <label for="diseases" class="control-label">Seleccionar Enfermedades</label>
            @foreach($diseases as $disease )

             
              
                 <div class="checkbox ">
                  <label><input   name="enfermedad[]" type="checkbox" value="{{$disease->id}}">{{$disease->enfermedad}}</label>
                </div>


            @endforeach
      
           </div>
         --}}
           
        
          
            <div class="col-md-12 form-group1">
              <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane iconos" aria-hidden="true"></i>Enviar</button>
              <button type="reset" class="btn btn-danger"><i class="fa fa-ban iconos" aria-hidden="true"></i>Cancelar</button>
            </div>
          <div class="clearfix"> </div>
        </form>
    
 	<!---->
 </div>

</div>



@endsection