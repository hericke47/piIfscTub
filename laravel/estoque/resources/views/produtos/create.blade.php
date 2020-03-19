@extends('produtos.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Adicionar Produto</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-success" href="{{ route('produtos.index') }}"> Voltar</a>
        </div>
    </div>
    <!--CSS-->
    <style>
        body{
          background-color: #242424;
        }
    </style>
    <!--FIM CSS-->
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oops!</strong> Ocorreu um erro ao adicionar<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('produtos.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome</strong>
                    <input type="text" name="nome" class="form-control" placeholder="nome">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Quantidade</strong>
                    <input type="text" name="quantidade" class="form-control" placeholder="quantidade">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Preço</strong>
                    <input type="text" name="preco" class="form-control" placeholder="preco">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success">Adicionar</button>
            </div>
        </div>

    </form>
@endsection