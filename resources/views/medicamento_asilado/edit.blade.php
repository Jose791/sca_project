@extends('layouts.master')

@section('title')

Editar Anciano

@endsection


@section('banner')

<div class="banner">
		    	<h2>
				<a >Formularios</a>
				<i class="fa fa-angle-right"></i>
				<span>Asilado Medicamento  </span>
				</h2>
		    </div>

@endsection


@section('content')


<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
<!--  	    <h1 align="center">Registro de Medicamento al Asilado</h1>-->
            
        <form method="post" action="{{ route('medicamento_asilado.update', ['id' => $asiladosm->id]) }}">
            {{ csrf_field() }}
            
       @include('validation.partials.formvalidate')
            
            <div class="col-md-12 form-group2 group-mail">
            <label class="control-label">Nombre del Asilado</label>
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

            @foreach($medicines as $medicine )
                <div class="checkbox">
                    <label><input type="checkbox" name="medicine_id[]" value="{{$medicine->id}}"
                    
                        @foreach($asiladosm->medicines as $m)
                            @if($m['pivot']->medicine_id == $medicine->id)
                                checked="" 
                            @endif
                        @endforeach
                        
                        > {{$medicine->medicamento}}</label>
                </div>
            @endforeach
            </div>
           
         	<div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Complemento</label>
              <input name="complemento" type="text" placeholder="complemento" value="{{$m['pivot']->complemento}}" >
            </div>
           
            <div class="clearfix"> </div>
            </div>
             <div class="col-md-10 form-group1 group-mail">
              <label class="control-label">Hora (Aplicar el Medicamento) </label>
              <input name="hora_medicamento" type="time" value="{{$m['pivot']->hora_medicamento}}" >
            </div>
            
            
        
          
            <div class="col-md-12 form-group">
              <button class="btn btn-success" type="submit"><i class="fa fa-pencil-square-o iconos" aria-hidden="true"></i>Actualizar</button>
              <a href="{{url('medicamento_asilado_registrados')}}" class="btn btn-danger"><i class="fa fa-ban iconos" aria-hidden="true"></i>Cancelar</a>
            </div>
          <div class="clearfix"> </div>
        </form>
    
 	<!---->
 </div>

</div>



@endsection