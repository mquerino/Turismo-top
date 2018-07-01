<?php
include 'conexao.php';
//include 'seguranca.php';
?>
<html>
<head>
<title>Cadastro de Clientes </title>
<meta name="author" content="Anderson">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta http-equiv="content-language" content="Portugues">
    <link rel="stylesheet" href="estilo/estilo2.css" type="text/css" />
</head>
<body>
<div id="topo" style="position:relative; margin:0 0 30px 0;">
        <div id="topo-imagem" style="float: left;">
    Cadastro de Clientes        </div>
</div>
<div id="corpo-interno">
    <div id="sair">
    Usuário: <strong>
Não identificado</strong> </div>

<b>Identifique-se<b>
<form action="valida.php" method="POST" id="formLogin">
	<label for="login">Usuário</label>
	<input type="text" name="usuario"> <br />
	<label for="senha">   Senha</label>
	<input type="password" name="senha"> <br />
	<input type="submit" value="Entrar" />
</form>

<br />
</div>
</body>
</html>