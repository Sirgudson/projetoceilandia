<?php
require_once '../dto/ClienteDTO.php';
require_once '../dao/ClienteDAO.php';
include '../js/funcao.php';

$nome = $_POST["nome"];
$cpf = removerFormatoCpfCnpj( $_POST["cpf"] );
$email = $_POST["email"];
$senha = $_POST["senha"];

$clienteDTO = new ClienteDTO();
$clienteDTO->setNome( $nome );
$clienteDTO->setCpf( $cpf );
$clienteDTO->setEmail( $email );
$clienteDTO->setSenha( $senha );


$clienteDAO = new ClienteDAO();
$usuario = $clienteDAO->findByCpf( $cpf );

$error[1] = "Cadastrado com sucesso!";
$error[2] = "Já existe um cliente cadastro com o cpf " . formatarCpfCnpj( $cpf );

if ( empty( $usuario ) ) {
    if ( $clienteDAO->salvar( $clienteDTO ) ) {
        header( "Location: ../view/login.php?msg={$error[1]}" );
    }
} else {
    header( "Location: ../view/login.php?msg={$error[2]}" );
}
