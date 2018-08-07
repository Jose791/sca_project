@extends('layouts.master')

@section('title','Registro de Visita')


@section('banner')

<div class="banner">
		    	<h2>
				<a >Formularios</a>
				<i class="fa fa-angle-right"></i>
				<span>Visitas</span>
				</h2>
		    </div>

@endsection


@section('content')


<div class="validation-system">
 		
 		<div class="validation-form">

      <h2>
        
           <a href="{{route('visita.index')}}" class="btn btn-primary pull-right"><i class="fa fa-list iconos" aria-hidden="true"></i>Lista Visitas</a>

      </h2>
 	<!---->
  	    
        <form method="post" action="{{ url('/visitas') }}" autocomplete="off">
            {{ csrf_field() }}
            
             @include('validation.partials.formvalidate')
            
             <div class="col-md-12 form-group2 group-mail">
              <label class="control-label">Nombre del Anciano</label>
            <select name="asylee_id" type="text">
            	<option value="" disable selected value>Nombre del Anciano</option>
                @foreach($asilados as $asilado)
                
            	<option value="{{$asilado->id}}">{{$asilado->nombre}} {{$asilado->apellido}}</option>
            	@endforeach
            	
            </select>
            </div>
            
              <div class="col-md-12 form-group2 group-mail">
              <label class="control-label">Nombre del visitante</label>
            <select name="visitor_id" type="text">
            	<option disable selected value>Nombre del Visitante</option>
              @foreach($visitantes as $visitante)
                
            	<option value="{{$visitante->id}}">{{$visitante->nombre}} {{$visitante->apellido}}</option>
            	@endforeach
            	
            </select>
            </div>
           
            
            <div class="col-md-6 form-group1 group-mail">
              <label class="control-label">Fecha de la Visita </label>
              <input name="fecha_reserva" type="datetime" placeholder="2018-05-21 00:00:00" title="2018-05-21 00:00:00" >
            </div>
            
         	
            
            
        
          
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane iconos" aria-hidden="true"></i>Enviar</button>
              <button type="reset" class="btn btn-danger"><i class="fa fa-ban iconos" aria-hidden="true"></i>Cancelar</button>
            </div>
          <div class="clearfix"> </div>
        </form>
    
 	<!---->
 </div>

</div>



@endsection