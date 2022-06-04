<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Eventos</title>
    <link rel="stylesheet" href="../LIB/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="shortcut icon" href="../ASSETS/ICO/logo1.ico" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/style-admin.css">
    <script src="../LIB/fontawesome-free-6.1.1-web/js/all.min.js"></script>
</head>

<body>
    <?php
    require_once '../DAO/EventoDAO.php';
    include '../JS/funcao.php';
    $eventoDAO = new EventoDAO();
    $eventos = $eventoDAO->findAll();
    echo "<div class='container-table'>";
    echo "<h1><b>Eventos</b></h1>";
    echo "<table>";
    echo "  <tr>";
    echo "      <th>Localização</th>";
    echo "      <th>Título</th>";
    echo "      <th>Descrição</th>";
    echo "      <th>Início</th>";
    echo "      <th>Encerramento</th>";
    echo "      <th>Capacidade</th>";
    echo "      <th>Editar</th>";
    echo "      <th>Excluir</th>";
    echo "  </tr>";

    foreach ($eventos as $evento) {
        echo "<tr>";
        echo "  <td class='normal'> {$evento["LOCAL"]}</td>";
        echo "  <td class='normal'> {$evento["TITULO"]}</td>";
        echo "  <td class='description'> {$evento["DESCRICAO"]} </td>";
        echo "  <td class='normal'> {$evento["DATA_INICIO"]} </td>";
        echo "  <td class='normal'> {$evento["DATA_TERMINO"]} </td>";
        echo "  <td class='normal'> {$evento["CAPACIDADE"]} </td>";
        echo "  <td class='normal align='center'><a href='alterarEvento.php?id={$evento["ID"]}'><i class='icon fa-solid fa-pen-to-square'></a></i></td>";
        echo "  <td class='normal align='center'><a href='../controller/excluirEventoController.php?id={$evento["ID"]}'><i class='delete fa-solid fa-trash-can'></a></i></td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "</div>";
    ?>
</body>

</html>