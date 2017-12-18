@extends('layouts.app')

@section('content')
<div class="container">
	<div class="card card-login mx-auto mt-5">
		<div class="card-header">
			<img src="{{URL::asset('images/logo-novo-1.png')}}" class="img-fluid">
		</div>
		<div class="card-body">
			<form class="form-horizontal" method="POST" action="{{ route('login') }}">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="exampleInputEmail1">Email</label>
					<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

					@if ($errors->has('email'))
					<span class="help-block">
						<strong>{{ $errors->first('email') }}</strong>
					</span>
					@endif
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Senha</label>
					<input id="password" type="password" class="form-control" name="password" required>

					@if ($errors->has('password'))
					<span class="help-block">
						<strong>{{ $errors->first('password') }}</strong>
					</span>
					@endif
				</div>
				<button type="submit" class="btn btn-primary btn-block">Login</button>
			</form>
		</div>
	</div>
</div>
@endsection