<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Cadastro de Cliente</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado"
        aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav>


<body>
    <div class="container mt-5">
        <form method="POST" action="cadastroCliente.php">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" placeholder="Digite seu nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" class="form-control" placeholder="Digite seu telefone" name="telefone" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" placeholder="Digite seu email" name="email" required>
            </div>
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" class="form-control" placeholder="Digite seu CPF" name="cpf" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Cadastrar</button>
            </div>
        </form>
    </div>
</body>

</html>