<?php
require "conexao.php";

$query_ = "SELECT * FROM produtos WHERE setor_produto ='folhagens' ORDER BY nome_produto ";
$result = $conn->query($query_);

