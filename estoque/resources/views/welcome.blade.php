<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>

      #buscar{
        background-color:whitesmoke;
      }

      #buscar:hover{
        background-color:green;
      }

      .navbar{
        height: 80px;
      }
    </style>
</head>
<body>
    {{-- <a href="{{ route('produtos.index') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Produtos </a>
<a href="{{ route('fornecedores.index') }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Fornecedores</a> --}}

<nav class="navbar navbar-expand-lg navbar-dark bg-primary ">
    <a class="navbar-brand" href="{{ route('produtos.index') }}">Produtos</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('fornecedores.index') }}">Fornecedores <span class="sr-only"></span></a>
        </li>
        <a class="nav-link active" href="{{ url('calendario') }}">Calendario <span class="sr-only"></span></a>

    </div>

    
    
    <form class="form-inline my-2 my-lg-0" action="{{ url('produtos/busca') }}" method="POST">
      {{ csrf_field() }}
      <input class="form-control mr-sm-2" type="text" placeholder="Search" name="criterio" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" id="buscar" type="submit">Buscar</button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('admin.logout') }}">Logout <span class="sr-only"></span></a>
          </li>
      </div>
    </form>
  </nav>

</body>
</html>