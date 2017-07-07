@extends('layouts.admin.auth.auth')

@section('page-title')
  Nexzurt Admin Login
@stop

@section('welcome-msg')
  <div class="col-sm-6 user-message">
    <span class="splash-message text-right">Hello!<br> is good to<br> see you again</span>
    <span class="alternative-message text-right">Know more about <a href="https://twitter.com/nexzurt" target="_blank">Nexzurt</a></span>
  </div>
@stop

@section('welcome-msg2')
  <span class="splash-description text-center mt-5 mb-5">Login to your account</span>
@stop

@section('form')
  @if(session('login-error'))
      <div class="alert alert-danger text-center"> <i class="fa fa-warning faa-flash animated"></i> Incorrect Email-Id / Password</div>
  @endif

  <form method="POST" action="{{ route('admin.login.submit') }}">
      {{ csrf_field() }}

        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
          <div class="input-group"><span class="input-group-addon"><i class="icon s7-user"></i></span>
            <input type="text" placeholder="Email Address" autocomplete="off" name="email" value="{{ old('email') }}" class="form-control" autofocus>
          </div>
            @if ($errors->has('email'))
                <span class="help-block text-danger">
                    <small>{{ $errors->first('email') }}</small>
                </span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
          <div class="input-group"><span class="input-group-addon"><i class="icon s7-lock"></i></span>
            <input type="password" placeholder="Password" name="password" class="form-control">
          </div>
            @if ($errors->has('password'))
                <span class="help-block text-danger">
                    <small>{{ $errors->first('password') }}</small>
                </span>
            @endif
        </div>
        <div class="form-group login-submit">
          <button data-dismiss="modal" type="submit" class="btn btn-lg btn-primary btn-block">Login</button>
        </div>
        <div class="form-group row login-tools">
          <div class="col-6 login-remember">
            <label class="custom-control custom-checkbox mt-2">
              <input type="checkbox" class="custom-control-input" name="remember" {{ old('remember') ? 'checked' : '' }}>
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description">Remember me</span>
            </label>
          </div>
          <div class="col-6 pt-2 text-right login-forgot-password"><a href="{{ route('admin.password.request') }}">Forgot Password?</a></div>
        </div>
  </form>
@stop