<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Ponto Turístico</title>
    <link rel="stylesheet" href="../LIB/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="shortcut icon" href="../ASSETS/ICO/logo1.ico" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/internas-cadastros.css">
    <script src="../LIB/fontawesome-free-6.1.1-web/js/all.min.js"></script>
</head>

<body>
    <?php
    require_once '../DAO/PontoDAO.php';
    $idPonto = $_GET["id"];
    $pontoDAO = new PontoDAO();
    $ponto = $pontoDAO->findById($idPonto);
    ?>
    <div class="container-cadastro">
        <div class="cadastro-form">
            <img class="img-cadastro" src="../ASSETS/IMAGES/caixadagua-depois.webp" alt="">
            <form action="../CONTROLLER/alterarPontoController.php" method="post">
                <input type="hidden" name="idPonto" value="<?php echo $ponto["ID"] ?>">
                <table>
                    <tr>
                        <td>Local:</td>
                        <td><input type="text" name="local" value="<?php echo $ponto["LOCAL"] ?>"></td>
                    </tr>
                    <tr>
                        <td>Título:</td>
                        <td><input type="text" name="titulo" id="titulo" value="<?php echo $ponto["TITULO"] ?>"></td>
                    </tr>
                    <tr>
                        <td>Descrição:</td>
                        <td><input name="descricao" value="<?php echo $ponto["DESCRICAO"] ?>"></td>
                    </tr>
                    <td><img src="../ASSETS/PONTOS/foto/<?php echo $ponto["FOTO"] ?>" width="200" /></td>
                    </tr>
                    <tr>
                        <td>Foto:</td>
                        <td><input type="file" name="foto" id="foto"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="submit" value="Alterar">Alterar</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>