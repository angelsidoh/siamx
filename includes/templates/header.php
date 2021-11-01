<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-KGRX4HBN4Q');
  </script>



  <?php
  header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
  header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado
  ?>

  <link rel="stylesheet" type="text/css" href="logininstall/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="logininstall/animate/animate.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="logininstall/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="logininstall/animsition/css/animsition.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="logininstall/select2/select2.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="logininstall/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans|family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/mobile-detect/1.4.5/mobile-detect.min.js" integrity="sha512-1vJtouuOb2tPm+Jh7EnT2VeiCoWv0d7UQ8SGl/2CoOU+bkxhxSX4gDjmdjmbX4OjbsbCBN+Gytj4RGrjV3BLkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" />
  <!-- BOOSTRAP -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/util.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="css/main.css?v=<?php echo time(); ?>">

  <meta name="theme-color" content="#fafafa">
</head>


<body class="cuerpo">
  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->



  <div id="hero" class="hero">

    <!-- <nav class="redes-sociales">

      </nav>
      <div class="informacion-evento">
        <div class="clearfix">
          <p class="fecha"> &nbsp;<i class="fas fa-calendar-alt"></i>&nbsp;Inicio 23 de Octubre del 2022</p>
          <a href="index.php#irmapa">
            <p class="ciudad"><i class="fas fa-map-marked-alt"></i>&nbsp;Uruapan, MX.&nbsp;</p>
          </a>
        </div>
       
        <div class="sitio">
          <h1 class="nombre-sitio">Sociedad Intelectual del Aguacate Mexicano</h1>
          <h1 class="nombre-sitio">SIAM A.C.</h1>
        </div> -->
    <div class="evento-sitio">
      <?php include_once 'evento.php' ?>
    </div>


  </div>
  <!--.hero-->

  <div class="barra">
    <div class="elementos__barra">
      <div id="logo_barra" class="logo_barra">

      </div>


      <div class="hotcalluser">
        <p>
          <?php

          if (isset($_SESSION['usuario'])) {
            echo $_SESSION['usuario'];
          }
          ?>
        </p>
      </div>
      <div class="hotcall">
        <?php if (isset($_SESSION['usuario'])) {

        ?> <a href="logout2.php">Cerrar Sesión</a><?php
                                                } else {
                                                  ?>
          <p id="iniciodesision">Iniciar Sesión</p>
        <?php

                                                } ?>
        <div id="ventana-sesion" class="ventana-sesion">
          <form id="loginx" class="login100-form validate-form">
            <span class="login100-form-title p-b-49">
              Iniciar sesión
            </span>

            <div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
              <span class="label-input100">Usuario</span>
              <input class="input100" type="text" name="username" placeholder="Tu cuenta de usuario" id="correo">
              <span class="focus-input100" data-icon="&#xf007;"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Password is required">
              <span class="label-input100">Contraseña</span>
              <input class="input100" type="password" id="pass" name="pass" placeholder="Tu constraseña">
              <span class="focus-input100" data-icon="&#xf023;"></span>
            </div>

            <div class="text-right p-t-8 p-b-31">
              <a href="#">
                ¿Olvidaste tu contraseña?
              </a>
            </div>

            <div class="container-login100-form-btn">
              <div class="wrap-login100-form-btn">
                <div class="login100-form-bgbtn"></div>
                <button id="accioninix1" value="iniciar sesion" class="login100-form-btn">
                  Iniciar sesión
                </button>
              </div>
            </div>
            <div class="text-right p-t-8 p-b-31">
             
                <p> ¿No tienes una cuenta SIAM?</p>
               
              
            </div>
            <div class="container-login100-form-btn">
              <div class="wrap-login100-form-btn">
                <div class="login100-form-bgbtn"></div>
                <a href="registro.php"id="accionregx1" class="login100-form-btn" >
                  Registrate
                                              </a>
              </div>
            </div>

            <div class="txt1 text-center p-t-54 p-b-20">
              <span>
                O Accede Usando tu Cuenta
              </span>
            </div>

            <div class="flex-c-m">


              <a href="#" class="login100-social-item bg3">
                <i class="fab fa-google"></i>
              </a>
            </div>


          </form>
        </div>
      </div>
      <div class="menu-hambur">
        <input type="checkbox" id="check" name="menu">
        <label for="check">
          <i class="fas fa-bars" id="btn"> </i>
          <i class="fas fa-window-close" id="clc" style="display:none"></i>
        </label>
      </div>
    </div>
    <!-- inicio de sesion -->

    <!--.Barra-->

  </div>


  <div class="contenedor_menu " id="global" style="display: none;">
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
      <p>EL 2º. CONGRESOMEXICANO DEL AGUACATE</p>
    </div>
    <div class="contacto">
      <h1>Cuenta</h1>
      <p><?php
          if (isset($_SESSION['usuario'])) {
            if ($_SESSION['tipo'] == 0) {
          ?> <a href="bienvenida.php">Tu cuenta SIAM</a><?php



                                                      }
                                                      if ($_SESSION['tipo'] == 99) {
                                                        ?> <a href="admin.php">Tu Sección Rey SIAM</a><?php



                                                                                                    }
                                                                                                    if ($_SESSION['tipo'] == 1) {
                                                                                                      ?> <a href="adminpagos.php">Tu Sección Admin-Pagos SIAM</a><?php



                                                                                                                                                                }
                                                                                                                                                                if ($_SESSION['tipo'] == 2) {
                                                                                                                                                                  ?> <a href="ponentes.php">Tu Sección Ponente SIAM</a><?php



                                                                                                                                                                                                                      }
                                                                                                                                                                                                                    } else { ?> <a href="#">Tu Sección SIAM</a><?php

                                                                                                                                                                                                                                                                  }

                                                                                                                                                                                                                                                                    ?> </p>
      <!-- <p><?php if (isset($_SESSION['usuario'])) {
            echo $_SESSION['usuario'];
          ?> <br><a href="logout2.php">Cerrar Sesión</a><?php
                                                      } else {
                                                        ?> <a href="#">Iniciar Sesión</a><?php

                                                                                        } ?></p> -->
      <!-- <p><a href="registro.php#reg45821">Registrarse</a></p> -->
      <p><a href="#">Subscripción a Noticias</a></p>
      <p><a href="#">Contacto</a></p>
    </div>
    <div class="tel">
      <h1>Teléfono:</h1>
      <a href="tel:+524521146696">
        <p>+52(452)114 6696</p>
      </a>
      <p>Ing. y M.C Heladio Santacruz Ulibarri</p>

    </div>
    <div class="redes">
      <h1>Siguenos en:</h1> <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-youtube"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>

    </div>
    <div class="logocreador">
      <a href="https://wingsdevs.com/"><img src="img/creador/logow2.png" alt="ingeangel"></a>
    </div>

    <!-- <?php for ($i = 1; $i < (15 * 12) + 1; $i++) {
          ?><div class="page_menu"><?php echo $i; ?></div><?php } ?> -->
  </div>