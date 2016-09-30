<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <!--- Laravel CSRF token <meta> injection --->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!------------------------------------------------------------------------->
    <!---                                                                   --->
    <!--- Bower style injection                                             --->
    <!---                                                                   --->
    <!------------------------------------------------------------------------->
    <!-- bower:css -->
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css" />
    <!-- endbower -->

    <!------------------------------------------------------------------------->
    <!---                                                                   --->
    <!--- Custom style global injection                                     --->
    <!---                                                                   --->
    <!------------------------------------------------------------------------->
    <link href="/css/app.css" rel="stylesheet">

    <!------------------------------------------------------------------------->
    <!---                                                                   --->
    <!--- Custom per view style injection                                   --->
    <!---                                                                   --->
    <!------------------------------------------------------------------------->
    @yield('style')
  </head>

  <body>

    <div class="pos-f-t">

      <nav class="navbar navbar-light navbar-static-top bg-faded">
        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2" aria-controls="exCollapsingNavbar2" aria-expanded="false" aria-label="Toggle navigation">
          &#9776;
        </button>
        <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
          <a class="navbar-brand" href="/">StaDatus</a>
          <ul class="nav navbar-nav">
            <li class="nav-item"><a class="nav-link" href="{{ url('/example') }}">Example</a></li>
            @if (Auth::guest())
            <li class="nav-item"><a class="nav-link" href="{{ url('/login') }}">Login</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/register') }}">Register</a></li>
            @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="{{ url('/logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
            @endif
          </ul>
        </div>
      </nav>

    </div>
<!--
    <nav class="navbar navbar-light navbar-static-top bg-faded">
      <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2" aria-controls="exCollapsingNavbar2" aria-expanded="false" aria-label="Toggle navigation">
        &#9776;
      </button>
      <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
        <a class="navbar-brand" href="#">StaDatus</a>
        <ul class="nav navbar-nav">
          @if (Auth::guest())
              <li><a href="{{ url('/login') }}">Login</a></li>
              <li><a href="{{ url('/register') }}">Register</a></li>
          @else
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu" role="menu">
                      <li>
                          <a href="{{ url('/logout') }}"
                              onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                              Logout
                          </a>

                          <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                      </li>
                  </ul>
              </li>
          @endif
        </ul>
      </div>
    </nav>
-->
    @yield('content')

    <!------------------------------------------------------------------------->
    <!---                                                                   --->
    <!--- Bower js injection                                                --->
    <!---                                                                   --->
    <!------------------------------------------------------------------------->
    <!-- bower:js -->
    <script src="/bower_components/jquery/dist/jquery.js"></script>
    <script src="/bower_components/tether/dist/js/tether.js"></script>
    <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- endbower -->

    <!------------------------------------------------------------------------->
    <!---                                                                   --->
    <!--- Custom js global injection                                        --->
    <!---                                                                   --->
    <!------------------------------------------------------------------------->
    <!--- Laravel CSRF token JS injection --->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <script src="/js/app.js"></script>

    <!------------------------------------------------------------------------->
    <!---                                                                   --->
    <!--- Custom per view js injection                                      --->
    <!---                                                                   --->
    <!------------------------------------------------------------------------->
    @yield('js')

  </body>
</html>
