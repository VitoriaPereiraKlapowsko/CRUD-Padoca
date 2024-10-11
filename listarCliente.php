<?php
    require 'Banco.php';
    require 'Cliente.php';

    $Banco = new Banco();
    $db = $Banco->getConexao();
    $cliente = new Cliente($db);
    $stmt = $cliente->read($db);
    $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pedidos</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
</head>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #651b32;">
    <img src="img/padoca.jpg" width="75" height="75" class="d-inline-block align-top" alt="">
    <a class="navbar-brand" href="#" style="color: white;">Lista de Pedidos</a>
</nav>

<body>
    <div class="container mt-5">
        <div class="row">
            <?php foreach ($clientes as $cliente) { ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Nome: <?php echo $cliente['nome']; ?></h5>
                            <p class="card-text">
                                <strong>Telefone:</strong> <?php echo $cliente['telefone']; ?><br>
                                <strong>Email:</strong> <?php echo $cliente['email']; ?><br>
                                <strong>CPF:</strong> <?php echo $cliente['cpf']; ?>
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="form_atualizaCliente.php?id=<?php echo $cliente['id']; ?>"
                                class="btn btn-primary">Editar</a>
                            <a href="deletaCliente.php?id=<?php echo $cliente['id']; ?>" class="btn btn-danger">Excluir</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <div class="text-center mt-4">
            <a href="form_cadastroCliente.php" class="btn btn-success">Cadastrar Novo Pedido</a>
        </div>
    </div>
</body>

</html>