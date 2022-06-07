<!DOCTYPE html>
<html lang="PT_br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/listarponto-passeio.css">
    <link rel="shortcut icon" href="../ASSETS/ICO/logo1.ico" type="image/x-icon">
    <link rel="stylesheet" href="../LIB/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <title>Projeto Ceilândia</title>
</head>

<body>
    <!-- HEADER -->
    <?php include 'header-evento.php';?>
    <div class="apresentacao">
        <h1 class="titulo">Eventos</h1>
        <img src="../ASSETS/IMAGES/onda1.png" alt="onda1">
    </div>
    <div class="container-evento">

        <?php
            require_once '../DAO/EventoDAO.php';
            require_once '../DAO/UsuarioDAO.php';
            session_start();
            include '../JS/funcao.php';
            $eventoDAO = new EventoDAO();
            $eventos   = $eventoDAO->findAll();

            foreach ( $eventos as $evento ) {

            ?>
        <div class="box-evento">
            <img class="img-evento" src="../ASSETS/EVENTOS/foto/<?php echo $evento['FOTO'] ?>" alt="" width="350" height="450"/><?php

            echo "<div class='title_evento'>
                        <span>{$evento["TITULO"]}</span>";

            echo "<p class='text_evento'>
                        {$evento["DESCRICAO"]}
                    </p>";
            echo "<p class='descricao_evento'>
                        <b>Capacidade:</b> {$evento["CAPACIDADE"]} Pessoas
                    </p>";

            echo "<p class='descricao_evento'>
                        <b>Localização:</b> {$evento["LOCAL"]}
                    </p>";
            echo "<p class='descricao_evento'>
                        <b>Início</b>: ", date( "d/m/Y H:i", strtotime( $evento["DATA_INICIO"] ) ),

            "</p>";
            echo "<p class='descricao_evento'>
            <b>Fim:</b> ", date( "d/m/Y H:i", strtotime( $evento["DATA_TERMINO"] ) ),

            "</p>";
            
            if(isset($_SESSION['id']))
            {
                echo "<p class='agendar'>
                <a href='agendamento.php?id={$evento['ID']}'>Agendar </a>",

                "</p>";
            }


            echo "</div>";
            echo "</div>";
            echo "</div>";
    }
?>
        </div>
    </div>


    <!-- FOOTER -->
    <?php include 'footer.php'?>
</body>

</html>