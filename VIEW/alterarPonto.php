<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
<?php
require_once '../DAO/PontoDAO.php';
$idPonto = $_GET["id"];
$pontoDAO = new PontoDAO();
$ponto = $pontoDAO->findById( $idPonto );
?>
    <fieldset>
        <legend>Alterar Ponto Turístico</legend>
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
                    <td><input type="text" name="descricao" value="<?php echo $ponto["DESCRICAO"] ?>"></td>
                </tr>
                <td><img src="../ASSETS/PONTOS/foto/<?php echo $ponto["FOTO"] ?>" width="200"/></td>
                </tr>
                <tr>
                    <td>Foto:</td>
                    <td><input type="file" name="foto" id="foto"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Alterar">
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>