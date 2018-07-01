<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'dbturismo';
$link = mysqli_connect($servidor,$usuario,$senha,$banco) or die ("ERRO: Não foi possível conectar-se ao banco de dados.");