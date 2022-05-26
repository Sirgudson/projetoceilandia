<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../CSS/style-login.css">
    <link rel="shortcut icon" href="../ASSETS/ICO/logo1.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/jquery.mask.min.js"></script>
    <script src="../js/jquery-validation-1.19.3/dist/jquery.validate.min.js"></script>
    <title>Projeto Ceilândia</title>
</head>
<body>
    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">bem-vindo novamente!</h2>
                <p class="description description-primary">Para se conectar faça seu login</p>
                <p class="description description-primary">e continue sua experiência em nosso site</p>
                <button id="signin" class="btn btn-primary">entrar</button>
            </div> 
               
            <div class="second-column">
                <h2 class="title title-second">crie sua conta</h2>
                <form id="formCadastrarUsuario" action="../controller/cadastrarUsuarioController.php" class="form" method="post">
                    <label class="label-input" for="">
                        <i class="far fa-user icon-modify"></i>
                        <input type="text" name="nome" placeholder="Nome">
                    </label>

                    <label class="label-input" for="">
                        <i class="far fa-user icon-modify"></i>
                        <input type="text" name="cpf" id="cpf" placeholder="CPF">
                    </label>
            
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" name="email" id="email" placeholder="E-mail">
                    </label>
                    
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="senha" id="senha" placeholder="Senha">
                    </label>
                    <input type="hidden" name="ativo" id="ativo" value="1">
                    
                    <button class="btn btn-second" type="submit">criar</button>        
                </form>
            </div>
        </div>

        <div class="content second-content">
            <div class="first-column">
                <h2 class="title title-primary">olá, visitante!</h2>
                <p class="description description-primary">cadastre-se e</p>
                <p class="description description-primary">venha agendar seu passeio</p>
                <button id="signup" class="btn btn-primary">criar</button>
            </div>
            <div class="second-column">
                <h2 class="title title-second">faça seu login</h2>

                <form class="form" action="../CONTROLLER/usuarioController.php" method="post">
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" name="email" placeholder="E-mail" required>
                    </label>
                
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="senha" placeholder="Senha" required>
                    </label>
                
                    <a class="password" href="../VIEW/resetpassword.php">esqueceu sua senha?</a>
                    <button class="btn btn-second" type="submit">entrar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="../JS/function2.js"></script>
    <div style="text-align: center;">
<?php
    if ( isset( $_GET["msg"] ) ) {
        echo $_GET["msg"];
    }
?>
    </div>
    <script>
        $(document).ready(function(){
            $('#cpf').mask('000.000.000-00');
        });
    </script>
    <script>
        $( "#formCadastrarUsuario" ).validate({
            rules: {
                nome: {
                    required: true,
                },
                cpf: {
                    required: true,
                    minlength: 11
                }
            },
            messages: {
                cpf: {
                    required: "Campo obrigatório",
                    minlength: jQuery.validator.format("Pelo menos {0} dígitos são necessários!"),
                },
                nome: {
                    required: "Campo obrigatório",
                }

            }
        });
    </script>
</body>
</html>