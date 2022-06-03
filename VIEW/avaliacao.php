<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação</title>
    <link rel="stylesheet" href="../LIB/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="shortcut icon" href="../ASSETS/ICO/logo1.ico" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/avaliacao.css">
    <script src="../LIB/fontawesome-free-6.1.1-web/js/all.min.js"></script>
</head>

<body>
    <!-- <fieldset>
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
    <div style="text-align: center;">-->
    <form action="../controller/cadastrarAvaliacaoController.php" class="avaliacao" id="formCadastrarAvaliacao" method="post">
        <h3 class="title_avaliacao">
            Avalie sua experiência em nosso site.
            <div class="list_avaliacao">
                <div class="rating__item">
                    <input class="avaliacao_input rating--1" id="rating-1-2" type="radio" value="1" name="avaliacao" />
                    <label class="avaliacao_label rating--1" for="rating-1-2"><i class="fa fa-regular fa-star"></i></label>
                </div>
                <div class="rating__item">
                    <input class="avaliacao_input rating--2" id="rating-2-2" type="radio" value="2" name="avaliacao" />
                    <label class="avaliacao_label rating--2" for="rating-2-2"><i class="fa-regular fa-star"></i></label>
                </div>
                <div class="rating__item">
                    <input class="avaliacao_input rating--3" id="rating-3-2" type="radio" value="3" name="avaliacao" />
                    <label class="avaliacao_label rating--3" for="rating-3-2"><i class="fa-regular fa-star"></i></label>
                </div>
                <div class="rating__item">
                    <input class="avaliacao_input rating--4" id="rating-4-2" type="radio" value="4" name="avaliacao" />
                    <label class="avaliacao_label rating--4" for="rating-4-2"><i class="fa-regular fa-star"></i></label>
                </div>
                <div class="rating__item">
                    <input class="avaliacao_input rating--5" id="rating-5-2" type="radio" value="5" name="avaliacao" />
                    <label class="avaliacao_label rating--5" for="rating-5-2"><i class="fa-regular fa-star"></i></i></label>
                </div>


            </div>
        </h3>
        <div class="comentario">
            <textarea placeholder="Escreva sua avaliação aqui!"></textarea>
            <input type="text" name="nome" id="nome" placeholder="Nome">
            <input type="submit" value="Cadastrar">
        </div>
    </form>
    <?php
    if (isset($_GET["msg"])) {
        echo $_GET["msg"];
    }
    ?>
    </div>
    <script>
        //querySelector('svg.fa-star') //trocar classe da star
        let avaliacoes = document.querySelectorAll(".avaliacao_input");
        avaliacoes.forEach(teste);

        function teste(item) {
            item.addEventListener('click', function() {
                for (let i = 0; i < item.value; i++) {
                    avaliacoes[i].nextElementSibling.classList.add('active');
                }
                for (let i = item.value; i < 5; i++) {
                    avaliacoes[i].nextElementSibling.classList.remove('active');
                }
                //item.nextElementSibling.classList.toggle('active');
                document.querySelector(".comentario").style.display = 'grid';

            });
        }
    </script>
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

<!-- ***** https://codepen.io/ryanparag/pen/dVpGXw ***** -->