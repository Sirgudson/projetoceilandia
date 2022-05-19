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
require_once '../DAO/AvaliacaoDAO.php';
$idAvaliacao = $_GET["id"];
$avaliacaoDAO = new AvaliacaoDAO();
$avaliacao = $avaliacaoDAO->findById( $idAvaliacao );
?>
    <fieldset>
        <legend>Alterar avaliacao Turístico</legend>
        <form action="../CONTROLLER/alterarAvaliacaoController.php" method="post">
            <input type="hidden" name="idAvaliacao" value="<?php echo $avaliacao["ID"] ?>">
            <table>
                <tr>
                    <td>Nome:</td>
                    <td><input type="text" name="local" value="<?php echo $avaliacao["NOME"] ?>"></td>
                </tr>
                <tr>
                    <td>Opinião:</td>
                    <td><input type="text" name="titulo" id="titulo" value="<?php echo $avaliacao["OPINIAO"] ?>"></td>
                </tr>
                <tr>
                    <td>Avaliação:</td>
                    <td><input type="text" name="descricao" value="<?php echo $avaliacao["AVALIACAO"] ?>"></td>
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