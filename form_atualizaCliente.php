<?php
require 'Banco.php';
require 'Cliente.php';

$banco = new Banco();
$conexao = $banco->getConexao();
$cliente = new Cliente($conexao);

$cliente->setId($_GET['id']);
$stmt = $cliente->consultar();
$clienteSelecionado = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<form method="POST" action="atualizarCliente.php">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #651b32;">
        <img src="img/padoca.jpg" width="75" height="75" class="d-inline-block align-top" alt="">
        <a class="navbar-brand" href="#" style="color: white;">Lista de Pedidos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado"
            aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <img src="img/atualizar.jpg" alt="Imagem Atualizar Pedido" class="img-fluid rounded">
            </div>

            <div class="col-md-6 bg-light p-4 rounded shadow">
                <form method="POST" action="atualizarCliente.php">
                    <input type="hidden" name="id" value="<?php echo $clienteSelecionado['id']; ?>">
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="nome">Nome:</label>
                            <input type="text" class="form-control" name="nome" id="nome"
                                value="<?php echo $clienteSelecionado['nome']; ?>" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="telefone">Telefone:</label>
                            <input type="text" class="form-control" name="telefone" id="telefone"
                                value="<?php echo $clienteSelecionado['telefone']; ?>" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="email" id="email"
                                value="<?php echo $clienteSelecionado['email']; ?>" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="cpf">CPF:</label>
                            <input type="text" class="form-control" name="cpf" id="cpf"
                                value="<?php echo $clienteSelecionado['cpf']; ?>" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Atualizar</button>
                </form>
            </div>
        </div>
    </div>