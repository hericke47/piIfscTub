@extends('produtos.layout')
@extends('../welcome')
@section('content')

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
        <table class="table table-bordered table-dark" id="id_tabela">
            <tr>
                <th>#</th>
                <th>nome</th>
                <th>quantidade</th>
                <th>preço</th>
                <th>Total<th>
            </tr>
            @foreach ($produtos as $produto)
                <tr>
                    <td>{{ $produto->id }}</td>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ $produto->quantidade }}</td>
                    <td>{{ $produto->preco . " R$" }}</td>
                    <td>{{ $produto->preco * $produto->quantidade." R$"}}</td>
                    <td>
                        <form action="{{ route('produtos.destroy',$produto->id) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('produtos.show',$produto->id) }}">Mostrar</a>
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


@endsection