<?php
session_start();
include_once("conexao.php");

#addslashes: para prevenir ataques hackers e SQL injections.
$nome = addslashes( $_POST ['nome_t']);
$endereco = addslashes( $_POST ['endereco']) ;
$email = addslashes( $_POST ['email']);
$fone = addslashes( $_POST ['fone']);
$cidade = addslashes( $_POST ['cidade']);
$area = addslashes( $_POST ['area']);


#$query_ = "SELECT * FROM cadastro WHERE email_cadastro ='$email' AND senha_cadastro = '$senha'";
 $result_dados = "INSERT INTO trabalhe_conosco(nome_tc,endereco_tc,email_tc,fone_tc,cidade_tc,area_tc) VALUES ('$nome','$endereco','$email','$fone','$cidade','$area')";
 $resultado_dados = mysqli_query($conn, $result_dados);
 echo ("<script>
        window.alert('Dados enviados com sucesso, boa sorte!')
        window.location.href='index.php';
    </script>");
