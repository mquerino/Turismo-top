<?php
include 'seguranca.php';
protegePagina();
//Verifica se a variável nome foi passada. Na primeira vez nunca é passada pelo GET.
if (!isset($_GET["nome"])){
    $_SESSION['usuario']='visistante';} // Cria a variável usuário é coloca a informação de visitante.
else{
    $_SESSION['usuario']=$_GET["nome"]; // Recupera o nome que foi passado com GET.
}
$_SESSION['acessos']=+1; // Conta cada vez que entrou na sessão.
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>ADM Guia Turístico</title>
        <link rel="stylesheet" href="estilo.css">
</head>
<body>
  <fieldset>
<div class="flex-container">
<header>
  <h1 id="prin"><img src="logo.jpeg" width="24" height="24">ADM Guia Turístico</h1>
  <!--<img src="ponte.jpg" background="width="1270" height="100" alt="Ponte">-->
</header>
<fieldset>
<nav class="nav">
  <fieldset>     <center>
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="administrador.php">Administrador</a></li>
<li><a href="formulario.php">Enviar uma mensagem</a></li>
    <li> <?php
        echo "Logado: ".$_SESSION['usuarioNome'];
        ?>
    </li>
    <li>
        <?php
        echo "Acesso: ".$_SESSION['acessos'];
        ?>
    </li>
    <a><a href="<?php
        session_destroy(); // Destrói toda sessão
        ?>"</a>Sair</li>
</ul>
<nav id="menu">
<ul>
  <li><a href="armazem.php">Armazém</a></li>
  <li><a href="braco.php">Braço do Norte</a></li>
  <li><a href="capiva.php">Capivari de Baixo</a></li>
  <li><a href="grao.php">Grão Pará</a></li>
  <li><a href="gravatal.php">Gravatal</a></li>
  <li><a href="imarui.php">Imaruí</a></li>
  <li><a href="imbituba.php">Imbituba</a></li>
  <li><a href="jaguaruno.php">Jaguaruna</a></li>
  <li><a href="laguna.php">Laguna</a></li>
  <li><a href="pedras.php">Pedras Grandes</a></li>
  <li><a href="pesca.php">Pescaria Brava</a></li>
  <li><a href="rio.php">Rio Fortuna</a></li>
  <li><a href="sangao.php">Sangão</a></li>
  <li><a href="santa.php">Santa Rosa de Lima</a></li>
  <li><a href="sao.php">São Ludgero</a></li>
  <li><a href="saomar.php">São Martinho</a></li>
  <li><a href="treze.php">Treze de Maio</a></li>
  <li><a href="tubarao.php">Tubarão</a></li>
  
</ul>
</nav>
</center></fieldset>
</nav>
</fieldset>
   <h1><strong>Cidade em destaque</strong></h1>
<fieldset>
<article class="article">
<div class="content">
    <img src="imagens/catedral_tubarao.jpg"align="right"  width="400" height="400"/>
</div>
  <img src="imagens/bandeira_tubarao.jpg" align="center">
  <h1>Tubarão</h1>
  <p>Tubarão é um município brasileiro localizado no sul do estado de Santa Catarina. 
    Situa-se na latitude 28º28'00" sul e longitude 49º00'25" oeste, estando a uma altitude 
    média de 9 metros acima do nível do mar, com uma área de 301,755 km². De acordo com o 
    IBGE a população total observada no último recenseamento realizado em 2010 foi de 97.235 
    habitantes. Conforme estimativa realizada pelo IBGE, em 2017 o município possuía 104.457 
    moradores.</p>
  <p>O nome da cidade deve-se ao rio Tubarão, que em tupi-guarani era chamado Tubá-Nharô,[6] 
    "pai feroz". Outra versão corrente relaciona ainda este nome com o de um cacique muito 
    influente que habitava a região. Não se relaciona, porém, ao peixe homônimo.</p>
  <p><strong>Com a abertura do caminho entre Lages e Tubarão, por volta de 1773, iniciou-se o 
    povoamento da cidade. O rio Tubarão era parte da rota Lages/Laguna, tendo como ponto de 
    parada os portos do "Poço Fundo" e do "Poço Grande", ambos na região da atual Tubarão. 
    Em agosto de 1774, duas sesmarias, com área de uma légua quadrada[nota 1] cada uma, situadas
     no atual perímetro urbano, foram doadas ao capitão João da Costa Moreira e ao sargento-mor 
     Jacinto Jaques Nicós,[7][8] marcando o início efetivo do povoamento.</strong></p>
</article>
</fieldset>

<fieldset>
<anside class="anside">  
    <h3><a target="_blank" href="https://www.google.com.br/maps/place/Tubar%C3%A3o+-+SC/@-28.4779597,-49.1832074,11z/data=!3m1!4b1!4m5!
      3m4!1s0x952142efba29114d:0xb811c0e3c0044343!8m2!3d-28.4818875!4d-49.0058727">Localização</h3></a>    
</anside>
</fieldset>

<fieldset>
   <center><h4><a href="#prin"><img src="Topo.jpg" width="50" height="50"></a> </h4></center>

<footer>Copyright &copy; adm.com.br</footer>

</fieldset>
</body>
</html>
