@extends('layouts.master')

@section('title','Registro de Enfermedad/Anciano')


@section('banner')

<div class="banner">
		    	<h2>
				<a >Formularios</a>
				<i class="fa fa-angle-right"></i>
				<span>Anciano Enfermedad </span>
				</h2>
		    </div>

@endsection


@section('content')


<div class="validation-system">
 		
 		<div class="validation-form">

       <h2>
        
           <a href="{{route('enfermedad.index')}}" class="btn btn-primary pull-right"><i class="fa fa-list iconos" aria-hidden="true"></i>Lista Enfermedades/Ancianos</a>

      </h2>
 	<!---->
<!--  	    <h1 align="center">Registro de Medicamento al Asilado</h1>-->
            
        <form method="post" action="{{ url('/enfermedad') }}" autocomplete="off">
            {{ csrf_field() }}
            
           @include('validation.partials.formvalidate')


             <div class="col-md-12 form-group2 group-mail">
              <label class="control-label">Nombre del Anciano</label>
            <select name="asylee_id" type="text">
            	<option disable selected value>Nombre del Anciano</option>
              @foreach($asilados as $asilado)
                
            	<option value="{{$asilado->id}}">{{$asilado->nombre}} {{$asilado->apellido}}</option>
            	@endforeach
            	
            </select>
            </div>
            
             <div class="form-group">
            <label for="medicines" class="control-label">Seleccionar Enfermedad</label>
            @foreach($diseases as $disease )
           

              <div class="checkbox">
                <label><input  name="disease_id[]" type="checkbox" value="{{$disease->id}}">{{$disease->enfermedad}}</label>
                 
              </div>
         
           
            @endforeach

            </div>
            
           
         	{{-- <div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Complemento</label>
              <input name="complemento" type="text" placeholder="complemento" >
            </div> --}}
           
           {{--  <div class="clearfix"> </div>
            </div>
             <div class="col-md-10 form-group1 group-mail">
              <label class="control-label">Descripcion </label>
              <input name="descripcion" type="text" placeholder="" >
            </div> --}}
            
            
        
          
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