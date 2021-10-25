<?php
    include "../controle/ver_login.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="shortcut icon" href="../imagens/controle.png" type="image/x-icon">
    <title>AlugaGames</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">
            <img src="../imagens/controle.png" width="60px">
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
                    <a class="nav-link" href="cadastro.php">Cadastro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sair.php">Sair</a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide h-75" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="../imagens/imagem1 (1).jpg" alt="Primeiro Slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Aqui você encontra diversão o tempo todo.</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../imagens/imagem2 (1).jpg" alt="Segundo Slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Aqui você encontra diversão o tempo todo.</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../imagens/imagem3 (1).jpg" alt="Terceiro Slide">
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


    <div class="row p-5 text-center" style="background-color: rgba(0, 0, 0, 0.05);">
        <div class="col-lg-3">
            <img class="rounded-circle" src="../imagens/nintendoswitch.png" alt="Generic placeholder image" width="140"
                height="140">
            <h2>Nintendo Switch</h2>
            <p>O Switch se trata de um console híbrido semelhante a um tablet, o qual pode ser acoplado a um dock e,
                assim, ser transformado em um console de mesa. O console também conta com dois controles sem fio
                acopláveis de cada lado, chamados pela Nintendo de Joy-Con, que podem ser usados individualmente ou ser
                acoplados à unidade principal (no modo portátil) ou a uma base semelhante a um gamepad (no modo
                caseiro). Os títulos suportam jogatinas online através da uma conexão de Internet e também modo
                multijogador local com outros consoles. Os jogos e softwares do Nintendo Switch estão disponíveis em
                cartuchos ROM físicos baseados em flash e também por meio de distribuição digital na Nintendo eShop; o
                sistema não tem bloqueio de região.</p>
            <p></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-3">
            <img class="rounded-circle" src="../imagens/pcgamer.png" alt="Generic placeholder image" width="140"
                height="140">
            <h2>PC Gamer</h2>
            <p>Com máquinas de ultima geração, temos aqui os melhores computadores com os melhores componentes que são
                vendidos no mercado. Com placas de videos recem lançadas, mouse e headsets sem fio, aqui sua experiência
                será leva para o amis alto nível de competitividade e qualidade.</p>
            <p></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-3">
            <img class="rounded-circle" src="../imagens/playstation5.png" alt="Generic placeholder image" width="140"
                height="140">
            <h2>Playstation 5</h2>
            <p>O PlayStation 5, lançado pela Sony, é um dos consoles mais modernos da sua geração e pode ser encontrado
                na versão com leitor de disco ou na versão apenas digital. Além da configuração atualizada, trazendo um
                chip customizado da AMD, virá com SSD embarcado e controle Wifi. Os jogos do videogame estão com
                gráficos cada vez mais realistas, melhor iluminados e com tempo de carregamento muito mais rápido. O
                console conta com resolução 4K, tecnologia ray tracing e uma melhor experiência nos jogos com o joystick
                dual sense. Alguns jogos são exclusivos do console, como: Spider-Man: Miles Morales, God of War e
                Horizon Forbidden West.</p>
            <p></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-3">
            <img class="rounded-circle" src="../imagens/xboxseriesx.png" alt="Generic placeholder image" width="140"
                height="140">
            <h2>Xbox Series X</h2>
            <p> Xbox Series X é alimentado por uma CPU AMD Zen 2 customizada de 7 nm com oito núcleos rodando a 3,8 GHz
                nominal ou quando é usado em multithreading simultâneo (SMT), a 3,6 GHz. Um núcleo da CPU é dedicado ao
                sistema operacional subjacente.[9] A unidade de processamento gráfico também é uma unidade baseada na
                arquitetura gráfica RDNA 2 da AMD. Ele tem um total de 56 unidades computacionais (CUs) com 3584
                núcleos, com 52 CUs e 3328 núcleos ativados e estará rodando a uma velocidade fixa de 1.825 GHz. Esta
                unidade é capaz de 12.155 teraflops de potência computacional.[9] A unidade é fornecida com 16 GB de
                SDRAM GDDR6, com 10 GB rodando a 560 GB/s para ser usado principalmente com o sistema gráfico e os
                outros 6 GB a 336 GB/s para as outras funções de computação. Após contabilizar o software de sistema,
                aproximadamente 13,5 GB de memória estarão disponíveis para jogos e outros aplicativos, com o software
                de sistema apenas usando recursos do pool mais lento.</p>
            <p></p>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


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