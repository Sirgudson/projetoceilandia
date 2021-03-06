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
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/jquery.mask.min.js"></script>
    <script src="../js/jquery-validation-1.19.3/dist/jquery.validate.min.js"></script>
    <script src="../LIB/fontawesome-free-6.1.1-web/js/all.min.js"></script>
</head>

<body>
    <form id="formCadastrarAvaliacao" action="../controller/cadastrarAvaliacaoController.php" class="avaliacao" method="post">
        <h3 class="title_avaliacao">
            Avalie sua experiência em nosso site.
            <div class="list_avaliacao">
                <div class="rating__item">
                    <input class="avaliacao_input rating--1" id="rating-1-2" type="radio" value="1" name="avaliacao" />
                    <label class="avaliacao_label rating--1" for="rating-1-2">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </label>
                </div>
                <div class="rating__item">
                    <input class="avaliacao_input rating--2" id="rating-2-2" type="radio" value="2" name="avaliacao" />
                    <label class="avaliacao_label rating--2" for="rating-2-2">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </label>
                </div>
                <div class="rating__item">
                    <input class="avaliacao_input rating--3" id="rating-3-2" type="radio" value="3" name="avaliacao" />
                    <label class="avaliacao_label rating--3" for="rating-3-2">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </label>
                </div>
                <div class="rating__item">
                    <input class="avaliacao_input rating--4" id="rating-4-2" type="radio" value="4" name="avaliacao" />
                    <label class="avaliacao_label rating--4" for="rating-4-2">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </label>
                </div>
                <div class="rating__item">
                    <input class="avaliacao_input rating--5" id="rating-5-2" type="radio" value="5" name="avaliacao" />
                    <label class="avaliacao_label rating--5" for="rating-5-2">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </label>
                </div>


            </div>
        </h3>
        <div class="comentario">
            <textarea placeholder="Escreva sua avaliação aqui!" name="opiniao" id="opiniao"></textarea>
            <input type="text" name="nome" id="nome" placeholder="Nome">
            <input type="submit" value="Cadastrar">
        </div>
    </form>
    <div class="listar-avaliacao">
        <h3>Veja outra avaliações</h3>
        <?php
        require_once '../DAO/AvaliacaoDAO.php';
        include '../JS/funcao.php';
        $avaliacaoDAO = new AvaliacaoDAO();
        $avaliacoes = $avaliacaoDAO->findAll();

        foreach ($avaliacoes as $avaliacao) {
            echo "<div class='box-listar'";
            echo "<div class='nome-avaliacao'>
                    <span>{$avaliacao["NOME"]}</span>";
            echo "<p class='descricao_evento'>
                    {$avaliacao["OPINIAO"]}
                </p>";
            echo "<p class='descricao_evento'>
                Nota: {$avaliacao["AVALIACAO"]}
            </p>";
            echo "</div>";
        }
        ?>
        <?php
        if (isset($_GET["msg"])) {
            echo $_GET["msg"];
        }
        ?>
    </div>
    <script>
        const avaliacoesInput = document.querySelectorAll(".avaliacao_input");
        const avaliacoesLabel = document.querySelectorAll(".avaliacao_label");
        avaliacoesInput.forEach(teste);

        function teste(item) {
            item.addEventListener('click', function() {
                for (let i = 0; i < item.value; i++) {
                    avaliacoesLabel[i].children[1].style.display = 'var(--fa-display,inline-block)';
                    avaliacoesLabel[i].children[0].style.display = 'none';
                }
                for (let i = item.value; i < 5; i++) {
                    avaliacoesLabel[i].children[0].style.display = 'var(--fa-display,inline-block)';
                    avaliacoesLabel[i].children[1].style.display = 'none';
                }
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