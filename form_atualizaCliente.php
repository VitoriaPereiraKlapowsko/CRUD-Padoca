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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Atualizar Cliente</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado"
            aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <form method="POST" action="atualizaCliente.php">
        <div class="form-row">
            <div class="col">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" id="nome"
                    value="<?php echo $clienteSelecionado['nome']; ?>">
            </div>
            <div class="col">
                <label for="telefone">Telefone:</label>
                <input type="text" class="form-control" name="telefone" id="telefone"
                    value="<?php echo $clienteSelecionado['telefone']; ?>">
            </div>
            <div class="col">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" id="email"
                    value="<?php echo $clienteSelecionado['email']; ?>">
            </div>
            <div class="col">
                <label for="cpf">CPF:</label>
                <input type="text" class="form-control" name="cpf" id="cpf"
                    value="<?php echo $clienteSelecionado['cpf']; ?>">
            </div>
        </div>

        <input type="hidden" name="id" value="<?php echo $clienteSelecionado['id']; ?>">
        <br>
        <input type="submit" class="btn btn-primary" value="Atualizar">
    </form>