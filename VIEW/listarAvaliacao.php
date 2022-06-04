<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Avaliações</title>
    <link rel="stylesheet" href="../LIB/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="shortcut icon" href="../ASSETS/ICO/logo1.ico" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/style-admin.css">
    <script src="../LIB/fontawesome-free-6.1.1-web/js/all.min.js"></script>
</head>

<body>
<?php
require_once '../DAO/AvaliacaoDAO.php';
include '../JS/funcao.php';
$avaliacaoDAO = new AvaliacaoDAO();
$avaliacoes = $avaliacaoDAO->findAll();
echo "<div class='container-list'>";
echo "<h1><b>Avaliações</b></h1>";
echo "<table>";
echo "  <tr>";
echo "      <th>Nome</th>";
echo "      <th>Opinião</th>";
echo "      <th>Avaliação</th>";
echo "      <th>Editar</th>";
echo "      <th>Excluir</th>";
echo "  </tr>";

foreach ( $avaliacoes as $avaliacao ) {
    echo "<tr>";
    echo "  <td> {$avaliacao["NOME"]}</td>";
    echo "  <td> {$avaliacao["OPINIAO"]}</td>";
    echo "  <td> {$avaliacao["AVALIACAO"]} </td>";
    echo "  <td align='center'><a href='alterarAvaliacao.php?id={$avaliacao["ID"]}'><i class='icon fa-solid fa-pen-to-square'></a></i></td>";
    echo "  <td align='center'><a href='../controller/excluirAvaliacaoController.php?id={$avaliacao["ID"]}'><i class='delete fa-solid fa-trash-can'></a></i></td>";
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
