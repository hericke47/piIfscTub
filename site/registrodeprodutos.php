<?php
    include 'includes.php';
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Produtos</title>
    <link href="css/estilomenu.css" rel="stylesheet">
</head>
<body> 

    <!--Tabela de Cadastro de Produtos-->
    <h1>Cadastro de Produtos</h1>

    <div class="alinhacad" id="espaco">
        <p class="alinhacad">Nome</p>
        <input class="alinhacad" type="" name="nomeproduto" placeholder="" maxlength=""><br><br><br>

        <p class="alinhacad">Quantidade</p>
        <input class="alinhacad" type="" name="quantiproduto" placeholder="" maxlength=""><br><br><br>

        <p class="alinhacad">Fornecedor</p>
        <input class="alinhacad" type="" name="fornproduto" placeholder="" maxlength=""><br><br><br>

        <p class="alinhacad">Preço</p>
        <input class="alinhacad" type="" name="precoproduto" placeholder="" maxlength=""><br><br><br>

        <p class="alinhacad">Data chegada</p>
        <input class="alinhacad" type="date" name="data" placeholder="" maxlength=""><br><br><br>    
    </div>
     <!--Formatação Separada no CSS-->
    <div id="separado">
        <input class="alinharseparado" type="submit" name="cadproduto" placeholder="Cadastrar">
        <input class="alinharseparado" type="reset" name="limpar" placeholder="Limpar">
    </div>
</body>
</html>

