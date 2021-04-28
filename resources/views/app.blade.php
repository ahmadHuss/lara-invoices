<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="{{ asset('css/app.css?v=').time() }}" type="text/css" rel="stylesheet">
    <title>{{ config('app.name') }}</title>
</head>
<body>
    <nav class="app-navbar">
        <div class="app-navbar--combo container--static">
            <a href="/" class="app-navbar__logo">Invoicer</a>
            <ul class="app-navbar__list">
                @guest
                <li>
                    <a href="{{ route('signin') }}">Signin</a>
                </li>
                <li>
                    <a href="{{ route('signup') }}">Signup</a>
                </li>
                @endguest

                @auth
                  <li>
                   <a href="{{ route('home') }}">Home</a>
                  </li>

                  <li>
                      <form class="d-inline" method="POST" action="{{route('signout')}}">
                          <button type="submit" class="btn btn-link btn-logout">Signout</button>
                          @csrf
                      </form>
                  </li>
                @endauth
            </ul>
        </div>
    </nav>
    <div class="app-section">
        @yield('section')
    </div>
    <footer class="footer">
        <div class="footer--combo container--static">
        <p class="footer__text">
            © Invoicer {{ date('Y') }}
        </p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    @yield('javascript')
</body>
</html>
