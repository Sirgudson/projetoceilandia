<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<?php
    require_once '../DTO/PontoDTO.php';
    require_once '../DAO/PontoDAO.php';
    include '../js/funcao.php';
    require_once '../util/Upload.php';

    define( 'DIR_FOTO', $_SERVER['DOCUMENT_ROOT'] . "/PROJETOCEILANDIA/ASSETS/PONTOS/foto/" );

    $local     = $_POST["local"];
    $titulo    = $_POST["titulo"];
    $descricao = $_POST["descricao"];
    $foto      = $_FILES["foto"];

    $upload = new Upload( $foto );

    $pontoDTO = new PontoDTO();
    $pontoDTO->setLocal( $local );
    $pontoDTO->setTitulo( $titulo );
    $pontoDTO->setDescricao( $descricao );
    $pontoDTO->setFoto( isset( $foto ) && $foto["error"] == 0 ? $upload->getNome( $foto ) : null );

    $pontoDAO = new PontoDAO();

    if ( empty( $ponto ) ) {
        if ( $pontoDAO->salvar( $pontoDTO ) ) {
            $upload->salvar( $foto, DIR_FOTO );
            header( "Location: ../VIEW/pontoturistico.php" );
        }
    } else {
    ?>
<div class="alert alert-danger" role="alert">
    <p>Algo deu errado!</p>

    Vamos tentar novamente? Redirecionando..
    <?php header( 'Refresh: 4; URL=http://localhost/projetoceilandia/VIEW/cadastrarPonto.php' );?>
</div>
<?php }?>