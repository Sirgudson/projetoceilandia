<?php
require_once '../DTO/PontoDTO.php';
require_once '../DAO/PontoDAO.php';

$idPonto = $_POST["idPonto"];
$local = $_POST["local"];
$titulo =  $_POST["titulo"];
$descricao = $_POST["descricao"];

$pontoDTO = new PontoDTO();
$pontoDTO->setId( $idPonto );
$pontoDTO->setLocal( $local );
$pontoDTO->setTitulo( $titulo );
$pontoDTO->setDescricao( $descricao );



$pontoDAO = new PontoDAO();

if ($pontoDAO->update($pontoDTO)) {
   header("Location: ../VIEW/pontoturistico.php");
}
