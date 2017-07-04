<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>Nexzurt Admin Login</title>
    <link rel="shortcut icon" href="{{ asset( 'nx-assets/nx-admin/favicon.png' ) }}">
    <link rel="stylesheet" type="text/css" href="{{ asset( 'nx-assets/nx-admin/lib/stroke-7/style.css' ) }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset( 'nx-assets/nx-admin/lib/perfect-scrollbar/css/perfect-scrollbar.min.css' ) }}"/>
    <link rel="stylesheet" href="{{ asset( 'nx-assets/nx-admin/css/app.css' ) }}" type="text/css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  </head>
  <body class="mai-splash-screen">
    <div class="mai-wrapper mai-login">
      <div class="main-content container">
        <div class="splash-container row">
          <div class="col-sm-6 user-message"><span class="splash-message text-right">Hello!<br> is good to<br> see you again</span><span class="alternative-message text-right">Know more about <a href="https://twitter.com/nexzurt" target="_blank">Nexzurt</a></span></div>
          <div class="col-sm-6 form-message"><img src="assets/img/logo-2x.png" alt="logo" width="169" height="28" class="logo-img mb-4"><span class="splash-description text-center mt-5 mb-5">Login to your account</span>
            
            @if(session('login-error'))
                <div class="alert alert-danger text-center"> <i class="fa fa-warning faa-flash animated"></i> Incorrect Email-Id / Password</div>
            @endif

            <form method="POST" action="{{ route('admin.login.submit') }}">
                {{ csrf_field() }}

                  <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="input-group"><span class="input-group-addon"><i class="icon s7-user"></i></span>
                      <input type="text" placeholder="Email Address" autocomplete="off" name="email" value="{{ old('email') }}" class="form-control" autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block text-danger">
                                <small>{{ $errors->first('email') }}</small>
                            </span>
                        @endif
                    </div>
                  </div>
                  <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="input-group"><span class="input-group-addon"><i class="icon s7-lock"></i></span>
                      <input type="password" placeholder="Password" name="password" class="form-control">
                       @if ($errors->has('password'))
                            <span class="help-block text-danger">
                                <small>{{ $errors->first('password') }}</small>
                            </span>
                        @endif
                    </div>
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
                    <div class="col-6 pt-2 text-right login-forgot-password"><a href="{{ route('password.request') }}">Forgot Password?</a></div>
                  </div>
            </form>

            <div class="out-links"><a href="#">&copy; {{ date('Y', time()) }} Nexzurt</a></div>
          </div>
        </div>
      </div>
    </div>
    <script src="{{ asset( 'nx-assets/nx-admin/lib/jquery/jquery.min.js' ) }}" type="text/javascript"></script>
    <script src="{{ asset( 'nx-assets/nx-admin/lib/tether/js/tether.min.js' ) }}" type="text/javascript"></script>
    <script src="{{ asset( 'nx-assets/nx-admin/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js' ) }}" type="text/javascript"></script>
    <script src="{{ asset( 'nx-assets/nx-admin/lib/bootstrap/dist/js/bootstrap.min.js' ) }}" type="text/javascript"></script>
    <script src="{{ asset( 'nx-assets/nx-admin/js/app.js' ) }}" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        //initialize the javascript
        App.init();
      });
      
    </script>
  </body>
</html>