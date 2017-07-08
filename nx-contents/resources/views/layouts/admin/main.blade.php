<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <link rel="shortcut icon" href="{{ asset( 'nx-assets/nx-admin/favicon.png' ) }}">
    <title>@yield('page-title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset( 'nx-assets/nx-admin/lib/stroke-7/style.css' ) }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset( 'nx-assets/nx-admin/lib/perfect-scrollbar/css/perfect-scrollbar.min.css' ) }}"/>
    <link rel="stylesheet" href="{{ asset( 'nx-assets/nx-admin/css/app.css' ) }}" type="text/css"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- page specific --}}
      @stack('styles')
    {{-- page specific --}}
  </head>
  <body>
    <nav class="navbar navbar-full navbar-inverse navbar-fixed-top mai-top-header">
      <div class="container"><a href="{{ route('admin.dashboard') }}" class="navbar-brand"></a>
        <!--Left Menu-->
        <ul class="nav navbar-nav mai-top-nav">
          <!-- <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="#" class="nav-link">About</a></li> -->
          <li class="nav-item dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">Nexzurt Services <span class="angle-down s7-angle-down"></span></a>
            <div role="menu" class="dropdown-menu"><a href="#" class="dropdown-item">Information</a><a href="#" class="dropdown-item">Company</a><a href="#" class="dropdown-item">Documentation</a><a href="#" class="dropdown-item">API Settings</a><a href="#" class="dropdown-item">Export Info</a></div>
          </li>
          <!-- <li class="nav-item"><a href="#" class="nav-link">Support</a></li> -->
        </ul>
        {{-- notification section --}}
        @include('layouts.admin.notification')
        <!--User Menu-->
        <ul class="nav navbar-nav float-lg-right mai-user-nav">
          <li class="dropdown nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle nav-link"> <img src="{{ asset( 'nx-assets/nx-admin/img/profile' ) }}/{{ (Auth::user()->profile_pic)? Auth::user()->profile_pic : 'demo.jpg' }}"><span class="user-name">{{ Auth::user()->name }}</span><span class="angle-down s7-angle-down"></span></a>
            <div role="menu" class="dropdown-menu">
              <a href="#" class="dropdown-item"> <span class="icon s7-home"> </span>My Account</a>
              <a href="#" class="dropdown-item"> <span class="icon s7-user"> </span>Profile</a>
              <a href="#" class="dropdown-item"> <span class="icon s7-cash"> </span>Billing</a>
              <a href="#" class="dropdown-item"> <span class="icon s7-tools"> </span>Settings</a>
              <a href="#" class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> <span class="icon s7-power"> </span>Log Out</a>
              <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <div class="mai-wrapper">
        @include('layouts.admin.menubar')
        <div class="main-content container">
            @yield('page-contents')
        </div>
    </div>
    <script src="{{ asset( 'nx-assets/nx-admin/lib/jquery/jquery.min.js' ) }}" type="text/javascript"></script>
    <script src="{{ asset( 'nx-assets/nx-admin/lib/tether/js/tether.min.js' ) }}" type="text/javascript"></script>
    <script src="{{ asset( 'nx-assets/nx-admin/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js' ) }}" type="text/javascript"></script>
    <script src="{{ asset( 'nx-assets/nx-admin/lib/bootstrap/dist/js/bootstrap.min.js' ) }}" type="text/javascript"></script>
    <script src="{{ asset( 'nx-assets/nx-admin/js/app.js' ) }}" type="text/javascript"></script>
    
    {{-- page specific --}}
      @stack('scripts')
    {{-- page specific --}}

    <script type="text/javascript">
      $(document).ready(function(){
        //initialize the javascript
        App.init();
        App.dashboard();
      });
    </script>

  </body>
</html>