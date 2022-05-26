<!DOCTYPE html>
<html lang="PT_br">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pontos Turísticos</title>
    <link rel="stylesheet" href="../LIB/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="shortcut icon" href="../ASSETS/ICO/logo1.ico" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/style-admin.css">
    <script src="../LIB/fontawesome-free-6.1.1-web/js/all.min.js"></script>
</head>

<body>

  <?php
  require_once '../DAO/PontoDAO.php';
  include '../JS/funcao.php';
  $pontoDAO = new PontoDAO();
  $pontos = $pontoDAO->findAll();
  echo "<div class='container-table'>";
  echo "<h1><b>Pontos Turísticos</b></h1>";
  echo "<table>";
  echo "  <tr>";
  echo "      <th>Localização</th>";
  echo "      <th>Título</th>";
  echo "      <th>Descrição</th>";
  echo "      <th>Excluir</th>";
  echo "      <th>Editar</th>";
  echo "  </tr>";

  foreach ($pontos as $ponto) {
    echo "<tr>";
    echo "  <td class='normal'> {$ponto["LOCAL"]}</td>";
    echo "  <td class='normal'> {$ponto["TITULO"]}</td>";
    echo "  <td class='description'> {$ponto["DESCRICAO"]} </td>";
    echo "  <td class='normal' align='center'><a href='alterarPonto.php?id={$ponto["ID"]}'><i class='icon fa-solid fa-pen-to-square'></a></i></td>";
    echo "  <td class='normal' align='center'><a href='../controller/excluirPontoController.php?id={$ponto["ID"]}'><i class='delete fa-solid fa-trash-can'></a></i></td>";
    echo "</tr>";
  }
  echo "</table>";
  echo "</div>"
  ?>
</body>

</html>