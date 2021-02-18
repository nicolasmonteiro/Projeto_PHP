function addCarrinho(produto) {
    let id= produto.id
    let quantidade= document.getElementById("produto_"+id).value 
    let nome= document.getElementById("nome_"+id).value
    let preco= document.getElementById("preco_"+id).value

    $.ajax({
		url: "verificar_carrinho.php",
		type: "POST",
		data: { produto: id, quantidade: quantidade, nome: nome, preco : preco },
		dataType: 'json',
		cache: false,
		success: function (response) {
		alert('Carrinho atualizado com sucesso!')
        
		}
	});

}