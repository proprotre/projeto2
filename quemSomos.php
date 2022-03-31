<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/favicon.ico">
    <title>Badaro Informatica</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>
<body>
    <header>
        <nav class="navbar navbar-dark bg-primary container-fluid">
            <a class="navbar-brand" href="index.php"><img src="img/badaro.png" width="30" height="30" class="d-inline-block align-top" alt="logo"> BadaTech</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="text-white" href="index.php">Pagina Inicial</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-white" href="valores.php">Valores</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-white" href="contato.php">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-white" href="quemSomos.php">Quem somos</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/slide3.png" alt="Primeiro Slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/slide2.png" alt="Segundo Slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/slide1.png" alt="Terceiro Slide">
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
        <br>
        <div class="card text-white bg-primary container mb-3" style="max-width: 18rem;">
            <div class="card-header">Quem somos?</div>
            <div class="card-body">
                <h5 class="card-title">A nossa empresa é líder em suporte em informática!</h5>
                <p class="card-text">Fundada no ano de 2022, nascemos da necessidade de suprir a demanda local por suporte em informática. Conseguimos se estabelecer como referência em suporte técnico, trazendo muito mais profissionalismo e qualidade no atendimento ao cliente.</p>
            </div>
        </div>
    </main>
    <footer>
        <br>
        <div class="row container-fluid">
            <div class="col-12 col-md-6">
                <p>Todos os direitos reservados - Gabriel Badaró ©</p>
            </div>
            <div class="col-12 col-md-6">
                <a href="#"><img src="img/facebook.png" alt="Rede sociais" height="21" width="21"></a>
                <a href="#"><img src="img/instagram.png" alt="Rede sociais" height="21" width="21"></a>
                <a href="#"><img src="img/twitter.png" alt="Rede sociais" height="21" width="21"></a>
                <a href="#"><img src="img/whatsapp.png" alt="Rede sociais" height="21" width="21"></a>
                <a href="#"><img src="img/youtube.png" alt="Rede sociais" height="21" width="21"></a>
            </div>
        </div>
    </footer>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>