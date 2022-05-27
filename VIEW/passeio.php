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
    <title>Projeto Ceilândia</title>
</head>

<body>
    <!-- HEADER -->
    <?php include('header.php'); ?>
    <div class="apresentacao">
        <h1 class="titulo">Passeio</h1>
        <img src="../ASSETS/IMAGES/onda1.png" alt="onda1">
    </div>
    <div class="container-evento">

        <?php
        require_once '../DAO/EventoDAO.php';
        include '../JS/funcao.php';
        $eventoDAO = new EventoDAO();
        $eventos = $eventoDAO->findAll();

        foreach ($eventos as $evento) {

        ?>
            <div class="box-evento">
            <?php
            echo "<div class='foto_evento' id='img-evento'>";?>
                        <img src="../ASSETS/EVENTOS/foto/<?php echo $evento['FOTO'] ?>" alt="" width="550" height="500"/><?php
                        
            echo "<div class='title_evento'>
                        <span>{$evento["TITULO"]}</span>";

            echo "<p class='descricao_evento'>
                        {$evento["DESCRICAO"]}
                    </p>";
            echo "<p class='capacidade_evento'>
                        Capacidade: {$evento["CAPACIDADE"]} Pessoas
                    </p>";

            echo "<p class='descricao_evento'>
                        Localização: {$evento["LOCAL"]}
                    </p>";
            echo "<p class='inicio_evento'>
                        Quando começa: ", date( "d/m/Y H:i:s", strtotime( $evento["DATA_INICIO"] ) ),
                        
                    "</p>";
            echo "<p class='termino_evento'>
            Quando começa: ", date( "d/m/Y H:i:s", strtotime( $evento["DATA_TERMINO"] ) ),
                        
            "</p>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
            ?>
            </div>
    </div>


    <!-- FOOTER -->
    <?php include('footer.php') ?>
</body>

</html>