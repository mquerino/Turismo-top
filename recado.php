<?php
include 'conexao.php';
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="estilo/estilo5.css">
    <title>Recados</title>
</head>
<body>
<div id="formLario">
    <fieldset><legend>Deixe seu Recado</legend>
        <form action="mensagem.php" method="post">
            <class="forminterno">
            <input id type="hidden" name="id">

            <label>Nome:</label><input type="text" name="nome"><br>

            <label>Cidade:</label><input type="text" name="cidade"><br>

            <label>Email:</label><input type="email" name="email"><br>

            <label>Recado:</label><textarea type="text" name="mensagem">
    </textarea><br>
            <br>
            <input type="submit" autofocus="autofocus" values="enviar">

        </form>
    </fieldset>
</div>
<a href="index.php">Voltar</a>
</body>
</html>
