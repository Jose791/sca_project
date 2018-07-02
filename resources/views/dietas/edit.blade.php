@extends('layouts.master')

@section('title')

Editar Dieta {{$dietas->id}}

@endsection


@section('banner')

<div class="banner">
		    	<h2>
				<a >Editar</a>
				<i class="fa fa-angle-right"></i>
				<span>Dieta</span>
				</h2>
		    </div>

@endsection


@section('content')


<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
<!--  	    <h1 align="center">Registro de Dietas</h1>-->
            
        <form method="post" action="{{ route('dieta.update', ['id' => $dietas->id]) }}" >
             @csrf
            
              @include('validation.partials.formvalidate')
            
            <div class="col-md-12 form-group2 group-mail">
              <label class="control-label">Nombre del Asilado</label>
            <select name="asylee_id" type="text">
              @foreach($asilados as $asilado)
                <option @if($asilado->id==$dietas[0]['id']) selected @else '' @endif value="{{$asilado->id}}">{{$asilado->nombre}} {{$asilado->apellido}}</option>
            {{-- 	<option value="{{$asilado->id}}">{{$asilado->nombre}} {{$asilado->apellido}}</option> --}}
            	@endforeach
            	
            </select>
            </div>


            
            <div class="col-md-10 form-group1 group-mail">
              <label class="control-label">Descripcion (de la dieta)</label>
              <textarea name="descripcion" type="text" placeholder="{{$dietas->descripcion}}"></textarea>
            </div>
            
            <div class="col-md-12 form-group2 group-mail">
              <label class="control-label">Estado</label>
            <select name="estado">
            	   <option @if($dietas->estado == 'A') 'selected' @endif value="A">Activo</option>
                 <option @if($dietas->estado == 'I') 'selected' @endif value="I">Inactico</option>
            </select>
            
            
            </div>
            
            <div class="col-md-10 form-group1 group-mail">
              <label class="control-label">Hora (Aplicar la dieta) </label>
              <input name="hora_dieta" type="time" placeholder="" value="{{$dietas->hora_dieta}}">
            </div>
            
         	
      
          
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary">Actualizar</button>
              <a href="{{url('dietas_registradas')}}" class="btn btn-default">Cancelar</a>
            </div>
          <div class="clearfix"> </div>
        </form>
    
 	<!---->
 </div>

</div>



@endsection