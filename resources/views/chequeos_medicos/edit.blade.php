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
 
        <form method="post" action="{{ route('chequeo_medico.update', ['id' => $chequeosmedicos[0]['id']]) }}  ">
            @csrf
           
             @include('validation.partials.formvalidate')
        
            <div class="col-md-12 form-group2 group-mail">
                <label class="control-label">Nombre del Asilado</label>
                <select name="asylee_id" type="text">
                    @foreach($asilados as $asilado)
                        <option @if($asilado->id == $chequeosmedicos[0]['id']) selected @else '' @endif value="{{ $asilado->id }}">{{ $asilado->nombre }} {{ $asilado->apellido }}</option>
                    @endforeach
                </select>
            </div>
             
            <div class="col-md-10 form-group1 group-mail">
              <label class="control-label">Diagnostico</label>
              <input name="diagnostico" type="text" placeholder="Diagnostico" value="{{$chequeosmedicos[0]['diagnostico']}}">
            </div>
            
        <div class="clearfix"> </div>
        <button class="btn btn-success" type="submit">Actualizar</button>
        <a href="{{url('/chequeos_registrados')}}" class="btn btn-default">Cancelar</a>
        </form>
      
         
    
 	
 </div>

</div>



@endsection