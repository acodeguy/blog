<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/blog.css">
    <script src="/js/app.js"></script>
    <title>The Blog</title>
  </head>
  <body>

    <div id="app">

      @if( $flash = session('message'))
      <div class="alert alert-success" role="alert">
        {{ $flash }}
      </div>
      @endif

      <header>
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <!-- buttons: new post, etc -->

        @if(Auth::id())
          <ul class="nav" id="auth_user_controls">

            <li class="nav-item">
              <a href="/posts/new">
                <button type="button" class="btn btn-primary">
                  <i class="far fa-file"></i> New Post
                </button>
              </a>
            </li>

          </ul>
        @endif
      </header>

      <!-- main content -->

      <div class="row">

        <div class="col-lg-12">

          <div id="project-info">
            <h1>{{ config('app.name') }}</h1>
            <p>A blog site, running Laravel on by <a href="https://acodeguy.com">A Code Guy</a></p>
            <a href="https://github.com/acodeguy/blog">
              <button type="button" class="btn btn-info">View/Clone the Source Code on GitHub</button>
            </a>
          </div>

          @yield('content')

        </div>

      </div>

      <!-- js -->
      <script src="/js/blog.js"></script>

    </div>

  </body>
</html>
