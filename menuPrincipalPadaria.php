<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Padoca</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">

    <style>
        .carousel-item img {
            width: 100%;
            height: 550px;
            object-fit: cover;
        }

        .card {
            margin: 15px 0;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #651b32;">
        <img src="img/padoca.jpg" width="75" height="75" class="d-inline-block align-top" alt="">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado"
            aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="menuPrincipalPadaria.php" style="color: white;">Home<span
                            class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#" style="color: white;">Cardápio<span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#" style="color: white;">A Padaria<span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#" style="color: white;">Fale Conosco<span class="sr-only"></span></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a href="form_cadastroCliente.php" class="btn btn-success my-2 my-sm-0">Faça seu pedido</a>
            </form>
        </div>
    </nav>

    <div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/1.jpg" alt="Primeira Foto">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Variedade de Produtos</h2>
                        <h4>Mais de 70 opções entre doces e salgados</h4>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/2.jpg" alt="Segunda Foto">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Atendimento Especializado</h2>
                        <h4>Contamos com atendentes com a formação específica para o melhor atendimento</>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/3.jpg" alt="Terceira Foto">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Faça sua encomenda!</h2>
                        <h4>Nossa equipe está à disposição para tornar seu sonho realidade</h4>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>
    </div>

    <div class="container my-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="img/club.jpg" alt="Padoca Club" class="img-fluid" style="border-radius: 10px;">
            </div>
            <div class="col-md-6">
                <div class="p-4" style="background-color: #651b32; color: white; border-radius: 10px;">
                    <h2>Assine o Padoca Club!</h2>
                    <p>Seja parte do clube exclusivo da nossa padaria e aproveite vantagens incríveis!</p>
                    <ul class="list-unstyled">
                        <li><strong>Descontos exclusivos</strong> em produtos selecionados toda semana.</li>
                        <li><strong>Ofertas especiais</strong> no mês de aniversário.</li>
                        <li><strong>Brindes</strong> nas compras acima de R$100.</li>
                        <li><strong>Acesso antecipado</strong> a novidades e lançamentos.</li>
                    </ul>
                    <a href="#" class="btn btn-light mt-3" style="color: #651b32;">Assine agora!</a>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-5">
        <h1 style="font-family: 'Roboto', sans-serif; font-weight: bold; font-size: 2.5rem; color: #651b32;">
            Produtos Mais Pedidos
        </h1>
    </div>

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card mb-3 shadow-sm" style="border-radius: 15px;">
                    <img class="card-img-top" src="img/bolo.jpg" alt="Imagem de capa do card 1"
                        style="border-radius: 15px 15px 0 0;">
                    <div class="card-body">
                        <h5 class="card-title" style="font-family: 'Poppins', sans-serif; font-weight: bold;">Bolo de
                            Pistache</h5>
                        <p class="card-text" style="font-family: 'Poppins', sans-serif;">Uma deliciosa massa molhadinha
                            com um super recheio.</p>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="btn btn-info" style="background-color: #651b32; border: none;">Peça já o
                                seu!</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-3 shadow-sm" style="border-radius: 15px;">
                    <img class="card-img-top" src="img/baguete.jpg" alt="Imagem de capa do card 2"
                        style="border-radius: 15px 15px 0 0;">
                    <div class="card-body">
                        <h5 class="card-title" style="font-family: 'Poppins', sans-serif; font-weight: bold;">Baguete
                            Rústica</h5>
                        <p class="card-text" style="font-family: 'Poppins', sans-serif;">Crocante por fora, macia por
                            dentro, feita com ingredientes selecionados.</p>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="btn btn-info" style="background-color: #651b32; border: none;">Peça já o
                                seu!</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-3 shadow-sm" style="border-radius: 15px;">
                    <img class="card-img-top" src="img/amora.jpg" alt="Imagem de capa do card 3"
                        style="border-radius: 15px 15px 0 0;">
                    <div class="card-body">
                        <h5 class="card-title" style="font-family: 'Poppins', sans-serif; font-weight: bold;">Cheesecake
                            de Amora</h5>
                        <p class="card-text" style="font-family: 'Poppins', sans-serif;">Feito com uma base crocante de
                            biscoito e uma camada generosa de creme suave.</p>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="btn btn-info" style="background-color: #651b32; border: none;">Peça já o
                                seu!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <footer class="py-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item">
                    <a href="https://www.facebook.com/?locale=pt_BR" class="nav-link px-2" style="color: black;">
                        <i class="fab fa-facebook-f"></i> Facebook
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://www.instagram.com/" class="nav-link px-2" style="color: black;">
                        <i class="fab fa-instagram"></i> Instagram
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://twitter.com/?lang=pt-br" class="nav-link px-2" style="color: black;">
                        <i class="fab fa-twitter"></i> X
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://www.whatsapp.com/?lang=pt_BR" class="nav-link px-2" style="color: black;">
                        <i class="fab fa-whatsapp"></i> Whatsapp
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://web.telegram.org/" class="nav-link px-2" style="color: black;">
                        <i class="fab fa-telegram-plane"></i> Telegram
                    </a>
                </li>
            </ul>
            <p class="text-center" style="color: black;">© 2024 Padoca, A</p>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>