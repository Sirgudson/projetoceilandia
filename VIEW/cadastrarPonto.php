<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Ponto Turístico</title>
    <link rel="stylesheet" href="../LIB/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="shortcut icon" href="../ASSETS/ICO/logo1.ico" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/internas-cadastros.css">
    <script src="../LIB/fontawesome-free-6.1.1-web/js/all.min.js"></script>
</head>

<body>
<div class="container-cadastro">
        <div class="cadastro-form">
            <img class="img-cadastro" src="../ASSETS/IMAGES/caixadagua-depois.webp" alt="">
        <form id="formCadastrarPonto" action="../controller/cadastrarPontoController.php" enctype="multipart/form-data" method="post">
            <table>
                <tr>
                    <td><label for="local">Local do Ponto Turístico:</label></td>
                    <td><input type="text" name="local"></td>
                </tr>
                <tr>
                    <td><label for="titulo">Título do Ponto Turístico:</label></td>
                    <td><input type="text" name="titulo" id="titulo" ></td>
                </tr>
                <tr>
                    <td><label for="descricao">Descrição do Ponto Turístico:</label></td>
                    <td><textarea type="text" name="descricao" id="descricao" cols="30" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td><label for="descricao">Foto do Evento:</label></td>
                    <td><input type="file" name="foto" id="foto"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit" value="Cadastrar">Cadastrar</button>
                    </td>
                </tr>
            </table>
        </form>
        </div>
</div>
    <div style="text-align: center;">
        <?php
if ( isset( $_GET["msg"] ) ) {
    echo $_GET["msg"];
}
?>
    </div>
    <script>
        $( "#formCadastrarPonto" ).validate({
            rules: {
                local: {
                    required: true,
                },
                titulo: {
                    required: true,
                }
            },
            messages: {

                local: {
                    required: "Campo obrigatório!",
                },
                titulo:{
                    required: "Título do Ponto turístico obrigatório!",
                }

            }
        });
    </script>
</body>

</html> 