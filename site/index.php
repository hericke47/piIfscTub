<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="css/estilo.css" rel="stylesheet">
</head>
<body>
    <div id="corpo-form">
    <h1>Entrar</h1>
    <!--Login de Usuario-->
    <form method="POST" >     
        <input name="usuario" type="email" placeholder="Usuário">
        <input name="senhalogin" type="password" placeholder="Senha">
        <input id="botao"type="submit" placeholder="Acessar">
        <a href="cadastro.php">Ainda nao é inscrito ?<strong>Cadastre-se</strong></a>
    </form>
</div>

</body>
</html>