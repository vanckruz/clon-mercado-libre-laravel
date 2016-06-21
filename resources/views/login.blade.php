@extends('layout')

@section('content')

<div id="section_login" class="fullwidth">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-xs-12">
				<h1>Login</h1><hr>
				<div class="_content_login">
					<form id="login" action="" method="post">
						<label for="">Email</label>
						<input type="text" class="form-control" name="email">
						<label for="">Password</label>
						<input type="password" class="form-control" name="password">
						<button type="submit" class="btn  btn-lg btn-primary">Entrar</button>			
					</form>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-xs-12">
				<h1>Registrate</h1><hr>
				<form id="register" action="" method="post">
					<div class="col-lg-6 col-md-6 col-xs-12">
						<label for="">Nombres</label>
						<input type="text" class="form-control" name="nombres_register">
					</div>
					<div class="col-lg-6 col-md-6 col-xs-12">
						<label for="">Apellidos</label>
						<input type="text" class="form-control" name="apellidos_register">
					</div>
					<div class="col-lg-6 col-md-6 col-xs-12">
						<label for="">Email</label>
						<input type="text" class="form-control" name="email_register">
					</div>
					<div class="col-lg-6 col-md-6 col-xs-12">
						<label for="">Password</label>
						<input type="password" class="form-control" name="password_register">
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