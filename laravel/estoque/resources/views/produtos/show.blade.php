@extends('produtos.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Mostrar Produto</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{ route('produtos.index') }}"> Voltar</a>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                {{ $produto->nome }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>quantidade</strong>
                {{ $produto->quantidade }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Preço</strong>
                {{ $produto->preco }}
            </div>
        </div>
    </div>
@endsection