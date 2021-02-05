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
        <li><a href="frutas.php">Frutas</a></li>
        <li><a href="#">Verduras/legumes</a></li>
        <li><a href="folhagens.php">Folhagens</a></li>
        <li><a href="raizes.php">Raízes/Tubérculos</a></li>
        <li><a href="carrinho.php"><i class="material-icons left">add_shopping_cart</i>Carrinho</a></li>
        <?php require_once ('val_entrada_saida.php')?>
        
      </ul>
    </div>
  </nav>
<table class = "centered">
      <thead>
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
          <td><img src="images/icons/verduras/tomate.png" width="49.84" height="49" alt=""></td>
          <td>Tomate</td>
          <td>Verduras/legumes</td>
          <td>R$ 5.65/kg</td>
          <!--Irei adicionar posteriormente o : input type="number" entre os botões, tive alguns problemas no tamanho do input -->
          <td><a class="btn-floating btn-small waves-effect waves- green darken-3"><i class="material-icons">add</i></a>              <a class="btn-floating btn-small waves-effect waves- green darken-3"><i class="material-icons">remove</i></a></td>
        </tr>
        <tr>
          <td><img src="images/icons/verduras/cebola.png" width="49.84" height="49" alt=""></td>
          <td>Cebola Branca</td>
          <td>Verduras/legumes</td>
          <td>R$ 6.99/kg</td>
          <td><a class="btn-floating btn-small waves-effect waves- green darken-3"><i class="material-icons">add</i></a>              <a class="btn-floating btn-small waves-effect waves- green darken-3"><i class="material-icons">remove</i></a></td>
        </tr>
        <tr>
          <td><img src="images/icons/verduras/jerimum.png" width="49.84" height="49" alt=""></td>
          <td>Jerimum Leite</td>
          <td>Verduras/legumes</td>
          <td>R$ 2.88/kg</td>
          <td><a class="btn-floating btn-small waves-effect waves- green darken-3"><i class="material-icons">add</i></a>              <a class="btn-floating btn-small waves-effect waves- green darken-3"><i class="material-icons">remove</i></a></td>
        </tr>
        <tr>
          <td><img src="images/icons/verduras/pimentao.png" width="49.84" height="49" alt=""></td>
          <td>Pimentão Verde</td>
          <td>Verduras/legumes</td>
          <td>R$ 5.59/kg</td>
          <td><a class="btn-floating btn-small waves-effect waves- green darken-3"><i class="material-icons">add</i></a>              <a class="btn-floating btn-small waves-effect waves- green darken-3"><i class="material-icons">remove</i></a></td>
        </tr>
        <tr>
          <td><img src="images/icons/verduras/batata.png" width="49.84" height="49" alt=""></td>
          <td>Batata Inglesa</td>
          <td>Verduras/legumes</td>
          <td>R$ 4.69/kg</td>
          <td><a class="btn-floating btn-small waves-effect waves- green darken-3"><i class="material-icons">add</i></a>              <a class="btn-floating btn-small waves-effect waves- green darken-3"><i class="material-icons">remove</i></a></td>
        </tr>
      </tbody>
    </table>
</body>

</html>