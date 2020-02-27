<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro </title>
    <link href="css/estilo.css" rel="stylesheet">
</head>
<body>
    <div id="corpo-form">
    <h1>Cadastro</h1>
    <!--Formulario de Cadastro de Usuario-->
    <form method="POST" >       
        <input name="nome" type="text" placeholder="Nome Completo" maxlenght="30">
        <input name="email" type="email" placeholder="Email" maxlenght="40">
        <input name="senha" type="password" placeholder="Senha" maxlenght="30">
        <input name="confirmsenha" type="password" placeholder="Confirmar Senha" maxlenght="20">
        <input name="cadastrar" type="submit" placeholder="Cadastrar" maxlenght="20">
        <a href="index.php">Voltar à tela de login</a>
    </form>
</div>

</body>
</html>