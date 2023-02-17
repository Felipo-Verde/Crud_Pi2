<?php
require_once "banco.php";
require_once "tabelas.php";

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.108.0">
  <title>Album example · Bootstrap v5.3</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">





  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }
  </style>


</head>

<body style="background-color: #09181f">

  <main>

    <section class="py-5 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <img class="mb-4 position-absolute top-0 start-50 translate-middle-x" src="logo.jpg" alt="" width="400" />
        </div>
      </div>
    </section>

    <div class="album py-5">
      <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

          <?php
          $usuarios = select_usuario();
          foreach ($usuarios as $usuario) {
            echo "<div class='col'>";
            echo "<div class='card shadow-sm'>";
            echo "<div class='card-body'>";
            echo "<h4 class='card-text'>O nome no agendamento é: <strong>{$usuario['nome']}</strong></h4>";
            echo "<h5 class='card-text'>O E-mail no agendamento é: <strong>{$usuario['email']}</strong></h5>";
            echo "<h5 class='card-text'>O telefone no agendamento é: <strong>{$usuario['telefone']}</strong></h5>";
            echo "<h5 class='card-text'>A data no agendamento é: <strong>{$usuario['data']}</strong></h5>";
            echo "<h5 class='card-text'>O serviço escolhido é: <strong>{$usuario['tipo']}</strong></h5>";
            echo "<h5 class='card-text'>O barbeiro escolhido é o(a): <strong>{$usuario['nome_barbeiro']}</strong></h5>";
            if ($usuario['notificacao'] == 1) {
              echo "<h5 class='card-text'>Você <strong>deseja</strong> receber notificações em seu e-mail</h5>";
            } else {
              echo "<h5 class='card-text'>Você <strong>não</strong> deseja receber notificações em seu e-mail</h5>";
            }
            echo "<h5 class='card-text'>Você gostaria do seu corte:</h5>";
            echo "<p class='card-text'>{$usuario['corte']}</p>";
            echo "<div class='d-flex justify-content-between align-items-center'>";
            echo "<div class='btn-group'>";
            echo "<form action='index.php' method='post'>";
            echo '<button type="submit" class="btn btn-sm btn-outline-secondary"> Deletar </button>';
            echo "</form>";
            echo '<button type="submit" class="btn btn-sm btn-outline-secondary"> Edit </button>';
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            
          }

          ?>
        </div>
      </div>
    </div>

  </main>


  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>