<?php
require_once '../DTO/EventoDTO.php';
require_once '../DAO/EventoDAO.php';

$local = $_POST["local"];
$titulo = $_POST["titulo"];
$descricao = $_POST["descricao"];
$inicio = $_POST["inicio"];
$encerramento = $_POST["encerramento"];
$capacidade = $_POST["capacidade"];

$eventoDTO = new EventoDTO();
$eventoDTO->setLocal( $local );
$eventoDTO->setTitulo( $titulo );
$eventoDTO->setDescricao( $descricao );
$eventoDTO->setInicio( $inicio );
$eventoDTO->setEncerramento( $encerramento );
$eventoDTO->setCapacidade( $capacidade );


$eventoDAO = new EventoDAO();


$error[1] = "Cadastrado com sucesso!";
$error[2] = "Erro ao cadastrar evento, revise os dados! ";

if ( empty( $evento ) ) {
    if ( $eventoDAO->salvar( $eventoDTO ) ) {
        header( "Location: ../view/login.php?msg={$error[1]}" );
    }
} else {
    header( "Location: ../view/login.php?msg={$error[2]}" );
}
