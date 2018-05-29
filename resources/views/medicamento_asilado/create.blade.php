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
 	<!---->
<!--  	    <h1 align="center">Registro de Medicamento al Asilado</h1>-->
            
        <form method="post" action="{{ url('/medicamento_asilado') }}">
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


             <div class="col-md-12 form-group2 group-mail">
              <label class="control-label">Nombre del Asilado</label>
            <select name="asylee_id" type="text">
            	<option disable selected value>Nombre del Asilado</option>
              @foreach($asilados as $asilado)
                
            	<option value="{{$asilado->id}}">{{$asilado->nombre}} {{$asilado->apellido}}</option>
            	@endforeach
            	
            </select>
            </div>
            
            <div class="col-md-12 form-group2 group-mail">
              <label class="control-label">Nombre del Medicamento</label>
            <select name="medicine_id" type="text">
            	<option disable selected value>Nombre del Medicamento</option>
              @foreach($medicamentos as $medicamento)
                
            	<option value="{{$medicamento->id}}">{{$medicamento->nombre}}</option>
            	@endforeach
            	
            </select>
            </div>
            
            <div class="col-md-10 form-group1 group-mail">
              <label class="control-label">Hora (Aplicar el Medicamento) </label>
              <input name="hora_medicamento" type="time" placeholder="" >
            </div>
            
         	<div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Complemento</label>
              <input name="complemento" type="text" placeholder="complemento" >
            </div>
           
            <div class="clearfix"> </div>
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