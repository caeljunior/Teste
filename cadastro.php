<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="shortcut icon" href="imagens/controle.png" type="image/x-icon">
    <title>AlugaGames</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">
            <img src="imagens/controle.png" width="60px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(Página atual)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contatos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cadastro.php">Cadastro</a>
                </li>
            </ul>
        </div>
    </nav>

    <center>
        <form class="form-group p-3" style="background-color: rgba(0, 0, 0, 0.05);">
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="inputLogin">Login</label>
                    <input type="text" class="form-control" id="inputLogin" placeholder="Login">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputPassword4">Senha</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Senha">
                </div>
            </div>
            <div class="form-group col-md-3"" >
            <label for=" inputAddress">Nome</label>
                <input type="text" class="form-control" id="inputName">
            </div>
            <div class="form-group col-md-3"" >
            <label for=" inputCPF">CPF</label>
                <input type="text" class="form-control" id="inputCPF">
            </div>
            <div class="form-group col-md-3"" >
            <label for=" inputTelefone">Telefone</label>
                <input type="text" class="form-control" id="inputTelefone">
            </div>
            <div class="form-group col-md-3"">
            <label for=" inputAddress">Endereço</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Rua...">
            </div>
            <div class="form-group">
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
    </center>

    <div id="carouselExampleIndicators" class="carousel slide h-75" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="imagens/imagem1 (1).jpg" alt="Primeiro Slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Aqui você encontra diversão o tempo todo.</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="imagens/imagem2 (1).jpg" alt="Segundo Slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Aqui você encontra diversão o tempo todo.</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="imagens/imagem3 (1).jpg" alt="Terceiro Slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Aqui você encontra diversão o tempo todo.</h3>
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




    <!-- Footer -->
    <footer>
        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="index.php">AlugaGames.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>