<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../LIB/fontawesome-free-6.1.1-web/css/all.min.css">
    <script src="../LIB/fontawesome-free-6.1.1-web/js/all.min.js"></script>
    <style>
       tr:nth-child(even) {
          background-color:#cccccc;
       }
       tr:nth-child(odd) {
           background-color:#ffff;
       }
    </style>
</head>

<body>
<?php
require_once '../DAO/AvaliacaoDAO.php';
include '../JS/funcao.php';
$avaliacaoDAO = new AvaliacaoDAO();
$avaliacoes = $avaliacaoDAO->findAll();
echo "<table border='1'>";
echo "  <tr>";
echo "      <th>Nome</th>";
echo "      <th>Opinião</th>";
echo "      <th>Avaliação</th>";
echo "      <th>Excluir</th>";
echo "      <th>Editar</th>";
echo "  </tr>";

foreach ( $avaliacoes as $avaliacao ) {
    echo "<tr>";
    echo "  <td> {$avaliacao["NOME"]}</td>";
    echo "  <td> {$avaliacao["OPINIAO"]}</td>";
    echo "  <td> {$avaliacao["AVALIACAO"]} </td>";
    echo "  <td align='center'><a href='../controller/excluirAvaliacaoController.php?id={$avaliacao["ID"]}'><i class='fa-solid fa-trash-can'></a></i></td>";
    echo "  <td align='center'><a href='alterarAvaliacao.php?id={$avaliacao["ID"]}'><i class='fa-solid fa-pen-to-square'></a></i></td>";
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
