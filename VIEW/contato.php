<!DOCTYPE html>
<html lang="PT_br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/avaliacao.css">
    <link rel="shortcut icon" href="../ASSETS/ICO/logo1.ico" type="image/x-icon">
    <link rel="stylesheet" href="../LIB/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <title>Projeto Ceilândia</title>
</head>

<body>
    <!-- HEADER -->
    <?php include('header.php') ?>

    <div class="apresentacao">
        <h1 class="titulo">Contato</h1>
        <img src="../ASSETS/IMAGES/onda1.png" alt="onda1">
    </div>
    <div class="container-contato">
        <div class="contato">
            <h4>Converse com a gente</h4>
            <img src="../ASSETS/IMAGES/separador-laranja.png" alt="separador laranja" class="separador-contato">
        </div>
        <div class="contato2">
            <form class="form-contato" action="">
                <input type="text" name="nome" placeholder="  Seu nome">

                <input type="text" name="email" placeholder="  Seu e-mail">

                <textarea name="mensagem" placeholder=" Sua mensagem..."></textarea>

                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>


    <!-- FOOTER -->
    <?php include('footer.php') ?>
</body>

</html>