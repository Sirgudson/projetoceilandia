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
require_once '../DAO/EventoDAO.php';
include '../JS/funcao.php';
$eventoDAO = new EventoDAO();
$eventos = $eventoDAO->findAll();
echo "<table border='1'>";
echo "  <tr>";
echo "      <th>Localização</th>";
echo "      <th>Título</th>";
echo "      <th>Descrição</th>";
echo "      <th>Início</th>";
echo "      <th>Encerramento</th>";
echo "      <th>Capacidade</th>";
echo "      <th>Excluir</th>";
echo "      <th>Editar</th>";
echo "  </tr>";

foreach ( $eventos as $evento ) {
    echo "<tr>";
    echo "  <td> {$evento["LOCAL"]}</td>";
    echo "  <td> {$evento["TITULO"]}</td>";
    echo "  <td> {$evento["DESCRICAO"]} </td>";
    echo "  <td> {$evento["DATA_INICIO"]} </td>";
    echo "  <td> {$evento["DATA_TERMINO"]} </td>";
    echo "  <td> {$evento["CAPACIDADE"]} </td>";
    echo "  <td align='center'><a href='../controller/excluirEventoController.php?id={$evento["ID"]}'><i class='fa-solid fa-trash-can'></a></i></td>";
    echo "  <td align='center'><a href='alterarEvento.php?id={$evento["ID"]}'><i class='fa-solid fa-pen-to-square'></a></i></td>";
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
