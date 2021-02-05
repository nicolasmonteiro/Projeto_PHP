<?php
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Select Hortifruti</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">-->
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <?php require('inserir_favicon.php')?>
</head>
<body>
  <nav class="green darken-3" role="navigation">
    <div class="nav-wrapper">
    <img src="images/logo/logo.png" width="56" height="56" alt="" title="Select Hortifruti">
      <a id="logo-container" href="#" class="brand-logo">Select Hortifruti</a>
      <ul class="right hide-on-med-and-down">
      <!-- Tentei adicionar o nome, antes tinha dado certo, mas depois não consegui, continuarei tentando nas próximas atualizações. -->
        <!--  <li><p>Seja bem vindo (a) <?php echo $nome;?></p></li> -->
        <li><a href="frutas.php">Frutas</a></li>
        <li><a href="verduras.php">Verduras/legumes</a></li>
        <li><a href="folhagens.php">Folhagens</a></li>
        <li><a href="raizes.php">Raízes/Tubérculos</a></li>
       <?php require_once ('val_entrada_saida.php')?>
      </ul>
      

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Select Hortifruti</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center"> Select Hortifruti</h1>
        <div class="row center">
          <h5 class="header col s12 "><font color = white>Produtos selecionados e saudáveis você encontra aqui!</font></h5>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="images/background/background1.jpg " alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m3">
          <div class="icon-block">
            <h5 class="center"><a class="waves-effect waves-light btn-small" href="frutas.php">Frutas</a></h5>
            <br>
            <p class="center"><img src="images/icons/frutas/abacaxi.png" width="49.84" height="49"></p>
            <br>
            <p class="center"><img src="images/icons/frutas/banana.png" width="49.84" height="49"></p>
            <br>
            <p class="center"><img src="images/icons/frutas/limão.png" width="49.84" height="49"></p>
            <br>
            <p class="center"><img src="images/icons/frutas/maça.png" width="49.84" height="49"></p>
            <br>
            <p class="center"><img src="images/icons/frutas/uva.png" width="49.84" height="49"></p>
          </div>
        </div>
        <div class="col s12 m3">
          <div class="icon-block">
            <h5 class="center"><a class="waves-effect waves-light btn-small" href="verduras.php">Verduras/Legumes</a></h5>
            <br>
            <p class="center"><img src="images/icons/verduras/tomate.png" width="49.84" height="49"></p>
            <br>
            <p class="center"><img src="images/icons/verduras/cebola.png" width="49.84" height="49"></p>
            <br>
            <p class="center"><img src="images/icons/verduras/jerimum.png" width="49.84" height="49"></p>
            <br>
            <p class="center"><img src="images/icons/verduras/pimentao.png" width="49.84" height="49"></p>
            <br>
            <p class="center"><img src="images/icons/verduras/batata.png" width="49.84" height="49"></p>
          </div>
        </div>

        <div class="col s12 m3">
          <div class="icon-block">
            <h5 class="center"><a class="waves-effect waves-light btn-small " href="Folhagens.php">Folhagens</a></h5>
            <br>
            <p class="center"><img  src="images/icons/folhagens/cebolinha.webp" width="49.84" height="49"></p>
            <br>
            <p class="center"><img  src="images/icons/folhagens/alface.png" width="49.84" height="49"></p>
            <br>
            <p class="center"><img  src="images/icons/folhagens/coentro.png" width="49.84" height="49"></p>
            <br>
            <p class="center"><img  src="images/icons/folhagens/couve.png" width="49.84" height="49"></p>
            <br>
            <p class="center"><img  src="images/icons/folhagens/repolho.png" width="49.84" height="49"></p>
          </div>
        </div>
            
        <div class="col s12 m3">
          <div class="icon-block">
        <h5 class="center"><a class="waves-effect waves-light btn-small" href="raizes.php" >Raízes/Tubérculos</a></h5>
            <br>
            <p class="center"><img src="images/icons/raizes/batata_doce.jpg" width="49.84" height="49"></p>
            <br>
            <p class="center"><img src="images/icons/raizes/inhame.png" width="49.84" height="49"></p>
            <br>
            <p class="center"><img src="images/icons/raizes/macaxeira.png" width="49.84" height="49"></p>
            <br>
            <p class="center"><img src="images/icons/raizes/beterraba.png" width="49.84" height="49"></p>
            <br>
            <p class="center"><img src="images/icons/raizes/cenoura.png" width="49.84" height="49"></p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 "><font color = white>Faça sua feira sem sair de casa!</font> </h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="images/background/background2.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4><font color = green>Nossos produtos e serviços</font></h4>
          <p class="left-align light">Aqui na Select Hortifruti você encontra frutas, legumes, verduras, folhagens, raízes e tubérculos selecionados e diferenciados. Nossos produtos vêm diretamente de produtores, distribuidores e importadores, prezando a alta qualidade de nossos produtos através de inspeção e supervisão de uma nutricionista, estabelecendo o patamar que você merece.
Além disso para sua comodidade, temos a  opção de entrega onde desejar.
</p>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12"><font color = white>Cuidar da saúde é comer bem e a gente está aqui para te ajudar com isso!</font></h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="images/background/background3.jpg" alt="Unsplashed background img 3"></div>
  </div>

  <footer class="green darken-3">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Quem somos? </h5>
          <p class="grey-text text-lighten-4">Somos a maior rede de hortifrutigranjeiros de Pernambuco. Aqui você sempre encontra produtos selecionados, fresquinhos e com preços que cabem no seu bolso.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Setores</h5>
          <ul>
            <li><a class="white-text" href="frutas.php">Frutas</a></li>
            <li><a class="white-text" href="verduras.php">Verduras/Legumes</a></li>
            <li><a class="white-text" href="folhagens.php">Folhagens</a></li>
            <li><a class="white-text" href="raizes.php">Raízes/Tubérculos</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Contato</h5>
          <ul>
            <li><a class="white-text" href="#!">Endereço</a></li>
            <li><a class="white-text" href="#!">E-mail</a></li>
            <li><a class="white-text" href="#!">Telefone</a></li>
            <li><a class="white-text" href="#!">Facebook</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Feito por <a class="brown-text text-lighten-3" href="#">Nicolas Monteiro</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
