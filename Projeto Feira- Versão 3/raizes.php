<html>

<head>
  <meta charset="utf-8" />
  <title>Select Hortifruti</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href= "css/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="images/FavIcon/favicon.ico">
</head>

<body>
<nav>
    <div class="nav-wrapper green darken-3">
    <a id="logo-container" href="index.php" class="brand-logo"><img src="images/logo/logo.png" width="60" height="60" alt="" title="Feira Verde">Select Hortifruti</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="frutas.php">Frutas</a></li>
        <li><a href="verduras.php">Verduras/legumes</a></li>
        <li><a href="folhagens.php">Folhagens</a></li>
        <li><a href="#">Raízes/Tubérculos</a></li>
        <li><a href="login.php"><i class="material-icons left">account_circle</i>Entrar</a></li>
        <li><a href="carrinho.php"><i class="material-icons left">add_shopping_cart</i>Carrinho</a></li>
        <li><a href="#"><i class="material-icons left">exit_to_app</i>Sair</a></li>
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
          <td><img src="images/icons/raizes/batata_doce.jpg" width="49.84" height="49" alt=""></td>
          <td>Batata Doce</td>
          <td>Raízes/Tubérculos</td>
          <td>R$ 2.86/kg</td>
          <!--Irei adicionar posteriormente o : input type="number" entre os botões, tive alguns problemas no tamanho do input -->
          <td><a class="btn-floating btn-small waves-effect waves- green darken-3"><i class="material-icons">add</i></a>              <a class="btn-floating btn-small waves-effect waves- green darken-3"><i class="material-icons">remove</i></a></td>
        </tr>
        <tr>
          <td><img src="images/icons/raizes/inhame.png" width="49.84" height="49" alt=""></td>
          <td>Inhame</td>
          <td>Raízes/Tubérculos</td>
          <td>R$ 8.58/kg</td>
          <td><a class="btn-floating btn-small waves-effect waves- green darken-3"><i class="material-icons">add</i></a>              <a class="btn-floating btn-small waves-effect waves- green darken-3"><i class="material-icons">remove</i></a></td>
        </tr>
        <tr>
          <td><img src="images/icons/raizes/macaxeira.png" width="49.84" height="49" alt=""></td>
          <td>Macaxeira</td>
          <td>Raízes/Tubérculos</td>
          <td>R$ 2.48/kg</td>
          <td><a class="btn-floating btn-small waves-effect waves- green darken-3"><i class="material-icons">add</i></a>              <a class="btn-floating btn-small waves-effect waves- green darken-3"><i class="material-icons">remove</i></a></td>
        </tr>
        <tr>
          <td><img src="images/icons/raizes/beterraba.png" width="49.84" height="49" alt=""></td>
          <td>Beterraba</td>
          <td>Raízes/Tubérculos</td>
          <td>R$ 4.19/kg</td>
          <td><a class="btn-floating btn-small waves-effect waves- green darken-3"><i class="material-icons">add</i></a>              <a class="btn-floating btn-small waves-effect waves- green darken-3"><i class="material-icons">remove</i></a></td>
        </tr>
        <tr>
          <td><img src="images/icons/raizes/cenoura.png" width="49.84" height="49" alt=""></td>
          <td>Cenoura</td>
          <td>Raízes/Tubérculos</td>
          <td>R$ 3.78/kg</td>
          <td><a class="btn-floating btn-small waves-effect waves- green darken-3"><i class="material-icons">add</i></a>              <a class="btn-floating btn-small waves-effect waves- green darken-3"><i class="material-icons">remove</i></a></td>
        </tr>
      </tbody>
    </table>
</body>

</html>