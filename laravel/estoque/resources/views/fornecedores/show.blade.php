@extends('fornecedores.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Mostrar Fornecedores</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{ route('fornecedores.index') }}"> Voltar</a>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Razao</strong>
                {{ $fornecedor->razao }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>cnpj</strong>
                {{ $fornecedor->cnpj }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Número</strong>
                {{ $fornecedor->numero }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Whatsapp</strong>
                {{ $fornecedor->whatsapp }}
            </div>
        </div>
    </div>
@endsection