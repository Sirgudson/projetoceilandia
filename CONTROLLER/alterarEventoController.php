<?php
require_once '../DTO/EventoDTO.php';
require_once '../DAO/EventoDAO.php';

$idEvento = $_POST["idEvento"];
$local = $_POST["local"];
$titulo =  $_POST["titulo"];
$descricao = $_POST["descricao"];
$inicio = $_POST["inicio"];
$encerramento = $_POST["encerramento"];
$capacidade = $_POST["capacidade"];

$eventoDTO = new EventoDTO();
$eventoDTO->setId( $idEvento );
$eventoDTO->setLocal( $local );
$eventoDTO->setTitulo( $titulo );
$eventoDTO->setDescricao( $descricao );
$eventoDTO->setInicio( $inicio );
$eventoDTO->setEncerramento( $encerramento );
$eventoDTO->setCapacidade( $capacidade );


$eventoDAO = new EventoDAO();

if ($eventoDAO->update($eventoDTO)) {
   header("Location: ../VIEW/listarEvento.php");
}
