<!doctype html>
<html class="no-js" lang="es">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset="UTF-8" />
  <title>GDL WebCamp</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/colorbox.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />

  <meta name="theme-color" content="#fafafa">
</head>

<?php

$archivo = basename($_SERVER['PHP_SELF']);
$pagina = str_replace(".php", "", $archivo);

?>

<body class="<?=$pagina; ?>">
  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- HEADER -->
  <header class="site-header">
    <div class="hero">
      <div class="header-content">

        <!-- REDES SOCIALES -->
        <nav class="social-network">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-pinterest"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </nav>

        <!-- INFORMACION DEL EVENTO -->
        <div class="event-information">
          <p class="date"> <i class="fas fa-calendar-alt"></i> 10-12 Dic</p>
          <p class="city"> <i class="fas fa-map-marker-alt"></i> Huancayo, Peru</p>
        </div>

        <h1 class="website-name">GdlWebCamp</h1>
        <p class="slogan">La mejor conferencia de <span>diseño web</span></p>

      </div>
    </div>
  </header>

  <div class="bar">
    <div class="container">
      <a href="index.php" class="logo">
        <img src="img/logo.svg" alt="logo gdlwebcamp">
      </a>

      <div class="burger">
        <i class="fas fa-bars"></i>
      </div>

      <nav class="principal-menu desktop">
        <a href="conferencia.php">Conferencia</a>
        <a href="calendario.php">Calendario</a>
        <a href="invitados.php">Invitados</a>
        <a href="registro.php">Reservaciones</a>
      </nav>
    </div>

    <nav class="principal-menu responsive-menu">
      <a href="conferencia.php">Conferencia</a>
      <a href="calendario.php">Calendario</a>
      <a href="invitados.php">Invitados</a>
      <a href="registro.php">Reservaciones</a>
    </nav>
  </div>
