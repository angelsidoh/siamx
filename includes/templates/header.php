<?php
  session_start();
?>
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
  <meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache">
  
 <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-KGRX4HBN4Q"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-KGRX4HBN4Q');
</script>



  <?php
  header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
  header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado
  ?>

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans&display=swap" rel="stylesheet">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" />
  <?php 
  ?>
  <link rel="stylesheet" href="css/main.css?v=<?php echo time(); ?>">
  
  <meta name="theme-color" content="#fafafa">
</head>


<body class="cuerpo">
  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
  
  
  
  <div id="hero" class="hero">
      <div class="contenido-header">
         <nav class="redes-sociales">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </nav>
        <div class="informacion-evento">
          <div class="clearfix">
        <p class="fecha">  &nbsp;<i class="fas fa-calendar-alt"></i>&nbsp;Inicio 8 de Enero del 2021</p>
            <a href="index.php#irmapa"><p class="ciudad"><i class="fas fa-map-marked-alt"></i>&nbsp;Uruapan, MX.&nbsp;</p></a>
          </div>
          <div class="evento-sitio">
            <?php include_once 'evento.php' ?>
          </div>
          <div class="sitio">
            <h1 class="nombre-sitio">Sociedad Intelectual del Aguacate Mexicano</h1>
            <h1 class="nombre-sitio">SIAM A.C.</h1>
          </div>
        </div> 
      </div>
    </div><!--.hero-->
  
  <div class="barra">
    <div class="elementos__barra">
      <div id= "logo_barra" class="logo_barra">

      </div>
      
        <div class = "menu-hambur">
          <input type = "checkbox" id = "check" name = "menu">
            <label for = "check" >
              <i class = "fas fa-bars" id = "btn"><span style="font-size: 30px;">Menú</span> </i>
              <i class = "fas fa-window-close" id = "clc" style = "display:none"></i>
            </label>
        </div>
        <div class="hotcalluser">
          <p>
          <?php 
          
          if(isset($_SESSION['usuario'])){
            echo $_SESSION['usuario'];
          }
          ?>
          </p>
        </div>
        <div class="hotcall">
        <?php if(isset($_SESSION['usuario'])){
             
              ?> <a href="logout.php">Cerrar Sesión</a><?php
            }else{
              ?> <a href="login.php#ini">Iniciar Sesión</a><?php

            }?>
        </div>
    </div>  
     
  </div><!--.Barra-->
  
  <div class="contenedor_menu " id = "global" style = "display: none;">
    <div class="infosiam">
      <h1>Información</h1>
      <p><a href="#"> Sobre SIAM A.C.</a></p>
      <p><a href="#">Privacidad</a></p>
      <p><a href="#">Modo de pago</a></p>
      <p><a href="#">Preguntas Frecuentes</a></p>
    </div>
    <div class="mision">
      <h1>Misión</h1>
      <p>Promover la realización de Congresos Mexicano del Aguacate cada dos años, Cursos y Diplomados afines con el frutal aguacate. Crear un sitio web y banco de información de investigaciones del aguacate en México y el Mundo, para su consulta.</p>
    </div>
    <div class="vision">
      <h1>Visión</h1>
      <p>Ser una asociación que brinde el desarrollo, conocimiento científico e intelectual a la comunidad agrónoma del frutal aguacate de México.

      </p>
    </div>
    <div class="eventos">
      <h1>Eventos</h1>
      <p>Diplomado para Profesionalización del Cultivo del Aguacate</p>
    </div>
    <div class="contacto">
      <h1>Cuenta</h1>
      <p><?php
           if(isset($_SESSION['usuario'])){
            if ($_SESSION['tipo']== 0){
              ?> <a href="bienvenida.php">Tu cuenta SIAM</a><?php
              
              

            }
            if ($_SESSION['tipo']== 99){
              ?> <a href="admin.php">Tu Sección Rey SIAM</a><?php
              
              

            }
            if ($_SESSION['tipo']== 1){
              ?> <a href="adminpagos.php">Tu Sección Admin-Pagos SIAM</a><?php
              
              

            }
            if ($_SESSION['tipo']== 2){
              ?> <a href="ponentes.php">Tu Sección Ponente SIAM</a><?php
              
              

            }}else{?> <a href="login.php#ini">Tu Sección SIAM</a><?php

            }
          
      ?> </p>
      <p><?php if(isset($_SESSION['usuario'])){
              echo $_SESSION['usuario'];
              ?> <br><a href="logout.php">Cerrar Sesión</a><?php
            }else{
              ?> <a href="login.php#ini">Iniciar Sesión</a><?php

            }?></p>
      <p><a href="registro.php#reg45821">Registrarse</a></p>
      <p><a href="#">Subscripción a Noticias</a></p>
      <p><a href="#">Contacto</a></p>
    </div>
    <div class="tel">
      <h1>Teléfono:</h1>
      <a href="tel:+524521146696"><p>+52(452)114 6696</p></a><p>Ing. y M.C Heladio Santacruz Ulibarri</p>
      
    </div>
    <div class="redes">
      <h1>Siguenos en:</h1> <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        
    </div>
    <div class="logocreador">
        <a href="https://ingeangel.com/"><img src="img/creador/logow2.png" alt="ingeangel"></a>
    </div>

    <!-- <?php for ($i=1; $i < (15*12)+1; $i++) { 
      ?><div class="page_menu"><?php echo $i;?></div><?php }?> -->
  </div> 