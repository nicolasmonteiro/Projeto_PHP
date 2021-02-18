<?php
require("conexao.php");
session_start();

if(!empty($_POST['quantidade'])){
$id = $_POST['produto'];
$nome = $_POST['nome'];

$_SESSION['carrinho'][$nome] = [
    'nome' => $nome,
    'id' => $id,
    'quantidade' => $_POST['quantidade'] ,
    'preco' => $_POST['preco']
    
]; 


echo true;
}