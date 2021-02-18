<?php
#Este é o arquivo php de login.
session_start();

require("conexao.php");
$email = $_POST['email'];
$senha = $_POST['senha'];
#$query_ = "SELECT * FROM cadastro WHERE email_cadastro ='$email' AND senha_cadastro = '$senha'";
$query_ = "SELECT nome_cadastro  FROM cadastro WHERE email_cadastro ='$email' AND senha_cadastro = '$senha'";
$result = $conn->query($query_);


if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    //echo $row['email_cadastro'] . "|" . $row['senha_cadastro'] . "|";
    $_SESSION['authenticated'] = 'YES';
    $_SESSION['usuario_logado'] = $row['nome_cadastro'] ;
    header('Location:index.php');
  }
} else {
$_SESSION['authenticated'] = 'NO';
echo ("<script>
window.alert('Usuário ou senha incorretos!')
window.location.href='login.php?login=erro1';
</script>");

}


$conn->close();

?>