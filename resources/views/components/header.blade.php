<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    {{-- <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$head_title}}</title>
    <link rel="icon" type="image/x-icon" href="{{asset('images/logo.svg')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>
<body>
  <?php
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');
  ?>
    {{-- <h1 class="h1">{{$body_title}}</h1> --}}
    



  
<!-- Cabeçalho -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="{{asset('/')}}">
    <img src="{{asset('images/logo.svg')}}" width="30" height="30" class="d-inline-block align-top" alt="">
    Xirp Plantao
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Login</a>
      </li>
    </ul>
  </div>
</nav>



