<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Laravel Primi Passi</title>
    <meta charset="utf-8">
    <title>Laravel Primi Passi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div id="page-wrapper">
      {{-- Header --}}
      <header>
        {{-- Navbar --}}
        <nav>
          <div class="container-fluid">
            <div class="row">
              <div id="nav-logo">
                <a href="https://laravel.com/">
                  <img src=" {{asset('img/laravel_logo.png')}}" alt="Laravel logo">
                </a>
              </div>
              <div id="nav-right">
                <h2>Hello {{ $user_name }}!</h2>
              </div>
            </div>
          </div>  {{-- Closing Navbar container --}}
        </nav>
        {{-- Jumbotron --}}
        <div id="jumbotron">
          <div class="container">
            <div class="row">
              <h1>Laravel documentation</h1>
            </div>
            <div class="row">
              <div class="jumbo-info">
                <div class="jumbo-img">
                  <a href="https://laravel.com/docs/7.x">
                    <img src=" {{asset('img/laravel_7.png')}}" alt="Laravel 7">
                  </a>
                </div>
                <div class="jumbo-box">
                  <h3>The PHP Framework for Web Artisans</h3>
                  <p>Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.</p>
                </div>
              </div>
            </div>
          </div>  {{-- Closing Jumbotron container --}}
        </div>
      </header>
      {{-- Main --}}
      <main>
        <div class="container">
          {{-- Section "Else-If" --}}
          <section id="if-else">
            <div class="row">
              <i class="fas fa-address-book"></i>
            </div>
            <div class="row">
              @if (count($users_list) > $max_num)
                <div class="if-else-box">
                  <h4>The users' list has more than {{$max_num}} users.</h4>
                  <p>It has {{count($users_list)}} users.</p>
                </div>
              @elseif (count($users_list) === $max_num)
                <div class="if-else-box">
                  <h4>The users' list has precisely {{$max_num}} users.</h4>
                </div>
              @else
                <div class="if-else-box">
                  <h4>The users' list has less than {{$max_num}} users.</h4>
                  <p>It has {{count($users_list)}} users.</p>
                </div>
              @endif
            </div>
          </section>
          {{-- Section "Forelse" --}}
          <section id="forelse-loop">
            <div class="row">
              <h5>Users' list</h5>
              @forelse ($users_list as $user)
                <h6> {{$user}} </h6>
                @if ($loop->last)
                  <span>.</span>
                @else
                  <span>-</span>
                @endif
              @empty
                <p>The users' list is empty.</p>
              @endforelse
            </div>
          </section>
        </div>  {{-- Closing Main container --}}
      </main>
      {{-- Footer --}}
      <footer>
        <div class="container">
          <div class="row">
            <small>
              Powered by:
              <span>Patrizia Crimi</span>
            </small>
          </div>
        </div>
      </footer>
    </div>  {{-- Closing page-wrapper --}}
  </body>
</html>
