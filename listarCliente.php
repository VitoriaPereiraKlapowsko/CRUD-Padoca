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
    <title>Lista de Clientes</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<nav style="background-color: #e3f2fd;" class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Lista de Clientes</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado"
        aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav>

<body>
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Email</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $cliente) { ?>
                    <tr>
                        <td><?php echo $cliente['id']; ?></td>
                        <td><?php echo $cliente['nome']; ?></td>
                        <td><?php echo $cliente['telefone']; ?></td>
                        <td><?php echo $cliente['email']; ?></td>
                        <td><?php echo $cliente['cpf']; ?></td>
                        <td>
                            <a class="btn btn-primary"
                                href="form_atualizaCliente.php?id=<?php echo $cliente['id']; ?>">Editar</a>
                            <a class="btn btn-danger" href="deletaCliente.php?id=<?php echo $cliente['id']; ?>">Excluir</a>
                        </td>
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>
        <div class="text-center mt-4">
            <a href="form_cadastroCliente.php" class="btn btn-success">Cadastrar Novo Cliente</a>
        </div>
    </div>
</body>

</html>