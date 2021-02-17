<html>

<head>
  <meta charset="utf-8" />
  <title>Select Hortifruti</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href= "css/style.css">
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/app.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <?php require 'inserir_favicon.php';?>
  <?php require "produtos_frutas.php";?>
</head>

<body>
<?php
require ('autenticar_paginas.php');
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
        <?php require ('val_entrada_saida.php');?>
      </ul>
    </div>
  </nav> 
<table class = "centered">
      <thead >
        <tr>
            <th> </th>
            <th>Produto</th>
            <th>Preço</th>
            <th>Quantidade</th>
        </tr>
      </thead>

      <tbody>
      <?php include('produtos_frutas.php'); 
      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            $imagem = "images/icons/frutas/".$row['image_produto'];
            $idProduto ="produto_". $row['id_produto'];
            $btnProduto = $row['id_produto'];
            $nome = $row['nome_produto'];
            $idNome = "nome_". $row['id_produto'];
            $preco = $row['preco_produto'];
            $idPreco = "preco_". $row['id_produto'];
            $tipo = $row['tipo_produto'];
            $idTipo = "tipo_produto_". $row['id_produto'];

            $produto = "<tr> <td><img src=$imagem  width='49.84' height='49' alt=''></td> ";
            $produto .= "<input type='hidden' id=$idNome value=$nome > ";
            $produto .= "<input type='hidden' id=$idPreco value=$preco > ";
            $produto .= " <td> ".$row['nome_produto']." </td> <td>R$ ".$row['preco_produto']." $tipo</td> "; 
            $produto .= "<td><a class='btn btn-outline-primary btn-sm spinnerbutton spinnerMinus spinner-roundbutton  green darken-3' >";
            $produto .= "<input id=$idProduto  class = 'validate' type='number' value='0' min='0' max='100' required type='number'/></a><p>"; 
            $produto .= "</p><button id = $btnProduto onClick = addCarrinho(this)><i class='material-icons center' >add_shopping_cart</i></button></td> </tr>";
            echo $produto;
          }
            }
      ?>
      </tbody>
    </table>
</body>

</html>