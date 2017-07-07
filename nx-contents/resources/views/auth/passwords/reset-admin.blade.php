@extends('layouts.admin.auth.auth')

@section('page-title')
  Nexzurt Reset Password
@stop

@section('welcome-msg')
  <div class="col-sm-6 user-message">
    <span class="splash-message text-right">Hello!<br> is good to<br> see you again</span>
    <span class="alternative-message text-right">Know more about <a href="https://twitter.com/nexzurt" target="_blank">Nexzurt</a></span>
  </div>
@stop

@section('welcome-msg2')
  <span class="splash-description text-center mt-5 mb-5">Reset your account password.</span>
@stop

@section('form')

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form class="form-forgot-password" method="POST" action="{{ route('admin.password.request') }}">
        {{ csrf_field() }}

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <div class="input-group"><span class="input-group-addon"><i class="icon s7-mail"></i></span>
              <input type="email" placeholder="E-Mail Address" name="email" value="{{ old('email') }}" class="form-control" autofocus>
            </div>
            @if ($errors->has('email'))
                <span class="help-block text-danger">
                    <small>{{ $errors->first('email') }}</small>
                </span>
            @endif
        </div>

        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
          <div class="input-group"><span class="input-group-addon"><i class="fa fa-key icon"></i></span>
            <input type="password" placeholder="New Password" name="password" class="form-control">
          </div>
            @if ($errors->has('password'))
                <span class="help-block text-danger">
                    <small>{{ $errors->first('password') }}</small>
                </span>
            @endif
        </div>

        <div class="form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
          <div class="input-group"><span class="input-group-addon"><i class="fa fa-key icon"></i></span>
            <input type="password" placeholder="Confirm Password" name="password_confirmation" class="form-control">
          </div>
            @if ($errors->has('password_confirmation'))
                <span class="help-block text-danger">
                    <small>{{ $errors->first('password_confirmation') }}</small>
                </span>
            @endif
        </div>

        <div class="form-group login-submit">
            <button data-dismiss="modal" type="submit" class="btn btn-lg btn-primary btn-block">Reset Password</button>
        </div>
    </form>

@endsection
