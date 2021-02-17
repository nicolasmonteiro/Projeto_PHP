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
<form method="POST"action="bd_pedidos.php">
 <div class="container center">
    <div class="box center">
      <div class="card center">
        <div class="card-content black-text">
          <span class="card-title "><h4>Finalizando pedido</h4></span>
          <!-- <label class="label-input" for="">
              <i class="far fa-envelope icon-modify"></i>
              <input  class = 'validate' required = ""type="text" name = "nome_completo" placeholder="Nome completo">
          </label>
          <br><br>
          <label class="label-input" for="">
              <i class="far fa-envelope icon-modify"></i>
              <input  required = "" type="text" name = "endereco" placeholder="Endereço">
          </label>
          <br><br> -->
          <div class="col col-center-3">
                            <input name="nome_pd" placeholder="Nome Completo" class="form-control validate" required />
                        </div>
          <div class="col col-center-3">
                            <input name="endereco" placeholder="Endereço" class="form-control validate" required />
                        </div>
          <!-- <div class="col col-center-3 "> -->
          <div class="input-field col s12">
          <select name="pagamento" class="form-control center" required>
                                <option value="Dinheiro">Dinheiro</option>
                                <option value="Débito">Débito</option>
                                <option value="Crédito">Crédito</option>
                            </select>
        </div>
          <!-- <form action="#">
          <h5>Forma de Pagamento</h5>
    <p>
      <label>
        <input name="group1" type="radio" checked />
        <span>Dinheiro</span>
      </label>
    </p>
    <p>
      <label>
        <input name="group1" type="radio" />
        <span>Crédito</span>
      </label>
    </p>
    <p>
      <label>
        <input class="with-gap" name="group1" type="radio"  />
        <span>Débito</span>
      </label>
    </p> -->
          <br>
          <div class="card black-text">
          <h5 class="card-header">Pedidos</h5>
        </div>
        <table class = "centered">
      <thead >
        <tr>
            <th>Produto</th>
            <th>Preço(un/kg)</th>
            <th>Quantidade</th>
            <th>Subtotal</th>
        </tr>
      </thead>
            <tbody>
            <?php
            if(isset($_GET['delete'])){
            unset($_SESSION['carrinho'][$_GET['delete']]);
            } 
             if(isset($_SESSION['carrinho'])) 
             {
               $total = 0; 
              foreach($_SESSION['carrinho'] as $produto){
              $quantidade = $produto['quantidade'] ;
              $preco = $produto['preco'] ;
              $nome = $produto['nome'] ; 
              $subtotal = $quantidade * $preco;
              
              $linha = "<tr><td>$nome</td>";
              $linha .= "<td>R$ $preco</td>";
              $linha .= "<td>$quantidade</td>";
              $linha .= "<td>R$ $subtotal</td>";
              

              $total += $subtotal;
            
              echo $linha;
              } 

             }
             ?>
            </tbody> 
    </table>
    <div class="card black-text">
          <h5 class="card-header">Total : R$ <?php echo $total ?></h5>
        </div> 
          <button type="submit" class="btn btn-second btn-small green darken-3"  href="#">Finalizar pedido</button>
          <br>
          <br>
          <a button class="btn btn-second btn-small green darken-3" href="index.php">Continuar comprando</a> 
</form>


<body>
  
</html>