<?php
require_once('banco.php');
require_once('tabelas.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Barbearia Show!</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/" />

  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet" />

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
      background-color: rgba(0, 0, 0, 0.1);
      border: solid rgba(0, 0, 0, 0.15);
      border-width: 1px 0;
      box-shadow: inset 0 0.5em 1.5em rgba(0, 0, 0, 0.1),
        inset 0 0.125em 0.5em rgba(0, 0, 0, 0.15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -0.125em;
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

  <!-- Custom styles for this template -->
  <link href="signin.css" rel="stylesheet" />


</head>

<body style="background-color: #09181f">

  <header>
    <img class="mb-4 position-absolute top-0 start-50 translate-middle-x" src="logo.jpg" alt="" width="400" />
  </header>

  <main class="mx-auto" style="width: 30%">
    <?php

    if (isset($_POST['submit1'])) {
      $login = $_POST['login'];
      $senha = $_POST['senha'];

      if ($login == 'admin@123.com' && $senha == '123') {
        include 'home.php';
      } else {
        echo '<h2 class="text-light" style="display:flex;justify-content:center;align-items:center;">Login ou senha incorretos</h2>';
      }
    } else {
      include('login.php');
    }

    ?>
  </main>

</body>

</html>