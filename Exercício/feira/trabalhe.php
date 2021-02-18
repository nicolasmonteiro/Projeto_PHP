<html>

<head>
  <meta charset="utf-8" />
  <title>Select Hortifruti</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href= "css/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <?php require 'inserir_favicon.php';?>

  
</head>

<body>
<?php
require ('autenticar_paginas.php');
?>
<nav>
    <div class="nav-wrapper green darken-3">
    <a id="logo-container" href="index.php" class="brand-logo"><img src="images/logo/logo.png" width="60" height="60" alt="" title="Feira Verde">Select Hortifruti</a>
    <nav>
    <div class="nav-wrapper green darken-3">
    <a id="logo-container" href="index.php" class="brand-logo"><img src="images/logo/logo.png" width="60" height="60" alt="" title="Feira Verde">Select Hortifruti</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="frutas.php">Frutas</a></li>
        <li><a href="verduras.php">Verduras/legumes</a></li>
        <li><a href="folhagens.php">Folhagens</a></li>
        <li><a href="raizes.php">Raízes/Tubérculos</a></li>
        <li><a href="carrinho.php"><i class="material-icons left">add_shopping_cart</i>Carrinho</a></li>
        <li><a href="#"><i class="material-icons left">description</i>Pedidos</a></li>
        <li><a href="logoff.php"><i class="material-icons left">exit_to_app</i>Sair</a></li>
      </ul>
    </div>
    </nav>
    </div>
</nav>
<form method="POST"action="trabalhe_bd.php">
 <div class="container center">
    <div class="box center">
      <div class="card center">
        <div class="card-content black-text">
          <span class="card-title "><h4>Trabalhe Conosco</h4></span>
          <div class="col col-center-3">
            <input name="nome_t" placeholder="Nome Completo" class="form-control validate" required />
        </div>
        <div class="col col-center-3">
            <input name="endereco" placeholder="Endereço" class="form-control validate" required />
        </div>
        <div class="col col-center-3">
            <input name="email" placeholder="E-mail" type = "email" class="form-control validate" required />
        </div>
        <div class="col col-center-3">
            <input name="fone" placeholder="Telefone" maxlength="11" class="form-control validate" required />
        </div>
        <div class="input-field col s12">
        <h5 class = "left">Cidade</h5>
          <select name="cidade" class="form-control center" required>
                                <option value="Recife">Recife</option>
                                <option value="Olinda">Olinda</option>
                                <option value="Paulista">Paulista</option>
                                <option value="Jaboatão">Jaboatão</option>
                            </select>
        </div>
        <div class="input-field col s12">
        <h5 class = "left">Área de interesse</h5>
          <select name="area" class="form-control center" required>
                                <option value="Administrativo">Administrativo</option>
                                <option value="Operacional">Operacional</option>
                                <option value="RH">RH</option>
                                <option value="Outros">Outros</option>
                            </select>
        </div>
        <button type="submit" class="btn btn-second btn-small green darken-3"  href="#">Enviar dados</button>

          


<body>
  
</html>