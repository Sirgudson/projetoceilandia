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
require_once '../DAO/EventoDAO.php';
$idEvento = $_GET["id"];
$eventoDAO = new EventoDAO();
$evento = $eventoDAO->findById( $idEvento );

?>
    <fieldset>
        <legend>Alterar Evento</legend>
        <form id="formCadastrarEvento" action="../CONTROLLER/alterarEventoController.php" enctype="multipart/form-data" method="post">
            <input type="hidden" name="idEvento" value="<?php echo $evento["ID"] ?>">
            <table>
                <tr>
                    <td>Local:</td>
                    <td><input type="text" name="local" value="<?php echo $evento["LOCAL"] ?>"></td>
                </tr>
                <tr>
                    <td>Título:</td>
                    <td><input type="text" name="titulo" id="titulo" value="<?php echo $evento["TITULO"] ?>"></td>
                </tr>
                <tr>
                    <td>Descrição:</td>
                    <td><input type="text" name="descricao" id="descricao" value="<?php echo $evento["DESCRICAO"] ?>"></td>
                </tr>
                <tr>
                    <td>Início:</td>
                    <td><input type="datetime-local" name="inicio" id="inicio" value="<?php echo $evento["DATA_INICIO"] ?>"></td>
                </tr>
                <tr>
                    <td>Encerramento:</td>
                    <td><input type="datetime-local" name="encerramento" id="encerramento" value="<?php echo $evento["DATA_TERMINO"] ?>"></td>
                </tr>
                <tr>
                    <td>Capacidade:</td>
                    <td><input type="text" name="capacidade" id="capacidade" value="<?php echo $evento["CAPACIDADE"] ?>"></td>
                </tr>
                <tr>
                <td><img src="../ASSETS/EVENTOS/foto/<?php echo $evento["FOTO"] ?>" width="200"/></td>
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