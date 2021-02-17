<?php
#Este é o arquivo php de cadastro.
session_start();
include_once("conexao.php");

#addslashes: para prevenir ataques hackers e SQL injections.
$nome = addslashes( $_POST ['nome']);
$email = addslashes( $_POST ['email']) ;
$senha = addslashes( $_POST ['senha']) ;
  
if (empty($nome) || empty($email) || empty($senha)) {
    echo ("<script>
    window.alert('Pelo menos um dos campos ainda está vazio!')
    window.location.href='login.php';
</script>");


} else {
 $result_usuario = "INSERT INTO cadastro(nome_cadastro, email_cadastro, senha_cadastro) VALUES ('$nome','$email' ,'$senha')";
 $resultado_usuario = mysqli_query($conn, $result_usuario);
 echo ("<script>
        window.alert('Cadastro realizado com Sucesso!')
        window.location.href='login.php';
    </script>");

}



/*
Tinha tentado mandar um alert, mas não consegui e mudei a abordagem.
if(mysqli_insert_id($conn)){
    $_SESSION ['msg'] = "<p> style= 'color:green' = Cliente cadastrado com sucesso</p>";
     header("Location: login.php");
 }else{
    $_SESSION ['msg'] = "<p> style= 'color:red' = Cliente não foi cadastrado com sucesso</p>";
     header("Location: login.php"); 
     }
     */
 
 ?>