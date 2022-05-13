<?php
require_once '../DTO/PontoDTO.php';
require_once '../DAO/PontoDAO.php';
include '../js/funcao.php';

$local = $_POST["local"];
$titulo = $_POST["titulo"];
$descricao = $_POST["descricao"];

$pontoDTO = new PontoDTO();
$pontoDTO->setLocal( $local );
$pontoDTO->setTitulo( $titulo );
$pontoDTO->setDescricao( $descricao );


$pontoDAO = new PontoDAO();


$error[1] = "Cadastrado com sucesso!";
$error[2] = "Erro ao cadastrar Ponto Turístico, revise os dados! ";

if ( empty( $ponto ) ) {
    if ( $pontoDAO->salvar( $pontoDTO ) ) {
        header( "Location: ../view/login.php?msg={$error[1]}" );
    }
} else {
    header( "Location: ../view/login.php?msg={$error[2]}" );
}
