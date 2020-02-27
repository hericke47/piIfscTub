<?php
    include 'includes.php';
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link href="css/estilomenu.css" rel="stylesheet">
</head>
<body> 

    <!--Tabela de Cadastro de Produtos-->
    <h1>Cadastro de Produtos</h1>
<form method >
    <div class="alinhacad" id="espaco">
        <p class="alinhacad">Nome</p>
        <input class="alinhacad" type="" name="nomeproduto" placeholder="" maxlength=""><br><br><br>

        <p class="alinhacad">Quantidade</p>
        <input class="alinhacad" type="" name="quantiproduto" placeholder="" maxlength=""><br><br><br>

        <p class="alinhacad">Fornecedor</p>
        <input class="alinhacad" type="" name="fornproduto" placeholder="" maxlength=""><br><br><br>

        <p class="alinhacad">Preço</p>
        <input class="alinhacad" type="" name="precoproduto" placeholder="" maxlength=""><br><br><br>

        <p class="alinhacad">Data de chegada</p>
        <input class="alinhacad" type="date" name="data" placeholder="" maxlength=""><br><br><br>    

     <!--Formatação Separada no CSS-->
     <div id="separado">
        <input type="submit" name="cadproduto" placeholder="Cadastrar" value="Enviar">
        <input type="reset" name="limpar" placeholder="Limpar" value="Limpar Campos">
</form>
</div>
</div>
   
</body>
</html>

