<html>

<head>
  <meta charset="utf-8" />
  <title>Select Hortifruti</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href= "css/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <?php require('inserir_favicon.php')?>
</head>

<body>
<?php
require_once ('autenticar_paginas.php')
?>
<nav>
    <div class="nav-wrapper green darken-3">
    <a id="logo-container" href="index.php" class="brand-logo"><img src="images/logo/logo.png" width="60" height="60" alt="" title="Feira Verde">Select Hortifruti</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href=#>Frutas</a></li>
        <li><a href="verduras.php">Verduras/legumes</a></li>
        <li><a href="folhagens.php">Folhagens</a></li>
        <li><a href="raizes.php">Raízes/Tubérculos</a></li>
        <li><a href="carrinho.php"><i class="material-icons left">add_shopping_cart</i>Carrinho</a></li>
        <?php require_once ('val_entrada_saida.php')?>
      </ul>
    </div>
  </nav>
<table class = "centered">
      <thead >
        <tr>
            <th>Visual</th>
            <th>Produto</th>
            <th>Setor</th>
            <th>Preço</th>
            <th>  </th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td><img src="images/icons/frutas/abacaxi.png" width="49.84" height="49" alt=""></td>
          <td>Abacaxi</td>
          <td>Frutas</td>
          <td>R$ 3.98 Un.</td>
          <td><a class="btn-floating btn-small waves-effect waves- green darken-3"><i class="material-icons">add</i></a>              <a class="btn-floating btn-small waves-effect waves- green darken-3"><i class="material-icons">remove</i></a></td>
        </tr>
        <tr>
          <td><img src="images/icons/frutas/banana.png" width="49.84" height="49" alt=""></td>
          <td>Banana Pacovan</td>
          <td>Frutas</td>
          <td>R$ 3.49/kg</td>
          <td><a class="btn-floating btn-small waves-effect waves- green darken-3"><i class="material-icons">add</i></a>              <a class="btn-floating btn-small waves-effect waves- green darken-3"><i class="material-icons">remove</i></a></td>
        </tr>
        <tr>
          <td><img src="images/icons/frutas/limão.png" width="49.84" height="49" alt=""></td>
          <td>Limão Tahiti</td>
          <td>Frutas</td>
          <td>R$ 4.98/kg</td>
          <td><a class="btn-floating btn-small waves-effect waves- green darken-3"><i class="material-icons">add</i></a>              <a class="btn-floating btn-small waves-effect waves- green darken-3"><i class="material-icons">remove</i></a></td>
        </tr>
        <tr>
          <td><img src="images/icons/frutas/maça.png" width="49.84" height="49" alt=""></td>
          <td>Maça Nacional</td>
          <td>Frutas</td>
          <td>R$ 2.99/kg</td>
          <td><a class="btn-floating btn-small waves-effect waves- green darken-3"><i class="material-icons">add</i></a>              <a class="btn-floating btn-small waves-effect waves- green darken-3"><i class="material-icons">remove</i></a></td>
        </tr>
        <tr>
          <td><img src="images/icons/frutas/uva.png" width="49.84" height="49" alt=""></td>
          <td>Uva Verde</td>
          <td>Frutas</td>
          <td>R$ 12.50/kg</td>
          <td><a class="btn-floating btn-small waves-effect waves- green darken-3"><i class="material-icons">add</i></a>              <a class="btn-floating btn-small waves-effect waves- green darken-3"><i class="material-icons">remove</i></a></td>
        </tr>
      </tbody>
    </table>
</body>

</html>