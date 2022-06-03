<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<?php
    require_once '../DTO/AvaliacaoDTO.php';
    require_once '../DAO/AvaliacaoDAO.php';
    include '../js/funcao.php';

    $nome      = $_POST["nome"];
    $opiniao   = $_POST["opiniao"];
    $avaliacao = $_POST["avaliacao"];

    $avaliacaoDTO = new AvaliacaoDTO();
    $avaliacaoDTO->setNome( $nome );
    $avaliacaoDTO->setOpiniao( $opiniao );
    $avaliacaoDTO->setAvaliacao( $avaliacao );

    $avaliacaoDAO = new AvaliacaoDAO();

    if ( !empty( $avaliacao ) ) {
        if ( $avaliacaoDAO->salvar( $avaliacaoDTO ) ) {
        ?>
            <div class="alert alert-success" role="alert">
                <p>Deu certo!</p>
                Vamos te redirecionar para a página Inicial..
                <?php header( 'Refresh: 4; URL=http://localhost/projetoceilandia/VIEW/index.php' );?>
            </div>
            <?php
                }
                } else {
                ?>
                <div class="alert alert-danger" role="alert">
                    <p>Algo deu errado!</p>
                    Vamos tentar novamente? Redirecionando..
                    <?php header( 'Refresh: 4; URL=http://localhost/projetoceilandia/VIEW/cadastrarAvaliacao.php' );?>
                </div>
        <?php }?>
