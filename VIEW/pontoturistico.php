<!DOCTYPE html>
<html lang="PT_br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="shortcut icon" href="../ASSETS/ICO/logo1.ico" type="image/x-icon">
    <link rel="stylesheet" href="../LIB/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../LIB/fontawesome-free-6.1.1-web/css/all.min.css">
    <script src="../LIB/fontawesome-free-6.1.1-web/js/all.min.js" defer></script>
    <title>Pontos Turísticos</title>
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
    <!-- HEADER -->
    <?php include('header.php') ?>

    <div class="apresentacao">
        <h1 class="titulo">Pontos Turísticos</h1>
        <img src="../ASSETS/IMAGES/onda1.png" alt="onda1">
    </div>

    <?php
        require_once '../DAO/PontoDAO.php';
        include '../JS/funcao.php';
        $pontoDAO = new PontoDAO();
        $pontos = $pontoDAO->findAll();
        echo "<table border='1'>";
        echo "  <tr>";
        echo "      <th>Localização</th>";
        echo "      <th>Título</th>";
        echo "      <th>Descrição</th>";
        echo "      <th>Excluir</th>";
        echo "      <th>Editar</th>";
        echo "  </tr>";

        foreach ( $pontos as $ponto ) {
            echo "<tr>";
            echo "  <td> {$ponto["LOCAL"]}</td>";
            echo "  <td> {$ponto["TITULO"]}</td>";
            echo "  <td> {$ponto["DESCRICAO"]} </td>";
            echo "  <td align='center'><a href='../controller/excluirPontoController.php?id={$ponto["ID"]}'><i class='fa-solid fa-trash-can'></a></i></td>";
            echo "  <td align='center'><a href='alterarPonto.php?id={$ponto["ID"]}'><i class='fa-solid fa-pen-to-square'></a></i></td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>

    <!-- FOOTER -->
    <?php include('footer.php') ?>
</body>

</html>