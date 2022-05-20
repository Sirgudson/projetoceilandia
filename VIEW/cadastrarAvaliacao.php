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
        <legend>Cadastrar Avaliação </legend>
        <form id="formCadastrarAvaliacao" action="../controller/cadastrarAvaliacaoController.php" method="post">
            <table>
                <tr>
                    <td><label for="nome">Seu Nome:</label></td>
                    <td><input type="text" name="nome" id="nome"></td>
                </tr>
                <tr>
                    <td><label for="opiniao">Descreva sua Opinião:</label></td>
                    <td><input type="text" name="opiniao" id="opiniao"></td>
                </tr>
                <tr>
                    <td><label for="descricao">Sua Avaliação:</label></td>
                    <td><input type="radio" id="1" name="avaliacao" value="1">
                    <label for="avaliacao">1</label></td>
                    <td><input type="radio" id="2" name="avaliacao" value="2">
                    <label for="avaliacao">2</label></td>
                    <td><input type="radio" id="3" name="avaliacao" value="3">
                    <label for="avaliacao">3</label></td>
                    <td><input type="radio" id="4" name="avaliacao" value="4">
                    <label for="avaliacao">4</label></td>
                    <td><input type="radio" id="5" name="avaliacao" value="5">
                    <label for="avaliacao">5</label></td>
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
        $("#formCadastrarAvaliacao").validate({
            rules: {
                nome: {
                    required: true,
                }
            },
            messages: {

                nome: {
                    required: "Campo obrigatório!",
                }

            }
        });
    </script>
</body>

</html>