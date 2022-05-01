<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>

    <form action="/action_page.php" method="post">
        <div class="loginImage">
            <img src="../ASSETS/SVG/logo1.svg" alt="logo">
        </div>

        <div class="container">
            <label for="uname"><b>Email</b></label>
            <input type="text" placeholder="Digite seu email" name="email" required>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <input type="submit" value="Enviar" id="enviar">
            <a href="../VIEW/login.php" class="cancelbtn">Cancelar</a>
        </div>
    </form>

</body>

</html>