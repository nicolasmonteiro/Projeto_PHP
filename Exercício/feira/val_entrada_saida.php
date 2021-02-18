<?php
        #Este arquivo faz as validações para os botões de entrar,cadastro e sair aparecerem no momento adequado.
        if (!isset($_SESSION ['authenticated'] ) && !isset($_SESSION ['usuario_logado'])){ ?>
        <li><a href="login.php"><i class="material-icons left">account_circle</i>Entrar</a></li>
        <li><a href="cadastro.php"><i class="material-icons left">account_circle</i>Cadastro</a></li>
        <?php } ?> 
        <?php if (isset($_SESSION ['authenticated'] ) && isset($_SESSION ['usuario_logado'])){ ?>
        <li><a href="logoff.php"><i class="material-icons left">exit_to_app</i>Sair</a></li>
        <?php } ?>