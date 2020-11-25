<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="shortcut icon" type="image/png" href="favicon1.png"/>
  <!-- Place favicon.ico in the root directory -->
  <meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache">
  
 <!-- Global site tag (gtag.js) - Google Analytics -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-153405260-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-153405260-1');
</script> -->



  <?php
  header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
  header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado
  ?>

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" />

  <?php 
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php", "", $archivo);
    if($pagina == 'invitados' || $pagina=='index'){
      echo '<link rel="stylesheet" href="css/colorbox.css">';
    }elseif($pagina == 'conferencia'){
      echo '<link rel="stylesheet" href="css/lightbox.css">';
    }
  ?>

  
  

  <link rel="stylesheet" href="css/main.css?v=<?php echo time(); ?>">
  
  <meta name="theme-color" content="#fafafa">
</head>


<body class="<?php echo $pagina;?>">
  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
  
  <header class="site-header">
    
  </header>
  
  <div class="hero">
      <div class="contenido-header">
         <nav class="redes-sociales">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </nav>
        <div class="informacion-evento">
          <div class="clearfix">
            <p class="fecha"><i class="fas fa-calendar-alt"></i>&nbsp;Inicio 8 de Enero del 2021</p>
            <p class="ciudad"><i class="fas fa-map-marked-alt"></i>&nbsp;Uruapan, MX.</p>
          </div>
          <h1 class="nombre-sitio">Sociedad Intelectual del Aguacate</h1>
          <h1 class="nombre-sitio">SIAM A.C</h1>
        </div> 
        
       
      </div>
    </div><!--.hero-->
  
  <div class="barra">
    <div class="contenedor clearfix">
      <div class="logo">
        <a href="index.php"><img src="img/siam/lo.png" alt="Logo Congreso 2020"></a>
      </div>
      <div class="menu-movil">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <nav class="navegacion-principal clearfix">
        <a href="conferencia.php">Conferencias</a>
        <a href="calendario.php">Calendario</a>
        <a href="invitados.php">Invitados</a>
        
        <a href="#">Reservaciones</a>
        <a href="#">Iniciar Sesión</a>
        <!-- <a href="registro.php#registro">Reservaciones</a> -->
      </nav>
      
    </div>
    
  </div><!--.Barra-->