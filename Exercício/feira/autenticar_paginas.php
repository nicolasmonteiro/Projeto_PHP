<?php
#Este arquivo é responsável para validar as seções que só podem ser vistas após efetuar o login.
session_start();
#echo $_SESSION ['usuario_logado'];
if (!isset($_SESSION ['authenticated'] ) && !isset($_SESSION ['usuario_logado']))  {
  echo ("<script>
  window.alert('Para acessar esta página é necessário efetuar login!')
  window.location.href='login.php?login=erro2';
</script>");
  //header('Location:login.php?login=erro2');

}

?>