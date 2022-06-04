<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php
    require_once '../DAO/UsuarioDAO.php';
    session_start();

    $email = $_POST["email"];
    $cpf = $_POST["cpf"];

    $UsuarioDAO = new UsuarioDAO();
    $usuario    = $UsuarioDAO->findByEmailCpf( $email, $cpf );

    if ( !empty( $usuario ) ) {
        $_SESSION["id"] = $usuario["id"];

        if ( $usuario['email'] == true  &&  $usuario['cpf'] == true ){
            header( "Location: ../VIEW/novaSenha.php?cpf={$_POST["cpf"]}" );
        } 

    } else {
    ?>
    <div class="alert alert-danger" role="alert">
        <p>CPF e/ou Email errado!</p>

        Vamos tentar novamente? Redirecionando..
        <?php header( 'Refresh: 4; URL=http://localhost/projetoceilandia/VIEW/login.php' );?>
  </div>
  <?php
  }