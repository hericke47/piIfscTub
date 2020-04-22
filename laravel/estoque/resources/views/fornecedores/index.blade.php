@extends('fornecedores.layout')
@extends('../welcome')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <h2 class="text-center">Cadastro de Fornecedores</h2>
    </div>
    <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
        <a class="btn btn-success " href="{{ route('fornecedores.create') }}"> Adicionar Fornecedor</a>
    </div>
</div>

@if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    @if(sizeof($fornecedores) > 0)
        <table class="table table-bordered table-dark">
            <tr>
                <th>#</th>
                <th>Razao</th>
                <th>CNPJ</th>
                <th>Número</th>
                <th>Whatsapp</th>
            </tr>
            @foreach ($fornecedores as $fornecedor)
                <tr>
                    <td>{{ ++$i }} </td>
                    <td>{{ $fornecedor->razao }}</td>
                    <td>{{ $fornecedor->cnpj }}</td>
                    <td>{{ $fornecedor->numero }}</td>
                    <td>{{ $fornecedor->whatsapp }}</td>
                    <td>
                        <form action="{{ route('fornecedores.destroy',$fornecedor->id) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('fornecedores.show',$fornecedor->id) }}">Mostrar</a>
                            <a class="btn btn-primary" href="{{ route('fornecedores.edit',$fornecedor->id) }}">Editar</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    @else
        <div class="alert alert-alert">adicionando Fornecedor</div>
    @endif

    {!! $fornecedores->links() !!}

    @endsection