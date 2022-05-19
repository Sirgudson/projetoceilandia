<?php
require_once '../DTO/EventoDTO.php';
require_once '../DAO/EventoDAO.php';
require_once '../util/Upload.php';

define( 'DIR_FOTO', $_SERVER['DOCUMENT_ROOT'] . "/PROJETOCEILANDIA/ASSETS/EVENTOS/foto/" );

$idEvento = $_POST["idEvento"];
$local = $_POST["local"];
$titulo =  $_POST["titulo"];
$descricao = $_POST["descricao"];
$inicio = $_POST["inicio"];
$encerramento = $_POST["encerramento"];
$capacidade = $_POST["capacidade"];
$foto = $_FILES["foto"];

$upload = new Upload( $foto );

$eventoDTO = new EventoDTO();
$eventoDTO->setId( $idEvento );
$eventoDTO->setLocal( $local );
$eventoDTO->setTitulo( $titulo );
$eventoDTO->setDescricao( $descricao );
$eventoDTO->setInicio( $inicio );
$eventoDTO->setEncerramento( $encerramento );
$eventoDTO->setCapacidade( $capacidade );
//$eventoDTO->setFoto( isset( $foto ) );

$eventoDAO = new EventoDAO();

if ($eventoDAO->update($eventoDTO)) {
   header("Location: ../VIEW/listarEvento.php");
}
