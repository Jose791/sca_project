@extends('layouts.sesion')

@section('content')
<div class="login">
		<h1><a href="#">SCA </a></h1>
		<div class="login-bottom">
			<h2>Registrate</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
			<div class="col-md-6">
                
                
                	<div class="login-mail">
					<input id="name" type="text" name="name" value="" required placeholder="Nombre" required="">
					<i class="fa fa-user"></i>
                     @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                    
				</div>
                
				<div class="login-mail">
					<input id="email" type="email" name="email" value="{{ old('email') }}" required placeholder="Correo" required="">
					<i class="fa fa-envelope"></i>
                    @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    
				</div>
                
                 <div class="login-mail ">
                            <select name="type" type="text" class="select" >
                                <option value="" disabled selected>Elige un rol</option>
                                <option value="admin">Administrador</option>
                                <option value="user">Usuario normal</option>
                            </select>
                        </div>
                
				<div class="login-mail">
					<input id="password" type="password" placeholder="Contraseña"name="password" required>
					<i class="fa fa-lock"></i>
                     @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
				</div>
				<div class="login-mail">
					<input id="password-confirm" type="password"  placeholder="Repetir Contraseña" required="" name="password_confirmation" required>
					<i class="fa fa-lock"></i>
				</div>
				  <a class="news-letter" href="#">
						 <label class="checkbox1"><input type="checkbox" name="checkbox" ><i> </i>Estoy de acuerdo con los términos</label>
					   </a>
	
			</div>
                
			<div class="col-md-6 login-do">
				<label class="hvr-shutter-in-horizontal login-sub">
					<input type="submit" value="Enviar" {{ __('Register') }}>
					</label>
					<p>Ya registrado</p>
				<a href="login" class="hvr-shutter-in-horizontal">Iniciar sesión</a>
			</div>
			<div class="clearfix"> </div>
            </form>
		</div>
	</div>
@endsection
