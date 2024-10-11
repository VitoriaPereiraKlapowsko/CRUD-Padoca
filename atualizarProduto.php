<?php
    require 'Banco.php';
    require 'Produto.php';

    $banco = new Banco();
    $conexao = $banco->getConexao();

    $produto = new Produto($conexao);

    $produto->setId($_POST['id']);
    $produto->setProduto(produto: $_POST['produto']);
    $produto->setTelefone($_POST['telefone']);
    $produto->setEmail($_POST['email']);
    $produto->setCPF($_POST['cpf']);

    if ($produto->update()) {
        $mensagem = "Produto atualizado com sucesso!";
    } else {
        $mensagem = "Erro ao atualizar o produto.";
    }
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirecionamento</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
</head>

<body style="height: 100%; display: flex; justify-content: center; align-items: center;">
    <div class="container" style="text-align: center; margin-top: 180px;">
        <img src="img/relogio.jpg" alt="Logo" style="max-width: 150px; height: auto; margin-bottom: 20px;">

        <h3><?php echo $mensagem; ?></h3>
        <h5>Você será direcionado para a lista de produtos em instantes...</h5>
    </div>

    <script>
        setTimeout(function () {
            window.location.href = "listarProduto.php";
        }, 5000); 
    </script>
</body>

</html>