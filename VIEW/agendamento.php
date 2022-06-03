<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Agendamento do Passeio!</title>
    <link rel="stylesheet" href="../LIB/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="shortcut icon" href="../ASSETS/ICO/logo1.ico" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/internas-cadastros.css">
    <script src="../LIB/fontawesome-free-6.1.1-web/js/all.min.js"></script>
</head>

<body>
<?php
    require_once '../DAO/EventoDAO.php';
    $idEvento  = $_GET["id"];
    $eventoDAO = new EventoDAO();
    $evento    = $eventoDAO->findById( $idEvento );

?>
    <div class="container-cadastro">
        <div class="cadastro-form cadastro-formEvento">
        <img class="img-cadastro" src="../ASSETS/EVENTOS/foto/<?php echo $evento["FOTO"] ?>" alt="">
        <form action="../CONTROLLER/agendamentoController.php">
            <input type="hidden" name="idEvento" value="<?php echo $evento["ID"] ?>">
            <table>
                <tr>
                    <td>Local:</td>
                    <td><input type="text" name="local" value="<?php echo $evento["LOCAL"] ?>" readonly></td>
                </tr>
                <tr>
                    <td>Título:</td>
                    <td><input type="text" name="titulo" id="titulo" value="<?php echo $evento["TITULO"] ?>" readonly></td>
                </tr>
                <tr>
                    <td>Descrição:</td>
                    <td><textarea name="descricao" id="descricao" cols="30" rows="10" readonly><?php echo $evento["DESCRICAO"] ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Início:</td>
                    <td><input type="text" name="inicio" id="inicio" value="<?php echo $evento["DATA_INICIO"] ?>" readonly></td>
                </tr>
                <tr>
                    <td>Encerramento:</td>
                    <td><input type="text" name="encerramento" id="encerramento" value="<?php echo $evento["DATA_TERMINO"] ?>" readonly></td>
                </tr>
                <tr>
                    <td>Capacidade:</td>
                    <td><input type="text" name="capacidade" id="capacidade" value="<?php echo $evento["CAPACIDADE"] ?>" readonly></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit" onclick="window.print()" value="Agendar">Agendar</button>
                    </td>
                </tr>
            </table>
        </form>
        </div>
    </div>
</body>

</html>