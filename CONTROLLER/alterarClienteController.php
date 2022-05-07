<?php
require_once '../dto/ClienteDTO.php';
require_once '../dao/ClienteDAO.php';

$idCliente = $_POST["idCliente"];
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$dataNascimento = $_POST["dtnasc"];
$telefone = $_POST["tel"];

$clienteDTO = new ClienteDTO();
$clienteDTO->setId( $idCliente );
$clienteDTO->setNome( $nome );
$clienteDTO->setCpf( $cpf );
$clienteDTO->setDataNascimento( $dataNascimento );
$clienteDTO->setTelefone( $telefone );

$clienteDAO = new ClienteDAO();

if ( $clienteDAO->update( $clienteDTO ) ) {
    header( "Location: ../view/listarTodosClientes.php" );
}