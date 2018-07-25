@extends('layouts.master')

@section('title')

Registro de Visitantes

@endsection


@section('banner')

<div class="banner">
		    	<h2>
				<a >Formularios</a>
				<i class="fa fa-angle-right"></i>
				<span>Visitantes</span>
				</h2>
		    </div>

@endsection


@section('content')


<div class="validation-system">
 		
 		<div class="validation-form">

      <h2>
        
           <a href="{{route('visitante.index')}}" class="btn btn-primary pull-right"><i class="fa fa-list iconos" aria-hidden="true"></i>Lista Visitantes</a>

      </h2>
 	<!---->
  	    
        <form method="post" action="{{ url('/visitantes') }}">
            {{ csrf_field() }}
            
            @include('validation.partials.formvalidate')
            
         	<div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Nombre</label>
              <input name="nombre" type="text" placeholder="Nombre" >
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Apellidos</label>
              <input name="apellido" type="text" placeholder="Apellidos" >
            </div>
            <div class="clearfix"> </div>
            </div>
            
            <div class="col-md-6 form-group1 group-mail">
              <label class="control-label">cedula</label>
              <input name="cedula" type="text" placeholder="cedula" >
            </div>
            
             <div class="col-md-6 form-group2 group-mail">
              <label class="control-label">Sexo</label>
            <select name="sexo" type="text">
            	<option disable selected value>Sexo</option>
            	<option value="M">Masculino</option>
            	<option value="F">Femenino</option>
            	
            </select>
            </div>
            
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Direccion</label>
              <input name="direccion" type="text" placeholder="Direccion" >
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
              <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane iconos" aria-hidden="true"></i>Enviar</button>
              <button type="reset" class="btn btn-danger"><i class="fa fa-ban iconos" aria-hidden="true"></i>Cancelar</button>
            </div>
          <div class="clearfix"> </div>
        </form>
    
 	<!---->
 </div>

</div>



@endsection