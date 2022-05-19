<?php
require_once '../DAO/UsuarioDAO.php';
session_start();

$email = $_POST["email"];
$senha = $_POST["senha"];

$UsuarioDAO = new UsuarioDAO();
$usuario = $UsuarioDAO->findByEmailSenha( $email, $senha );

if ( !empty( $usuario ) ) {
    $_SESSION["usuario"] = $usuario["email"];
    header( "Location: ../VIEW/passeio.php" );
} else {
    $msg = "senha e/ou usuario incorreto!";
    header( "Location: ../login.php?msg={$msg}" );
}