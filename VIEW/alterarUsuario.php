<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Usuários</title>
    <link rel="stylesheet" href="../LIB/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="shortcut icon" href="../ASSETS/ICO/logo1.ico" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/style-admin.css">
    <script src="../LIB/fontawesome-free-6.1.1-web/js/all.min.js"></script>
    <title></title>
</head>

<body>
    <?php
    require_once '../DAO/ClienteDAO.php';
    $idUsuario = $_GET["id"];
    $clienteDAO = new ClienteDAO();
    $usuario = $clienteDAO->findById($idUsuario);
    ?>
    <div class="container-alterarUS">
        <div class="alterarUS-form">
            <img class="img-alterarUS" src="../ASSETS/IMAGES/caixadagua-depois.webp" alt="">
        <form action="../CONTROLLER/alterarUsuarioController.php" method="post">
            <input type="hidden" name="idUsuario" value="<?php echo $usuario["ID"] ?>">
            <table>
                <tr>
                    <td>Nome:</td>
                    <td><input type="text" name="nome" value="<?php echo $usuario["NOME"] ?>"></td>
                </tr>
                <tr>
                    <td>CPF:</td>
                    <td><input type="text" name="cpf" id="cpf" value="<?php echo $usuario["CPF"] ?>"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email" value="<?php echo $usuario["EMAIL"] ?>"></td>
                </tr>
                <tr>
                    <td>Senha:</td>
                    <td><input type="text" name="senha" id="senha" value="<?php echo $usuario["PASSWORD"] ?>"></td>
                </tr>
                <tr>
                    <td>Situação:</td>
                </tr>
                <tr>
                    <td><input type="hidden" name="ativo" id="ativo" value="<?php echo $usuario["ATIVO"] ?>"></td>
                    <td><input type="radio" id="1" name="ativo" value="1">
                        <label for="ativo">Ativado</label>
                    </td>
                    <td><input type="radio" id="0" name="ativo" value="0">
                        <label for="ativo">Desativado</label>
                    </td>
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