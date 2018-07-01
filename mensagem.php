<?php
include 'conexao.php';

$nome = $_POST['nome'];
$cidade = $_POST['cidade'];
$email =  $_POST['email'];
$msg = $_POST['mensagem'];

$link = mysqli_connect($servidor,$usuario,$senha,$banco) or die ("ERRO: Não foi possível conectar-se ao banco de dados.");

$sql = "Insert into recado (nome,cidade,email,mensagem) values ('$nome','$cidade','$email','$msg')";
$query = mysqli_query($link,$sql);
echo "<a href='index.php'> Voltar</a>";