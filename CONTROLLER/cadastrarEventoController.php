<?php
require_once '../DTO/EventoDTO.php';
require_once '../DAO/EventoDAO.php';
require_once '../util/Upload.php';

define( 'DIR_FOTO', $_SERVER['DOCUMENT_ROOT'] . "/PROJETOCEILANDIA/ASSETS/EVENTOS/foto/" );

$local = $_POST["local"];
$titulo = $_POST["titulo"];
$descricao = $_POST["descricao"];
$inicio = $_POST["inicio"];
$encerramento = $_POST["encerramento"];
$capacidade = $_POST["capacidade"];
$foto = $_FILES["foto"];

$upload = new Upload( $foto );

$eventoDTO = new EventoDTO();
$eventoDTO->setLocal( $local );
$eventoDTO->setTitulo( $titulo );
$eventoDTO->setDescricao( $descricao );
$eventoDTO->setInicio( $inicio );
$eventoDTO->setEncerramento( $encerramento );
$eventoDTO->setCapacidade( $capacidade );
$eventoDTO->setFoto( isset( $foto ) && $foto["error"] == 0 ? $upload->getNome( $foto ) : null );


$eventoDAO = new EventoDAO();



if ( empty( $evento ) ) {
    if ( $eventoDAO->salvar( $eventoDTO ) ) {
        $upload->salvar( $foto, DIR_FOTO );
        header( "Location: ../VIEW/listarEvento.php" );
    }
} else {
?>
<div class="alert alert-danger" role="alert">
    <p>Algo deu errado!</p>

    Vamos tentar novamente? Redirecionando..
    <?php header( 'Refresh: 4; URL=http://localhost/projetoceilandia/VIEW/cadastrarEvento.php' );?>
</div>
<?php
}