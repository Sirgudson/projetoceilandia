<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/jquery.mask.min.js"></script>
    <script src="../js/jquery-validation-1.19.3/dist/jquery.validate.min.js"></script>
</head>

<body>
    <fieldset>
        <legend>Cadastrar Ponto Turístico </legend>
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
                    <td><input type="text" name="descricao" id="descricao"></td>
                </tr>
                <tr>
                    <td><label for="descricao">Foto do Evento:</label></td>
                    <td><input type="file" name="foto" id="foto"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Cadastrar">
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
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