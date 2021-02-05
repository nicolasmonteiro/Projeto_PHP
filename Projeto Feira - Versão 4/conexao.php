<?php
$servidor = '127.0.0.1';
$usuario = 'root';
$senha = '';
$dbname = 'bd_feira';




$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);


if ($conn->connect_error) {
  die("Erro Conexão: " . $conn->connect_error);
}
?>

