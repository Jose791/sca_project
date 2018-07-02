@extends('layouts.master')

@section('title')

Registro de Asilados

@endsection


@section('banner')

<div class="banner">
		    	<h2>
				<a >Formularios</a>
				<i class="fa fa-angle-right"></i>
				<span>Asilado Medicamento </span>
				</h2>
		    </div>

@endsection


@section('content')


<div class="validation-system">
 		
 		<div class="validation-form">

       <h2>
        
           <a href="{{route('medicamento_asilado.index')}}" class="btn btn-primary pull-right">Medicamentos de Asilados Registrados</a>

      </h2>
 	<!---->
<!--  	    <h1 align="center">Registro de Medicamento al Asilado</h1>-->
            
        <form method="post" action="{{ url('/medicamento_asilado') }}">
            {{ csrf_field() }}
            
           @include('validation.partials.formvalidate')


             <div class="col-md-12 form-group2 group-mail">
              <label class="control-label">Nombre del Asilado</label>
            <select name="asylee_id" type="text">
            	<option disable selected value>Nombre del Asilado</option>
              @foreach($asilados as $asilado)
                
            	<option value="{{$asilado->id}}">{{$asilado->nombre}} {{$asilado->apellido}}</option>
            	@endforeach
            	
            </select>
            </div>
            
             <div class="form-group">
            <label for="medicines" class="control-label">Seleccionar Medicamentos</label>
            @foreach($medicines as $medicine )
           

              <div class="checkbox">
                <label><input  name="medicine_id[]" type="checkbox" value="{{$medicine->id}}">{{$medicine->medicamento}}</label>
                 
              </div>
         
           
            @endforeach

            </div>
            
           
         	<div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Complemento</label>
              <input name="complemento" type="text" placeholder="complemento" >
            </div>
           
            <div class="clearfix"> </div>
            </div>
             <div class="col-md-10 form-group1 group-mail">
              <label class="control-label">Hora (Aplicar el Medicamento) </label>
              <input name="hora_medicamento" type="time" placeholder="" >
            </div>
            
            
        
          
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary">Enviar</button>
              <button type="reset" class="btn btn-default">Cancelar</button>
            </div>
          <div class="clearfix"> </div>
        </form>
    
 	<!---->
 </div>

</div>



@endsection