<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <link rel="stylesheet" href="css/css_geral.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="{{asset('css/css_geral.css')}}">
    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto" rel="stylesheet">

</head>

<body class="antialiased">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{url('/')}}">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="{{url('/contatos')}}">Contatos</a>
          <a class="nav-link" href="{{url('/events/create')}}">Criar Eventos</a>
          <a class="nav-link" href="{{url('/searchevents',['id' => base64_encode(1)])}}">Saber mais</a>
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </div>
      </div>
    </div>
</nav>
  @if (session('msg'))
    <div class="toast bg-success fade show" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header"><strong class="mr-auto">Sucesso!</strong><small>Subtitle</small><button data-dismiss="toast" type="button" class="ml-2 mb-1 close" aria-label="Close"><span aria-hidden="true">×</span></button>
      </div>
      <div class="toast-body">{{session('msg')}}</div>
    </div>
  @endif
  @yield('content'){{-- Utilizado para implementar o conteúdo --}}

  <footer>Events &copy; 2023</footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</body>

</html>
