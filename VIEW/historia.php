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
        <h1 class="titulo">História</h1>
        <img src="../ASSETS/IMAGES/onda1.png" alt="onda1">
    </div>

    <div class="container-historia">
        <div class="box-history">
            <h3 class="text-cultura1">Conheça um pouco da nossa história</h3>
            <img src="../ASSETS/IMAGES/separador-laranja.png" alt="separador laranja" class="separador-history">
            <p class="texto-box-history">
                Integrando a CEI (Campanha de Erradicação de Invasões) do governador Hélio Prates, Ceilândia foi fundada em 27 de março de 1971. Atualmente segundo estimativas do IBGE, nossa população tem cerca de 500 mil habitantes.
            </p>
            <p class="texto-box-history">
                Presidida pela primeira Dama Vera Almeida Silveira, esposa do então Governador Hélio Prates, tem início a campanha de erradicação das favelas, e os candangos residentes nas invasões: IAPI, Vila Tenório, Esperança, Bernardos Sayão, e Colombo; Morro do Urubu e do querosene, curral das éguas e placa Mercedes são assentadas na nova cidade.
            </p>
            <p class="texto-box-history">
                Temos a maior Região Administrativa do Distrito Federal! Além de mais populosa, tem um comércio forte, expressões das mais diversas culturas, ruas largas e bem divididas, transporte público realizado por metrô e um frota de veículos de passeio expressiva.
            </p>
            <p class="texto-box-history">
                A cidade conta com uma rede educacional forte como a Faculdade de Ceilândia – UNB Decanato de extensão, Instituto Federal - Campus Ceilândia, Centro Interescolar de Línguas de Ceilândia, Escola Técnica de Ceilândia, vários Centros de Educação de Primeira Infância entre as redes de Ensino médio.
            </p>
            <p class="texto-box-history">
                As áreas de lazer e saúde têm sido valorizadas, e entre as quadras temos academias Populares, quadras sintéticas, de areia, praças que estimulam a cultura e o bem-estar da população, Ainda contamos com uma vida rural em ascensão e a feira do produtor abastecer grande parte da população do DF. Ceilândia é uma cidade autônoma, madura e maternal que ampara e cuida de todos aqueles que aportam em sua Região.

            </p>
        </div>
        <div class="container-compare">
            <div class="compare">
                <div class="before">
                    <div class="after"></div>
                </div>
                <input type="range" min="0" max="640" step="10" id="compare-ip">
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <?php include('footer.php') ?>
    <script src="../JS/function.js"></script>
</body>
</html>