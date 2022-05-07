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
require_once '../dao/ClienteDAO.php';
$idUsuario = $_GET["id"];
$clienteDAO = new ClienteDAO();
$usuario = $clienteDAO->findById( $idUsuario );
?>
    <fieldset>
        <legend>Alterar cliente</legend>
        <form action="../controller/alterarUsuarioController.php" method="post">
            <input type="hidden" name="idUsuario" value="<?php echo $usuario["id"] ?>">
            <table>
                <tr>
                    <td>Nome:</td>
                    <td><input type="text" name="nome" value="<?php echo $usuario["nome"] ?>"></td>
                </tr>
                <tr>
                    <td>CPF:</td>
                    <td><input type="text" name="cpf" id="cpf" value="<?php echo $usuario["cpf"] ?>"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email" value="<?php echo $usuario["email"] ?>"></td>
                </tr>
                <tr>
                    <td>Senha:</td>
                    <td><input type="text" name="senha" id="senha" value="<?php echo $usuario["senha"] ?>"></td>
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