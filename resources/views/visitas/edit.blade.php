@extends('layouts.master')

@section('title')

Editar de Visita

@endsection


@section('banner')

<div class="banner">
		    	<h2>
				<a >Editar</a>
				<i class="fa fa-angle-right"></i>
				<span>Visita</span>
				</h2>
		    </div>

@endsection


@section('content')


<div class="validation-system">
 		
 		<div class="validation-form">

      
 	
  	    
        <form method="post" action="{{ route('visita.update', ['id' => $visitas[0]['id']]) }}">
            

            @csrf
            
             @include('validation.partials.formvalidate')
            
            <div class="col-md-12 form-group2 group-mail">
              <label class="control-label">Nombre del Asilado</label>
              <select name="asylee_id" type="text">
                 @foreach($asilados as $asilado)
                    <option @if($asilado->id == $visitas[0]['asylee_id']) selected @else '' @endif value="{{ $asilado->id }}">{{ $asilado->nombre }} {{ $asilado->apellido }}</option>
                 @endforeach
            	
              </select>
            </div>
            
            <div class="col-md-12 form-group2 group-mail">
              <label class="control-label">Nombre del visitante</label>
              <select name="visitor_id" type="text">
            	    @foreach($visitantes as $visitante)
                    <option @if($visitante->id == $visitas[0]['visitor_id']) selected @else '' @endif value="{{ $visitante->id }}">{{ $visitante->nombre }} {{ $visitante->apellido }}</option>
            	    @endforeach
            	
              </select>
            </div>
           
            
            <div class="col-md-10 form-group1 group-mail">
              <label class="control-label">Fecha de la Visita </label>
              <input name="fecha_reserva" type="datetime" placeholder="2018-05-21 00:00:00" value="{{$visitas[0]['fecha_reserva']}}" >
            </div>
            

            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-success">Actualizar</button>
              <a href="{{url('visitas_registradas')}}" class="btn btn-default">Cancelar</a>
            </div>
            
          <div class="clearfix"> </div>
        </form>
    
 	<!---->
 </div>

</div>



@endsection