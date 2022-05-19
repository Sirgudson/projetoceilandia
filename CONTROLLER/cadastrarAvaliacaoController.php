<?php
require_once '../DTO/AvaliacaoDTO.php';
require_once '../DAO/AvaliacaoDAO.php';
include '../js/funcao.php';

$nome = $_POST["nome"];
$opiniao = $_POST["opiniao"];
$avaliacao = $_POST["avaliacao"];


$avaliacaoDTO = new AvaliacaoDTO();
$avaliacaoDTO->setNome( $nome );
$avaliacaoDTO->setOpiniao( $opiniao );
$avaliacaoDTO->setAvaliacao( $avaliacao );


$avaliacaoDAO = new AvaliacaoDAO();


$error[1] = "Cadastrado com sucesso!";
$error[2] = "Já existe essa avaliacao cadastrada ";

if ( empty( $avaliacao ) ) {
    if ( $avaliacaoDAO->salvar( $avaliacaoDTO ) ) {
        header( "Location: ../view/login.php?msg={$error[1]}" );
    }
} else {
    header( "Location: ../view/login.php?msg={$error[2]}" );
}
