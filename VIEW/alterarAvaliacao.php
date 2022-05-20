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
    $idAvaliacao   = $_GET["id"];
    $avaliacaoDAO  = new AvaliacaoDAO();
    $avaliacao     = $avaliacaoDAO->findById( $idAvaliacao );
?>
    <fieldset>
        <legend>Alterar avaliacao Turístico</legend>
        <form action="../CONTROLLER/alterarAvaliacaoController.php" method="post">
            <input type="hidden" name="idAvaliacao" value="<?php echo $avaliacao["ID"] ?>">
            <table>
                <tr>
                    <td>Nome:</td>
                    <td><input type="text" name="nome" value="<?php echo $avaliacao["NOME"] ?>"></td>
                </tr>
                <tr>
                    <td>Opinião:</td>
                    <td><input type="text" name="opiniao" id="opiniao" value="<?php echo $avaliacao["OPINIAO"] ?>"></td>
                </tr>
                <tr>
                    <td>Avaliação Cadastrada:</td>
                    <td><input type="number" name="avaliacao" readonly="readonly" value="<?php echo $avaliacao["AVALIACAO"] ?>"></td>
                    <tr>
                    <td><label for="descricao">Editar Avaliação:</label></td>
                    <td><input type="radio" id="1" name="avaliacao" value="1">
                    <label for="avaliacao">1</label></td>
                    <td><input type="radio" id="2" name="avaliacao" value="2">
                    <label for="avaliacao">2</label></td>
                    <td><input type="radio" id="3" name="avaliacao" value="3">
                    <label for="avaliacao">3</label></td>
                    <td><input type="radio" id="4" name="avaliacao" value="4">
                    <label for="avaliacao">4</label></td>
                    <td><input type="radio" id="5" name="avaliacao" value="5">
                    <label for="avaliacao">5</label></td>
                </tr>
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