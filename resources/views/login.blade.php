@extends('layout')

@section('content')

<div id="section_login" class="fullwidth">
	<div class="container">
		@if(Session::has("message"))
		<div class="row">
			<div class="col-xs-12">
				<div class="alert alert-success">
					{{ Session::get("message") }}
				</div>
			</div>
		</div>
		@endif
		<div class="row">
			<div class="col-lg-6 col-md-6 col-xs-12">
				<h1>Login</h1><hr>
				<div class="_content_login">
					<form id="login" action="{{ route('val_login') }}" method="post">
						{{ csrf_field() }}
						<label for="">Email</label>
						<input type="text" class="form-control" name="email" value="{{ old('email') }}">
						<p class="text-danger">{{ $errors->login->first('email') }}</p>
						<label for="">Password</label>
						<input type="password" class="form-control" name="password" value="{{ old('password') }}">
						<p class="text-danger">{{ $errors->login->first('password') }}</p>
						<button type="submit" class="btn  btn-lg btn-primary">Entrar</button>			
					</form>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-xs-12">
				<h1>Registrate</h1><hr>
				<form id="register" action="{{ route('val_register') }}" method="post">
					{{ csrf_field() }}				
					<div class="col-lg-6 col-md-6 col-xs-12">
						<label for="">Nombres</label>
						<input type="text" class="form-control" name="nombres_register" value="{{ old('nombres_register') }}">
						<p class="text-danger"> {{ $errors->register->first('nombres_register') }} </p>
					</div>
					<div class="col-lg-6 col-md-6 col-xs-12">
						<label for="">Apellidos</label>
						<input type="text" class="form-control" name="apellidos_register" value="{{ old('apellidos_register') }}">
						<p class="text-danger"> {{ $errors->register->first('apellidos_register') }} </p>
					</div>
					<div class="col-lg-6 col-md-6 col-xs-12">
						<label for="">Email</label>
						<input type="text" class="form-control" name="email_register" value="{{ old('email_register') }}">
						<p class="text-danger"> {{ $errors->register->first('email_register') }} </p>
					</div>
					<div class="col-lg-6 col-md-6 col-xs-12">
						<label for="">Password</label>
						<input type="password" class="form-control" name="password_register" value="{{ old('password_register') }}">
						<p class="text-danger"> {{ $errors->register->first('password_register') }} </p>
					</div>
					<div class="col-lg-6 col-md-6 col-xs-12">
					<div class="inlineblock"><img src="{{ asset('img/facebook_logo.png') }}" class="img img-responsive"></div>
					<div class="inlineblock"><img src="{{ asset('img/google_logo.png') }}" class="img img-responsive"></div>
					</div>
					<div class="col-lg-6 col-md-6 col-xs-12">
						<button type="submit" class="btn btn-lg btn-success">Registrarse</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@stop