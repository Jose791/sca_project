@extends('layouts.sesion')

@section('content')
<div class="login">
		<h1><a href="index.html">SCA</a></h1>
		<div class="login-bottom">
			<h2>Iniciar Sesion</h2>
			<form method="POST" action="{{ route('login') }}" autocomplete="off">
			<div class="col-md-6">
                @csrf
				<div class="login-mail {{ $errors->has('email') ? 'has-error' : '' }}">
					<input id="email" type="email"  placeholder="Correo" name="email" value="{{ old('email') }}" >
					<i class="fa fa-envelope"></i>
					<span class="text-danger">{{ $errors->first('email') }}</span>
                  {{--  @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif  --}}
				</div>
                
				<div class="login-mail">
					<input id="password" type="password" placeholder="Contraseña" name="password">
					<i class="fa fa-lock"></i>
                    
                    @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    
				</div>
				   {{-- <a class="news-letter " href="#">
						 <label class="checkbox1"><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}><i> </i>Contraseña olvidada</label>
					   </a> --}}

			
			</div>
			<div class="col-md-6 login-do">
				<label class="hvr-shutter-in-horizontal login-sub">
                  <input type="submit" value="iniciar sesión" {{ __('Login') }}>
				</label>
					{{-- <p>¿No tiene una cuenta?</p>
				<a href="register" class="hvr-shutter-in-horizontal">Regístrate</a> --}}
			</div>
			
			<div class="clearfix"> </div>
			</form>
		</div>
	</div>
@endsection
