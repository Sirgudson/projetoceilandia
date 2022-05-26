<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários Inativos</title>
    <link rel="stylesheet" href="../LIB/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="shortcut icon" href="../ASSETS/ICO/logo1.ico" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/style-admin.css">
    <script src="../LIB/fontawesome-free-6.1.1-web/js/all.min.js"></script>
</head>

<body>
<?php
require_once '../DAO/ClienteDAO.php';
include '../JS/funcao.php';
$clienteDAO = new ClienteDAO();
$usuarios = $clienteDAO->findAllInativos();
echo "<div class='container-list'>";
echo "<h1><b>Usuários Inativos do Sistema</b></h1>";
echo "<table>";
echo "  <tr>";
echo "      <th>Nome</th>";
echo "      <th>CPF</th>";
echo "      <th>Email</th>";
echo "      <th>Editar</th>";
echo "      <th>Excluir Permanentemente</th>";
echo "  </tr>";

foreach ( $usuarios as $usuario ) {
    echo "<tr>";
    echo "  <td> {$usuario["NOME"]}</td>";
    echo "  <td>", formatarCpfCnpj( $usuario["CPF"] ), "</td>";
    echo "  <td> {$usuario["EMAIL"]} </td>";
    echo "  <td align='center'><a href='alterarUsuario.php?id={$usuario["ID"]}'><i class='icon fa-solid fa-user-pen'></a></i></td>";
    echo "  <td align='center'><a href='../controller/excluirUsuarioController.php?id={$usuario["ID"]}'><i class='delete fa-solid fa-user-xmark'></a></i></td>";
    echo "</tr>";
}
echo "</table>";
echo "</div>";
?>
</body>
</html>