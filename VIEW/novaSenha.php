<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Senha</title>
    <link rel="stylesheet" href="../LIB/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="shortcut icon" href="../ASSETS/ICO/logo1.ico" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/style-admin.css">
    <script src="../LIB/fontawesome-free-6.1.1-web/js/all.min.js"></script>
</head>

<body>
    <?php
    require_once '../DAO/ClienteDAO.php';
    $cpf = $_GET["cpf"];
    $clienteDAO = new ClienteDAO();
    $usuario = $clienteDAO->findByCpf($cpf);
    ?>
    <div class="container-alterarUS">
        <div class="alterarUS-form">
            <img class="img-alterarUS" src="../ASSETS/IMAGES/caixadagua-depois.webp" alt="">
            <form action="../CONTROLLER/alterarSenhaController.php" method="post">
                <input type="hidden" name="cpf" value="<?php echo $usuario["CPF"] ?>">
                <table>
                    <tr>
                        <td>Confirme o Email:</td>
                        <td><input type="email" name="nome" value="<?php echo $usuario["EMAIL"] ?>" readonly></td>
                    </tr>
                    <tr>
                        <td>Nova senha:</td>
                        <td><input type="password" name="senha" id="senha" value="<?php echo $usuario["PASSWORD"] ?>" required></td>
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