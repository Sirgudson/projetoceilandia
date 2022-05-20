<!DOCTYPE html>
<html lang="PT_br">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/listar.css">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="shortcut icon" href="../ASSETS/ICO/logo1.ico" type="image/x-icon">
    <link rel="stylesheet" href="../LIB/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <title>Pontos Turísticos</title>
</head>

<body>
    <!-- HEADER -->
    <?php include('header.php') ?>

    <div class="apresentacao">
        <h1 class="titulo">Pontos Turísticos</h1>
        <img src="../ASSETS/IMAGES/onda1.png" alt="onda1">
    </div>
    <div class="container-ponto">

        <?php
        require_once '../DAO/PontoDAO.php';
        include '../JS/funcao.php';
        $pontoDAO = new PontoDAO();
        $pontos = $pontoDAO->findAll();

        foreach ($pontos as $ponto) {

        ?>
            <div class="box-ponto">
                <img src="../ASSETS/IMAGES/casa-cantador.jpeg" alt="" id="img-ponto">
            <?php
            echo "<div class='title_ponto'>
                        <span>{$ponto["TITULO"]}</span>";

            echo "<p class='descricao_ponto'>
                        {$ponto["DESCRICAO"]}
                    </p>";

            echo "<p class='descricao_ponto'>
                        Localização: {$ponto["LOCAL"]}
                    </p>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
            ?>
            </div>
    </div>

    <!-- FOOTER -->
    <?php include('footer.php') ?>
</body>

</html>
