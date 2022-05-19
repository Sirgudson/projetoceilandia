<?php
require_once '../DTO/EventoDTO.php';
require_once '../DAO/EventoDAO.php';
require_once '../util/Upload.php';

define( 'DIR_FOTO', $_SERVER['DOCUMENT_ROOT'] . "/PROJETOCEILANDIA/ASSETS/EVENTOS/foto/" );

$local = $_POST["local"];
$titulo = $_POST["titulo"];
$descricao = $_POST["descricao"];
$inicio = $_POST["inicio"];
$encerramento = $_POST["encerramento"];
$capacidade = $_POST["capacidade"];
$foto = $_FILES["foto"];

$upload = new Upload( $foto );

$eventoDTO = new EventoDTO();
$eventoDTO->setLocal( $local );
$eventoDTO->setTitulo( $titulo );
$eventoDTO->setDescricao( $descricao );
$eventoDTO->setInicio( $inicio );
$eventoDTO->setEncerramento( $encerramento );
$eventoDTO->setCapacidade( $capacidade );
$eventoDTO->setFoto( isset( $foto ) && $foto["error"] == 0 ? $upload->getNome( $foto ) : null );


$eventoDAO = new EventoDAO();


$error[1] = "Cadastrado com sucesso!";
$error[2] = "Erro ao cadastrar evento, revise os dados! ";

if ( empty( $evento ) ) {
    if ( $eventoDAO->salvar( $eventoDTO ) ) {
        $upload->salvar( $foto, DIR_FOTO );
        header( "Location: ../view/login.php?msg={$error[1]}" );
    }
} else {
    header( "Location: ../view/login.php?msg={$error[2]}" );
}
