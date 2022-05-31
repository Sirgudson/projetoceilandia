<?php
// Inicializa a sessão
session_start();

// Desmarcando todas as variáveis de sessão
$_SESSION = array();

// Destruindo a sessão.
session_destroy();

// Redirecionando para a página de login
header( "location: login.php" );
exit;
?>