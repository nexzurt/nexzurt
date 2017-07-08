<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>@yield('page-title')</title>
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

          @yield('welcome-msg')

          <div class="col-sm-6 form-message"><img src="{{ asset('nx-assets/nx-admin/nexzurt-logo.png') }}" alt="logo" width="169" height="50" class="logo-img mb-4">

          @yield('welcome-msg2')
            
            @yield('form')

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