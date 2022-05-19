<?php
require_once '../DAO/AvaliacaoDAO.php'; //excluirAvaliacaoController.php
$idAvaliacao = $_GET['id'];
$avaliacaoDAO = new AvaliacaoDAO();
if ( $avaliacaoDAO->deleteById( $idAvaliacao ) ) {
    header( "Location: ../VIEW/listarAvaliacao.php" );
}
