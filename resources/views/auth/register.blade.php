@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card card-register mx-auto mt-5">
    <div class="card-header">Registrar uma nova conta</div>
    <div class="card-body">
     <form class="form-horizontal" method="POST" action="{{ route('register') }}">
      {{ csrf_field() }}

      <div class="form-group">
        <div class="form-row">

          <div class="col-md-6">
            <label for="exampleInputName">Nome</label>
            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

            @if ($errors->has('name'))
            <span class="help-block">
              <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
          </div>

          <div class="col-md-6">
            <label for="exampleInputLastName">Email</label>
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

            @if ($errors->has('email'))
            <span class="help-block">
              <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
          </div>


        </div>
      </div>

      <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <label for="exampleInputPassword1">Senha</label>
            <input id="password" type="password" class="form-control" name="password" required>

            @if ($errors->has('password'))
            <span class="help-block">
              <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
          </div>
          <div class="col-md-6">
            <label for="exampleConfirmPassword">Confirmar senha</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary btn-block">Registrar</button>
    </form>
  </div>
</div>
</div>
@endsection