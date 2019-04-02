<?php
  session_start();
  
  $time = $_SERVER['REQUEST_TIME'];
  $timeout = 1200;

  if(isset($_SESSION['LAST_ACTIVITY']) && ($time - $_SESSION['LAST_ACTIVITY']) > $timeout){
    session_destroy();
    unset($_SESSION['username']);
    header("location: ./login.php");
  }

  $_SESSION['LAST_ACTIVITY'] = $time;

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: ./login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: ./login.php");
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/icono.ico">

    <title>MWD Holding Group</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/carousel.css" rel="stylesheet">
    
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  </head>
  <!--<script type="text/javascript">
    function TimeSession(){
      setTimeout("SessionDestroy()", 100000);
    }
    function SessionDestroy(){
      location.href = "login.php";
    }
  </script>-->
  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark fondo_header">
        <a class="navbar-brand head trans" href="index.php"><img src="assets/img/logo_separdor.png" ></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto trans">
            <li class="nav-item li-header text-center">
              <a class="nav-link letter-menu" href="banca.php">BANCA</a>
            </li>
            <li class="nav-item li-header text-center">
              <a class="nav-link letter-menu" href="hoteles.php">HOTELERÍA</a>
            </li>
            <li class="nav-item li-header text-center">
              <a class="nav-link letter-menu" href="restaurantes.php">RESTAURANTES</a>
            </li>
            <li class="nav-item li-header text-center">
              <a class="nav-link letter-menu" href="laboratorios.php">LABORATORIOS</a>
            </li>
            <li class="nav-item li-header text-center">
              <a class="nav-link letter-menu" href="joyeria.php">LUXURY</a>
            </li>
          </ul>
          <!-- logged in user information -->
          <?php  if (isset($_SESSION['username'])) : ?>
            <div class="text-center">
              <a href="index.php?logout=1" class="letter-menu" data-toggle="tooltip" data-placement="bottom" title="Salir">
                <i class="fas fa-sign-out-alt fa-2x"></i>
              </a>
            </div>
          <?php endif ?>
        </div>
      </nav>
    </header>