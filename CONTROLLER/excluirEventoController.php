<?php
require_once '../DAO/EventoDAO.php'; //excluirEventoController.php
$idEvento = $_GET['id'];
$eventoDAO = new EventoDAO();
if ( $eventoDAO->deleteById( $idEvento ) ) {
    header( "Location: ../VIEW/listarEvento.php" );
}
