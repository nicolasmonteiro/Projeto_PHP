<?php
session_start();
include_once("conexao.php");

#addslashes: para prevenir ataques hackers e SQL injections.
$nome_p = addslashes( $_POST ['nome_pd']);
$endereco = addslashes( $_POST ['endereco']) ;
$pagamento = addslashes( $_POST ['pagamento']) ;

#$query_ = "SELECT * FROM cadastro WHERE email_cadastro ='$email' AND senha_cadastro = '$senha'";
foreach($_SESSION['carrinho'] as $produto){
    $total = 0;
    $quantidade = $produto['quantidade'] ;
    $preco = $produto['preco'] ;
    $nome = $produto['nome'] ; 
    $subtotal = $quantidade * $preco;
    $total += $subtotal;
    $query_ = "INSERT INTO finalizando(produto_pedidos, preco_pedidos, quantidade_pedidos,subtotal_pedidos,total_pedidos) VALUES ('$nome','$preco ','$quantidade','$subtotal','$total')";
    $result = $conn->query($query_);
}
  
if (empty($nome_p) || empty($endereco) || empty($pagamento)) {
    echo ("<script>
    window.alert('Pelo menos um dos campos ainda está vazio!')
    window.location.href='pedidos.php';
</script>");


} else {
 $result_pedido = "INSERT INTO pedidos(nome_pedido, endereco_pedido, pagamento_pedido) VALUES ('$nome_p','$endereco','$pagamento')";
 $resultado_pedido = mysqli_query($conn, $result_pedido);
 echo ("<script>
        window.alert('Pedido realizado com Sucesso!')
        window.location.href='index.php';
    </script>");

    }