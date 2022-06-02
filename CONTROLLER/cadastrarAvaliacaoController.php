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
            <div class="alert alert-danger" role="alert">
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
