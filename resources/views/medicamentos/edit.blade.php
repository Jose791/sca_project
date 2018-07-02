@extends('layouts.master')

@section('title')

Editar Medicamentos

@endsection


@section('banner')

<div class="banner">
		    	<h2>
				<a >Editar</a>
				<i class="fa fa-angle-right"></i>
				<span>Medicamento</span>
				</h2>
		    </div>

@endsection


@section('content')


<div class="validation-system">
 		
 		<div class="validation-form">


 	<!---->
  	    
        <form method="post" action="{{ route('medicamento.update', ['id' => $medicamentos->id]) }}">
            

            @csrf
           
              @include('validation.partials.formvalidate')


            <div class="col-md-6 form-group1 group-mail">
              <label class="control-label">Nombre del Medicamento</label>
              <input name="medicamento" type="text" placeholder="nombre del medicamento" value="{{$medicamentos->medicamento}}" >
            </div>
            
         	<div class="vali-form">
            <div class="col-md-10 form-group1">
              <label class="control-label">Condicion (uso Medicamento)</label>
              <input name="condicion" type="text" placeholder="uso medicamento" value="{{$medicamentos->condicion}}">
            </div>
           
            <div class="clearfix"> </div>
            </div>
            

            
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary">Enviar</button>
              <a href="{{url('medicamentos_registrados')}}" class="btn btn-default">Cancelar</a>
            </div>
          <div class="clearfix"> </div>
        </form>
    
 	<!---->
 </div>

</div>



@endsection

