@extends('layouts.master')

@section('title','Editar Enfermedad/Anciano')

@section('banner')

<div class="banner">
		    	<h2>
				<a >Editar a:</a>
				<i class="fa fa-angle-right"></i>
				<span>{{$asiladosm->nombre}} {{$asiladosm->apellido}}  </span>
				</h2>
		    </div>

@endsection


@section('content')


<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
<!--  	    <h1 align="center">Registro de Medicamento al Asilado</h1>-->
            
        <form method="post" action="{{ route('enfermedad.update', ['id' => $asiladosm->id]) }}">
            {{ csrf_field() }}
            
       @include('validation.partials.formvalidate')
            
            <div class="col-md-12 form-group2 group-mail">
            <label class="control-label">Nombre del Anciano</label>
            <select name="asylee_id">
                @foreach($asilados as $asilado)
                    <option value="{{ $asilado->id }}" @if($asilado->id == $asiladosm->id) selected @endif>
                        {{$asilado->nombre}} {{$asilado->apellido}}
                    </option>
                @endforeach	
            </select>
            </div>
            
             <div class="form-group">
            <label for="medicines" class="control-label">Seleccionar Medicamentos</label>

            @foreach($diseases as $disease )
                <div class="checkbox">
                    <label><input type="checkbox" name="disease_id[]" value="{{$disease->id}}"
                    
                        @foreach($asiladosm->diseases as $d)
                            @if($d['pivot']->disease_id == $disease->id)
                                checked="" 
                            @endif
                        @endforeach
                        
                        > {{$disease->enfermedad}}</label>
                </div>
            @endforeach
            </div>
           
         {{-- 	<div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Descripcion</label>
              <input name="descripcion" type="text" placeholder="descripcion" value="{{$disease->descripcion}}" >
            </div> --}}
           
           {{--  <div class="clearfix"> </div>
            </div>
             <div class="col-md-10 form-group1 group-mail">
              <label class="control-label">Hora (Aplicar el Medicamento) </label>
              <input name="hora_medicamento" type="time" value="{{$m['pivot']->hora_medicamento}}" >
            </div> --}}
            
            
        
          
            <div class="col-md-12 form-group">
              <button class="btn btn-success" type="submit"><i class="fa fa-pencil-square-o iconos" aria-hidden="true"></i>Actualizar</button>
              <a href="{{url('enfermedad_asilado')}}" class="btn btn-danger"><i class="fa fa-ban iconos" aria-hidden="true"></i>Cancelar</a>
            </div>
          <div class="clearfix"> </div>
        </form>
    
 	<!---->
 </div>

</div>



@endsection