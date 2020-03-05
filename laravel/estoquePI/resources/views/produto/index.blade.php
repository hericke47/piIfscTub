<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Laravel CRUD 6.0</title>
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
</head>
<body>
<style>
    .container{
        padding:0.5%;
    }

    
</style>
    <div class="container">
    <h1 class="alert alert-success">CRUD Laravel 6</h1>

    <div class="row">
    <a href="" class="btn btn-info" style="margin-left:80% " data-toggle="modal" data-target="#exampleModal" >Adicionar Produto</a>
    <div class="col-md-12">
    <table class="table table-bordered table-dark">
    <thead>
        <tr>    
            <th>#</th>
            <th>Nome</th>
            <th>Quantidade</th>
            <th>Preço</th>
            <th>Action</th>
        </tr>
        <tbody>
            <tr>
           <th></th>
           <th></th>
           <th></th>
           <th></th>
           <th></th>
        </tr>
        </tbody>
    </thead>
    </table>

{{-- ----------------------------------------------- ADD NEW PRODUCT ----------------------------------------------- --}}

<!-- Button trigger modal -->
    
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-lg modal-right modal-success" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Cadastrar Produto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">

                <form action="{{route('produto.store')}}" method="post">
                    @csrf

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Nome Produto:</span>
                        </div>
                        <input type="text" class="form-control" name="nome" placeholder="Produto" >
                    </div>
                    <br>
                    <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Quantidade:</span>
                    </div>
                    <input type="text" class="form-control" name="quantidade" placeholder="quantidade"  >
                </div>
                <br>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Preço:</span>
                    </div>
                    <input type="text" class="form-control" name="preco" placeholder="preço" >
                </div>
                
            </div>
            <div class="modal-footer">
            <button type="submit" class="btn btn-warning" data-dismiss="modal">Sair</button>
            <button type="submit" class="btn btn-success">Salvar Produto</button>
            </div>
        </form>
        </div>
        </div>
    </div>
    </div>
    </div>
    </div>
</body>
</html>