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

            <label for="psw"><b>Senha</b></label>
            <input type="password" placeholder="Digite sua senha" name="psw" required>

            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Lembrar login
            </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <a href="../VIEW/index.php" class="cancelbtn">Cancelar</a>
            <span class="psw">Esqueceu a <a href="#">senha?</a></span>
        </div>
    </form>

</body>

</html>