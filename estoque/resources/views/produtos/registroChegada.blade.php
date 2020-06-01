@extends('produtos.layout')
@extends('../welcome')
@section('content')
<style>
    

  label, input{
      float:center;
  }

  label{
    display:inline-block;
    font:18px Lucida;
    float:left;
  }
  #quantidade{
      width: 20%;
  }
</style>
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Registro Chegada</h2>
        </div>
       
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif


    @if(sizeof($produtos) > 0)
        <table class="table" id="id_tabela">
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Total</th>
                <th>Preço</th>
                <th>quantidade<th>
            </tr>
            @foreach ($produtos as $produto)
                <tr>
                    <td>
                        <div >
                            <label></label>
                            <input type="checkbox" class="checkboxQuantidade">
                          </div>
                    </td>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ $produto->preco . " R$" }}</td>
                    <td>{{ $produto->preco * $produto->quantidade." R$"}}</td>
                    <td id="quantidade"><input type="text" class="form-control" style="width:100%;"value="{{ $produto->quantidade }}"></td>

                </tr>
            @endforeach
        </table>
    @else
        <div class="alert alert-alert">adicionando produto</div>
    @endif

    <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
        <a class="btn btn-success " href="{{ route('produtos.create') }}"> Adicionar Produto</a>
    </div>


@endsection