<?php
require_once '../dto/ClienteDTO.php';
require_once '../dao/ClienteDAO.php';
include '../js/funcao.php';

$nome = $_POST["nome"];
$cpf = removerFormatoCpfCnpj( $_POST["cpf"] );
$email = $_POST["email"];
$senha = $_POST["senha"];

$clienteDTO = new ClienteDTO();
$clienteDTO->setNome($nome);
$clienteDTO->setCpf($cpf);
$clienteDTO->setEmail($email);
$clienteDTO->setSenha($senha);


$clienteDAO = new ClienteDAO();

if ($clienteDAO->update($clienteDTO)) {
    header("Location: ../view/listarUsuario.php");
}
