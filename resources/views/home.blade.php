<?php
$user = 'Patrizia';
?>

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
    <header>
      <nav>
        <div class="container-fluid">
          <div class="row">
            <div id="nav-left">
              <p>Prova nav left</p>
            </div>
            <div id="nav-right">
              <p>Prova nav right</p>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <div class="container">
        <div class="row">
          <h1>Laravel</h1>
          <h2>Hello {{ $user }}!</h2>
          <p>Prova Main</p>
        </div>
      </div>
    </main>
    <footer>
      <div class="container">
        <div class="row">
          <p>Prova footer</p>
        </div>
      </div>
    </footer>
  </body>
</html>
