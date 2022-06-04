<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php
require_once '../DTO/ClienteDTO.php';
require_once '../DAO/ClienteDAO.php';

$cpf = $_POST["cpf"];
$senha = md5( $_POST["senha"] );

$clienteDTO = new ClienteDTO();
$clienteDTO->setCpf( $cpf );
$clienteDTO->setSenha( $senha );

$clienteDAO = new ClienteDAO();

if ( $clienteDAO->updateSenha( $clienteDTO ) ) {
    ?>
    <div class="alert alert-success" role="alert">
   Senha alterada com sucesso, faça seu login para continuar!
   <?php header( 'Refresh: 4; URL=http://localhost/projetoceilandia/VIEW/login.php' );?>
   </div>
   <?php
       }?>
