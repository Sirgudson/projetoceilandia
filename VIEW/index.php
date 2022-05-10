<!DOCTYPE html>
<html lang="PT_br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../LIB/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <title>Projeto Ceilândia</title>
</head>

<body>
    <!-- HEADER -->
    <?php include('header.php') ?>

    <div class="apresentacao">
        <h2 class="subtitulo">
            <img src="../ASSETS/IMAGES/onda1.png" alt="onda1">BE MY GUEST<img src="../ASSETS/IMAGES/onda2.png" alt="onda2">
        </h2><br>
        <h1 class="titulo">Bem-vindo a Ceilândia</h1>
    </div>
    <div class="container-index">
        <div class="cultura1">
            <h3 class="text-cultura1">Conheça melhor nossa cultura</h3>
            <img src="../ASSETS/IMAGES/separador-laranja.png" alt="separador laranja" class="separador1">
        </div>

        <div class="cultura2">
            <h4 class="text-cultura2">A Região Administrativa de Ceilândia, é uma das mais populosas RAs, possuindo um forte comércio com tradição nordestina.</h4>
        </div>

        <!-- HISTÓRIA -->
        <div class="historia">
            <div class="historia1">
                <p class="texto-historia">A História</p>
                <img src="../ASSETS/IMAGES/separador-laranja.png" alt="separador laranja" class="separador2">
            </div>
            <div class="historia2">
                <img src="../ASSETS/IMAGES/letreiro.png" alt="letreiro-ceilandia" class="img-retangulo">
            </div>
            <div class="historia3">
                <img src="../ASSETS/IMAGES/bandeira.png" alt="bandeira-ceilandia" class="img-quadrado">
            </div>
            <div class="historia4">
                <p>Venha conhecer um pouco mais da região mais amada do quadradinho, com eventos e passeios para toda família.</p>
                <img src="../ASSETS/IMAGES/separador-laranja.png" alt="separador laranja" class="separador3">
                <a href="#">AGENDAR</a>
            </div>
        </div>

        <!-- LOCALIZAÇÃO -->
        <div class="localizacao">
            <div class="localizacao1">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61413.1759978935!2d-48.223059733050334!3d-15.839585881972654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935bceef0979b2ab%3A0xcca29259f34367e5!2zQ2VpbMOibmRpYSwgQnJhc8OtbGlhIC0gREY!5e0!3m2!1spt-BR!2sbr!4v1651083238415!5m2!1spt-BR!2sbr" width="845" height="420" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="localizacao2">
                <p>Localização</p>
                <img src="../ASSETS/IMAGES/separador-laranja.png" alt="separador laranja" class="separador4">
            </div>
        </div>

        <div class="texto-localizacao">
            <p>Ceilândia a maior região administrativa do Distrito Federal, possui uma área de 230,3 km². Fica proxima de Taguatinga e Samabaia.</p>
        </div>

        <!-- QUEM SOMOS NÓS -->
        <div class="equipe">
            <div class="equipe1">
                <img src="../ASSETS/IMAGES/equipe.jpeg" alt="foto dos criadores" class="img-quadrado">
            </div>
            <div class="equipe2">
                <p class="titulo-equipe2">Sobre Nós :)</p>
                <img src="../ASSETS/IMAGES/separador-laranja.png" alt="separador laranja" class="separador5">
                <p class="paragrafo-equipe">
                    Dhimylee, Marcelo e Nadir.  Estudantes da Escola Técnica da Ceilândia e criadores do Turismo Candango: Projeto Ceilândia. Através do nosso sistema web, iremos mostrar a importância da Ceilândia para o turismo cultural.
                </p>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <?php include('footer.php') ?>
</body>

</html>