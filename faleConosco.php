<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fale Conosco</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #651b32;">
    <img src="img/padoca.jpg" width="75" height="75" class="d-inline-block align-top" alt="">
    <a class="navbar-brand" href="#" style="color: white;">Contato</a>
</nav>

<body>
    <section class="container my-5">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="mb-4">Entre em Contato Conosco</h2>
                <form>
                    <div class="form-group">
                        <label for="name">Seu Nome</label>
                        <input type="text" class="form-control" id="name" placeholder="Insira seu nome" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Seu E-mail</label>
                        <input type="email" class="form-control" id="email" placeholder="Insira seu e-mail" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Assunto</label>
                        <input type="text" class="form-control" id="subject" placeholder="Motivo do contato" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Sua Mensagem</label>
                        <textarea class="form-control" id="message" rows="4" placeholder="Escreva sua mensagem"
                            required></textarea>
                    </div>
                    <button type="submit" class="btn btn-dark btn-block">Enviar Mensagem</button>
                </form>
            </div>

            <div class="col-lg-6">
                <h2 class="mb-4">Visite-nos</h2>
                <p>Estamos localizados no centro da cidade, Nos visite ou entre em contato pelo formulário.</p>
                <p><strong>Email:</strong> contato@apadoca.com.br</p>
                <p><strong>Telefone:</strong> 3458-9090</p>
                <p><strong>Endereço:</strong> Rua: É uma Rua, 123, Bairrinho - SP</p>

                <div class="map-responsive">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.2189154826636!2d-46.77963672456257!3d-23.621183684652577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ceff35267a1235%3A0x564532dcac9b2c9b!2sR.%20Paschoal%20Ant%C3%B4nio%20Politano%2C%20507%20-%20Parque%20Pinheiros%2C%20Tabo%C3%A3o%20da%20Serra%20-%20SP%2C%2006766-120!5e0!3m2!1spt-BR!2sbr!4v1697052761238!5m2!1spt-BR!2sbr"
                        width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>