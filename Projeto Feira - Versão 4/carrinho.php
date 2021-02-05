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
  <?php require('inserir_favicon.php')?>

  
</head>

<body>
<nav>
    <div class="nav-wrapper green darken-3">
    <a id="logo-container" href="index.php" class="brand-logo"><img src="images/logo/logo.png" width="60" height="60" alt="" title="Feira Verde">Select Hortifruti</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="frutas.php">Frutas</a></li>
        <li><a href="verduras.php">Verduras/legumes</a></li>
        <li><a href="folhagens.php">Folhagens</a></li>
        <li><a href="raizes.php">Raízes/Tubérculos</a></li>
        <li><a href="carrinho.php"><i class="material-icons left">add_shopping_cart</i>Carrinho</a></li>
        <li><a href="logoff.php"><i class="material-icons left">exit_to_app</i>Sair</a></li>
      </ul>
    </div>
</nav>
 <div class="container center">
    <div class="box center">
      <div class="card center">
        <div class="card-content black-text">
          <span class="card-title ">Carrinho</span>
          <label class="label-input" for="">
              <i class="far fa-envelope icon-modify"></i>
              <input type="text" placeholder="Nome">
          </label>
          <br><br>
          <label class="label-input" for="">
              <i class="far fa-envelope icon-modify"></i>
              <input type="text" placeholder="Endereço">
          </label>
          <br><br>
          <label class="label-input" for="">
              <i class="far fa-envelope icon-modify"></i>
              <input type="text" placeholder="Data">
          </label>
          <br><br>
           <label class="label-input" for="">
              <i class="far fa-envelope icon-modify"></i>
              <input type="tel" placeholder="Forma de pagamento">
          </label>
          <br><br> 

          <a button class="btn btn-second btn-small green darken-3" href="#">Finalizar pedido</a> 
  <body>
</html>