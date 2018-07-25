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

      
 	
  	    
        <form method="post" action="{{ route('visita.update', ['id' => $vi['id']]) }}">
            
      {{-- <SPAN>{{$vi['id']}}</SPAN> --}}
            @csrf
            
             @include('validation.partials.formvalidate')
            
            <div class="col-md-12 form-group2 group-mail">
              <label class="control-label">Nombre del Asilado</label>
              <select name="asylee_id" type="text">
                 @foreach($asilados as $asilado)
                    <option @if($asilado->id == $vi->asylee_id) selected @else '' @endif value="{{ $asilado->id }}">{{ $asilado->nombre }} {{ $asilado->apellido }}</option>
                 @endforeach
            	
              </select>
            </div>
            
            <div class="col-md-12 form-group2 group-mail">
              <label class="control-label">Nombre del visitante</label>
              <select name="visitor_id" type="text">
            	    @foreach($visitantes as $visitante)
                    <option @if($visitante->id == $vi->visitor_id) selected @else '' @endif value="{{ $visitante->id }}">{{ $visitante->nombre }} {{ $visitante->apellido }}</option>
            	    @endforeach
            	
              </select>
            </div>
           
            
            <div class="col-md-10 form-group1 group-mail">
              <label class="control-label">Fecha de la Visita </label>
              <input name="fecha_reserva" type="datetime" placeholder="2018-05-21 00:00:00" value="{{$vi->fecha_reserva}}" >
            </div>
            

            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-success"><i class="fa fa-pencil-square-o iconos" aria-hidden="true"></i>Actualizar</button>
              <a href="{{url('visitas_registradas')}}" class="btn btn-danger"><i class="fa fa-ban iconos" aria-hidden="true"></i>Cancelar</a>
            </div>
            
          <div class="clearfix"> </div>
        </form>
    
 	<!---->
 </div>

</div>



@endsection