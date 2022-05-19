<?php
require_once '../DTO/AvaliacaoDTO.php';
require_once '../DAO/AvaliacaoDAO.php';
include '../js/funcao.php';

$idAvaliacao = $_POST["idAvaliacao"];
$nome = $_POST["nome"];
$opiniao =  $_POST["opiniao"];
$avaliacao = $_POST["avaliacao"];

$avaliacaoDTO = new AvaliacaoDTO();
$avaliacaoDTO->setId( $idAvaliacao );
$avaliacaoDTO->setNome( $nome );
$avaliacaoDTO->setOpiniao( $opiniao );
$avaliacaoDTO->setAvaliacao( $avaliacao );



$avaliacaoDAO = new AvaliacaoDAO();

if ($avaliacaoDAO->update($avaliacaoDTO)) {
   header("Location: ../VIEW/listarAvaliacao.php");
}
