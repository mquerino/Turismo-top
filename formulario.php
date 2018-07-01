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
  <h1 id="prin"><img src="imagens/logo.jpeg" width="24" height="24">ADM Guia Turístico</h1>
    </header>
        <fieldset>
<nav class="nav">
            <fieldset><center>
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="administrador.php">Administrador</a></li>
<li><a href="#men">Enviar uma mensagem</a></li>
</ul>
<nav id="menu">
  <ul>
    <li><a href="armazem.php">Armazém</a></li>
    <li><a href="cidades/braco.php">Braço do Norte</a></li>
    <li><a href="cidades/capiva.php">Capivari de Baixo</a></li>
    <li><a href="cidades/grao.php">Grão Pará</a></li>
    <li><a href="cidades/gravatal.php">Gravatal</a></li>
    <li><a href="cidades/imarui.php">Imaruí</a></li>
    <li><a href="cidades/imbituba.php">Imbituba</a></li>
    <li><a href="cidades/jaguaruno.php">Jaguaruna</a></li>
    <li><a href="cidades/laguna.php">Laguna</a></li>
    <li><a href="cidades/pedras.php">Pedras Grandes</a></li>
    <li><a href="cidades/pesca.php">Pescaria Brava</a></li>
    <li><a href="cidades/rio.php">Rio Fortuna</a></li>
    <li><a href="cidades/sangao.php">Sangão</a></li>
    <li><a href="cidades/santa.php">Santa Rosa de Lima</a></li>
    <li><a href="cidades/sao.php">São Ludgero</a></li>
    <li><a href="cidades/saomar.php">São Martinho</a></li>
    <li><a href="cidades/treze.php">Treze de Maio</a></li>
    <li><a href="cidades/tubarao.php">Tubarão</a></li>
    
  </ul>
</nav>
</center></fieldset>
</nav>
                </fieldset>
<form action="mensagem.php" method="post">
    <h3 id="men">Mande uma mensagem :</h3>
    <fieldset>
      <label for="nome">Nome</label>
       <input type="text" name="nome"><br><br>

      <label for="cidade">Cidade</label>
      <input type="text" name="cidade"><br><br>

      <label for="nome">Email</label>
       <input type="text" name="email"><br><br>

      <label for="nome">Mensagem</label>
      <textarea name="mensagem"></textarea><br><br>

      <input type="submit" value="enviar">
    </form>
    </fieldset>
   <h4><a href="#prin"><img src="imagens/Topo.jpg" width="50" height="50"></a> </h4>
<footer>Copyright &copy; adm.com.br</footer>
</div>
</fieldset>
</body>
</html>
