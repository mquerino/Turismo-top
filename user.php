<?php
include 'conexao.php';
$link = mysqli_connect($servidor,$usuario,$senha,$banco) or die ("ERRO: Não foi possível conectar-se ao banco de dados.");

$nome = $_POST['nome'];
$user = $_POST['usuario'];
$senha =  $_POST['senha'];


$sql = "INSERT INTO usuarios (nome, usuario, senha) VALUES ('$nome','$user',md5('$senha'))";

$query = mysqli_query($link,$sql);
echo "<a href='index.php'> Voltar</a>";
?>

