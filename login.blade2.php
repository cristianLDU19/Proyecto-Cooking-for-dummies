<!doctype html>
<html>
<head>
	<title>LCocina con amigos</title>
</head>
<body>

	{{ Form::open(array('url' => 'login')) }}
		<h1>Login</h1>

		<!-- if there are login errors, show them here -->
		@if (Session::get('loginError'))
		<div class="alert alert-danger">{{ Session::get('loginError') }}</div>
		@endif

		<p>
			{{ $errors->first('email') }}
			{{ $errors->first('password') }}
		</p>

		<p>
			{{ Form::label('email', 'Correo Electronico') }}
			{{ Form::text('email', Input::old('email'), array('placeholder' => 'ejemplo@ejemplo.com')) }}
		</p>

		<p>
			{{ Form::label('password', 'Contraseña') }}
			{{ Form::password('password') }}
		</p>

		<p>{{ Form::submit('Submit!') }}</p>
	{{ Form::close() }}

</body>
</html>
