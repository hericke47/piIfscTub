@extends('fornecedores.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Adicionar Fornecedor</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{ route('fornecedores.index') }}"> Voltar</a>
        </div>
    </div>

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
    <form action="{{ route('fornecedores.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Razao</strong>
                    <input type="text" name="razao" class="form-control" placeholder="Razao">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>CNPJ</strong>
                    <input type="text" name="cnpj" class="form-control" placeholder="CNPJ">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Número</strong>
                    <input type="text" name="numero" class="form-control" placeholder="Numero">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Whatsapp</strong>
                    <input type="text" name="whatsapp" class="form-control" placeholder="Whatsapp">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Adicionar</button>
            </div>
        </div>

    </form>

@endsection