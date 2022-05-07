<?php
require_once '../dao/ClienteDAO.php'; //excluirClienteController.php
$idUsuario = $_GET['id'];
$clienteDAO = new ClienteDAO();
if ( $clienteDAO->deleteById( $idUsuario ) ) {
    header( "Location: ../view/listarUsuario.php" );
}
