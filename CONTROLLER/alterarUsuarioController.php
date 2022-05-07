<?php
require_once '../dto/ClienteDTO.php';
require_once '../dao/ClienteDAO.php';

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$email = $_POST["email"];
$senha = $_POST["senha"];


$clienteDTO = new ClienteDTO();
$clienteDTO->setNome($nome);
$clienteDTO->setCpf($cpf);
$clienteDAO->setEmail($email);
$clienteDAO->setSenha($senha);


$clienteDAO = new ClienteDAO();

if ($clienteDAO->update($clienteDTO)) {
    header("Location: ../view/listarUsuario.php");
}
