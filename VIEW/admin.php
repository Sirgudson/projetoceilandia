<!DOCTYPE html>
<?php
require_once '../DAO/UsuarioDAO.php';
session_start();
$_SESSION['TIPO']="1"
?>
<html lang="PT_br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/style-admin.css">
  <link rel="shortcut icon" href="../ASSETS/ICO/logo1.ico" type="image/x-icon">
  <link rel="stylesheet" href="../LIB/bootstrap/css/bootstrap.min.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <title>Projeto Ceilândia</title>
</head>

<body>
  <div class="sidebar close">
    <div class="logo-details">
      <img src="../ASSETS/ICO/logo-branca.ico" alt="">
      <span class="logo_name">Projeto Ceilândia</span>
    </div>

    <ul class="nav-links">
      <li>
        <a href="../VIEW/admin.php">
          <i class="fa fa-regular fa-toolbox"></i>
          <span class="link_name">Menu Admin</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="../VIEW/admin.php">Menu Admin</a></li>
        </ul>
      </li>

      <li>
        <div class="iocn-link">
          <a href="#">
            <i class="fa fa-regular fa-users"></i>
            <span class="link_name">Usuários</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>

        <ul class="sub-menu">
          <li><a class="link_name" href="#">Usuários</a></li>
          <a href="#"></a>
          <li><a href="#" onclick="carregarIframe('listarUsuario.php')">Todos</a></li>
          <li><a href="#" onclick="carregarIframe('listarUsuariosInativos.php')">Inativos</a></li>
        </ul>
      </li>

      <li>
        <div class="iocn-link">
          <a href="#">
            <i class="fa fa-regular fa-paragraph"></i>
            <span class="link_name">Pontos Turísticos</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>

        <ul class="sub-menu">
          <li><a class="link_name" href="#">Pontos Turísticos</a></li>
          <li><a href="#" onclick="carregarIframe('listarPonto.php')">Todos</a></li>
          <li><a href="#" onclick="carregarIframe('cadastrarPonto.php')">Cadastrar</a></li>
        </ul>
      </li>

      <li>
        <div class="iocn-link">
          <a href="#">
            <i class="fa fa-regular fa-business-time"></i>
            <span class="link_name">Passeios</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>

        <ul class="sub-menu">
          <li><a class="link_name" href="#">Passeios</a></li>
          <li><a href="#" onclick="carregarIframe('listarEvento.php')">Todos</a></li>
          <li><a href="#" onclick="carregarIframe('cadastrarEvento.php')">Cadastrar</a></li>
        </ul>
      </li>

      <li>
        <a href="#" onclick="carregarIframe('listarAvaliacao.php')">
          <i class="fa fa-regular fa-star"></i>
          <span class="link_name">Avaliações</span>
        </a>

        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Avaliações</a></li>
        </ul>
      </li>

      <li>
        <div class="profile-details">
          <div class="profile-content">
            <!--<img src="../ASSETS/IMAGES/equipe.jpeg">-->
          </div>
          <div class="name-job">
            <div class="profile_name">Sair?</div>
            <div class="job">Projeto Ceilândia</div>
          </div>
          <a href="../VIEW/logout.php"><i class='bx bx-log-out' id="log-aut" onclick="log_out()"></i></a>
        </div>
      </li>
    </ul>
  </div>

  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu'></i>
      <span class="text">Turismo Candango: PROJETO CEILÂNDIA</span>
    </div>
    <iframe src="" frameborder="0"  id="iframe"></iframe>
  </section>

  <script>
    let arrow = document.querySelectorAll(".arrow");
    const iframe = document.querySelector("#iframe");
    for (var i = 0; i < arrow.length; i++) {
      arrow[i].addEventListener("click", (e) => {
        let arrowParent = e.target.parentElement.parentElement;
        arrowParent.classList.toggle("showMenu");
      });
    }
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".bx-menu");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", () => {
      sidebar.classList.toggle("close");
      iframe.classList.toggle("active");

    });

    function log_out() {
      return confirm("Tem certeza que desejar sair?");
    }

    function carregarIframe(src) {
      iframe.src = src;
    }
  </script>
</body>

</html>

<!--   <main class="main">
    <aside class="sidebar">
      <nav class="nav">
        <ul>
          <li class="active"><a href="#">Listar Usuários</a></li>
          <li><a href="#">Alterar Usuários</a></li>
          <li><a href="#">Listar Pontos Turísticos</a></li>
          <li><a href="#">Alterar Pontos Turísticos</a></li>
          <li><a href="#"> Eventos</a></li>
        </ul>
      </nav>
    </aside>

    <section class="twitter">
      <div class="container">
        <!--<a target="_blank" href="https://twitter.com/ReisnerShawn">
          <img class="social" src="https://cdn1.iconfinder.com/data/icons/logotypes/32/twitter-128.png">
        </a>
        <p>Follow me</p>
        <p>on Twitter!</p>-->
<!-- </div>
    </section>
  </main>