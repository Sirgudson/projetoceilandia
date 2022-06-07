<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php
    require_once '../DAO/UsuarioDAO.php';
    session_start();

    $email = $_POST["email"];
    $senha = md5( $_POST["senha"] );

    $UsuarioDAO = new UsuarioDAO();
    $usuario    = $UsuarioDAO->findByEmailSenha( $email, $senha );

    if ( !empty( $usuario ) ) {
            $_SESSION["id"] = $usuario["id"];
            if ($usuario['ativo'] == '1'){
                if ( $usuario['tipo'] == '1' ) {
                        header( "Location: ../VIEW/admin.php" );
                    } else if ( $usuario['tipo'] == '2' ) {
                        header( "Location: ../VIEW/passeio.php" );
                    }
                
                else {
                ?>
                <div class="alert alert-danger" role="alert">
                    <p>Senha e/ou Email errado!</p>

                    Vamos tentar novamente? Redirecionando..
                    <?php header( 'Refresh: 4; URL=http://localhost/projetoceilandia/VIEW/login.php' );?>
                </div>
                <?php
    }}
            elseif ($usuario['ativo'] == '0') {
            ?>
                <div class="alert alert-warning" role="alert">
                    <p>Seu cadastro está Desativado!</p>

                    Gostaria de criar um novo? Redirecionando..
                    <?php header( 'Refresh: 4; URL=http://localhost/projetoceilandia/VIEW/login.php' );?>
                </div>
            <?php

            } 
    }?>