<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php
require_once '../dto/ClienteDTO.php';
require_once '../dao/ClienteDAO.php';
include '../js/funcao.php';

$nome = $_POST["nome"];
$cpf = removerFormatoCpfCnpj( $_POST["cpf"] );
$email = $_POST["email"];
$senha = md5($_POST["senha"]);
$situacao = $_POST["ativo"];

$clienteDTO = new ClienteDTO();
$clienteDTO->setNome( $nome );
$clienteDTO->setCpf( $cpf );
$clienteDTO->setEmail( $email );
$clienteDTO->setSenha( $senha );
$clienteDTO->setSituacao( $situacao );


$clienteDAO = new ClienteDAO();
$usuario = $clienteDAO->findByCpf( $cpf );


$error[2] = "Já existe um cliente cadastro com o cpf " . formatarCpfCnpj( $cpf );

if ( empty( $usuario ) ) {
    if ( $clienteDAO->salvar( $clienteDTO ) ) {
 ?>
     <div class="alert alert-success" role="alert">
    Cadastro criado com sucesso, faça seu login para continuar!
    <?php header('Refresh: 4; URL=http://localhost/projetoceilandia/VIEW/login.php'); ?>
    </div>
    <?php
    }
} else {
    header( "Location: ../view/login.php?msg={$error[2]}" );
}
