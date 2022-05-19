<?php
require_once '../DAO/PontoDAO.php'; //excluirPontoController.php
$idPonto = $_GET['id'];
$pontoDAO = new PontoDAO();
if ( $pontoDAO->deleteById( $idPonto ) ) {
    header( "Location: ../view/pontoturistico.php" );
}
