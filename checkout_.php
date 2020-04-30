<?php 
    $dados = mysqli_query($conexao, "SELECT * FROM produtos WHERE id = $_POST[id]");
    $produto = mysqli_fetch_array($dados);
?>

<!doctype html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Checkout Mirror Fashion</title>
        <meta name="viewport" content="width=device-width">
    </head>
    <body>

    <h1>Ótima escolha!</h1>
    
    <p>Obrigado	por	comprar	na	Mirror	Fashion! Preencha seus dados para efetivar a compra.</p>
    
    <dt>Cor</dt>
    <dd><?= $_POST['cor']; ?></dd>
    <dt>Tamanho</dt>
    <dd><?= $_POST['tamanho']; ?></dd>

    <dt>Produto</dt>
    <dd><?= $produto['nome']; ?></dd>
    <dt>Preço</dt>
    <dd><?= $produto['preco']?></dd>
</body>
</html>