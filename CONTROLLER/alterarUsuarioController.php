<?php
require_once '../DTO/ClienteDTO.php';
require_once '../DAO/ClienteDAO.php';

$idUsuario = $_POST["idUsuario"];
$nome = $_POST["nome"];
$cpf =  $_POST["cpf"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$clienteDTO = new ClienteDTO();
$clienteDTO->setId( $idUsuario );
$clienteDTO->setNome( $nome );
$clienteDTO->setCpf( $cpf );
$clienteDTO->setEmail( $email );
$clienteDTO->setSenha( $senha );


$clienteDAO = new ClienteDAO();

if ($clienteDAO->update($clienteDTO)) {
   header("Location: ../VIEW/listarUsuario.php");
}
