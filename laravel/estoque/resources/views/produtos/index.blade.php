@extends('produtos.layout')

@section('content')

     <!-- Font Awesome -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/css/mdb.min.css" rel="stylesheet">


    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/js/mdb.min.js"></script>

<!--Grupo de Botões Principal-->
    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
    <button type="button" class="btn btn-purple">Principal</button>
    <button type="button" class="btn btn-purple">Calendário</button>
    <button type="button" class="btn btn-purple">Retirados</button>

    <div class="btn-group" role="group">
        <button id="btnGroupDrop1" type="button" class="btn btn-purple dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Cadastrar..
        </button>
        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
        <a class="dropdown-item" href="#">Fornecedor</a>
        </div>
    </div>
    </div>
<!--fim do grupo-->
<!-- CSS -->
<style>
body{
    background-color: #242424;
}
td,tr,th{
    color: black;
}
</style>
<!-- FIM CSS-->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Cadastro de Produtos</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-success " href="{{ route('produtos.create') }}"> Adicionar Produto</a>
        </div>
    </div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    {{ $message }}
</div>
@endif

@if(sizeof($produtos) > 0)
<table class="table table-sm table-bordered">
    <tr>
        <th>#</th>
        <th>nome</th>
        <th>quantidade</th>
        <th>preço</th>
        <th width="268px" >Ações</th>
    </tr>
    @foreach ($produtos as $produto)

    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $produto->nome }}</td>
        <td>{{ $produto->quantidade }}</td>
        <td>{{ $produto->preco }}</td>
        <td>

    
            <form action="{{ route('produtos.destroy',$produto->id) }}" method="POST">

                <a class="btn btn-primary" href="{{ route('produtos.edit',$produto->id) }}">Editar</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@else
<div class="alert alert-alert">adicionando produto</div>
@endif

{!! $produtos->links() !!}

@endsection
