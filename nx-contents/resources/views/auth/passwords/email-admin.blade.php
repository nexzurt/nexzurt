@extends('layouts.admin.auth.auth')

@section('page-title')
  Nexzurt Forgot Password
@stop

@section('welcome-msg')
  <div class="col-sm-6 user-message">
    <span class="splash-message text-right">Oops!<br> this will take<br> just a moment.</span>
    <span class="alternative-message text-right">Know more about <a href="https://twitter.com/nexzurt" target="_blank">Nexzurt</a></span>
  </div>
@stop

@section('welcome-msg2')
  <span class="splash-description text-center mt-5 mb-5">Don't worry, we'll send you an email to reset your password.</span>
@stop

@section('form')

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form class="form-forgot-password" method="POST" action="{{ route('admin.password.email') }}">
        {{ csrf_field() }}

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

        <p class="contact mt-4">Don't remember your email? <a href="#">Contact support</a>.</p>
        <div class="form-group login-submit">
            <button data-dismiss="modal" type="submit" class="btn btn-lg btn-primary btn-block">Send Verification Mail</button>
        </div>
    </form>

@endsection
