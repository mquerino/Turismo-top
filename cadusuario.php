<?php
//include 'conexao.php';
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="estilo2.css">
    <title>Cadastrar</title>
</head>
<body>
<fieldset ><legend>Cadastrar Usuario</legend>
    <form action="user.php" method="POST" id="formLogin">
        <label for="login">Nome</label>
        <input type="text" name="nome"> <br />
        <label for="login">Usuário</label>
        <input type="text" name="usuario"> <br />
        <label for="senha">   Senha</label>
        <input type="password" name="senha"> <br />
        <input type="submit" value="Cadastrar" />
    </form>
</fieldset>
</body>
</html>
