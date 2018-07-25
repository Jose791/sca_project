@extends('layouts.master')

@section('title')

Chequeos Medicos

@endsection


@section('banner')

<div class="banner">
		    	<h2>
				<a >Formularios</a>
				<i class="fa fa-angle-right"></i>
				<span>Chequeos Medicos</span>
				</h2>
		    </div>

@endsection


@section('content')


<div class="validation-system">
 		
 		<div class="validation-form">

          <h2>
        
           <a href="{{route('chequeo_medico.index')}}" class="btn btn-primary pull-right"><i class="fa fa-list iconos" aria-hidden="true"></i>Lista Chequeos</a>

      </h2>
        <form method="post" action="{{ url('/chequeos_medicos') }}">
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
            
             
            <div class="col-md-10 form-group1 group-mail">
              <label class="control-label">Diagnostico</label>
              <input name="diagnostico" type="text" placeholder="Diagnostico" >
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