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
        
           <a href="{{route('chequeo_medico.index')}}" class="btn btn-primary pull-right">Chequeos Registrados</a>

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
            
             

            
            <!--
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group1 ">
              <label class="control-label">Your Comment</label>
              <textarea  placeholder="Your Comment..." required="">Your Comment.....</textarea>
            </div>
             <div class="clearfix"> </div>
            <div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Phone Number</label>
              <input type="text" placeholder="Phone Number" required="">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Mobile Number</label>
              <input type="text" placeholder="Mobile Number" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
             <div class="vali-form vali-form1">
            <div class="col-md-6 form-group1">
              <label class="control-label">Create a password</label>
              <input type="password" placeholder="Create a password" required="">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Repeated password</label>
              <input type="password" placeholder="Repeated password" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
             <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Number</label>
              <input type="text" placeholder="Number" required="">
               <p class=" hint-block">Numeric values from 0-***</p>
            </div>
             <div class="clearfix"> </div>
           
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label ">Date</label>
              <input type="date" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" required="">
            </div>
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group">
              <div class="checkbox1">
                <label>
                  <input type="checkbox" ng-model="model.winner" required="" class="ng-invalid ng-invalid-required">
                  Are you a winner?
                </label>
              </div>
            </div>
             <div class="clearfix"> </div>
              <div class="col-md-12 form-group2 group-mail">
              <label class="control-label">Select</label>
            <select>
            	<option value="">Contrary</option>
            	<option value="">Contrary1</option>
            	<option value="">Contrary2</option>
            	<option value="">Contrary3</option>
            	<option value="">Contrary4</option>
            </select>
             <div class="clearfix"> </div>
            </div>-->
             
          
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary">Enviar</button>
              <button type="reset" class="btn btn-default">Cancelar</button>
            </div>
          <div class="clearfix"> </div>
        </form>
    
 	<!---->
 </div>

</div>



@endsection