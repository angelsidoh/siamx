<?php include_once 'includes/templates/header.php' ?>
<section class="seccion contenedor">
  <h2 id="sobrenosotros">Sociedad Intelectual del Aguacate Mexicano A.C</h2>
  <p> Es un organismo que conjunta a Ingenieros, Técnicos y Profesionistas que estudian el cultivo del aguacate en la República Mexicana; Y permiten dar a conocer las novedades técnicas científicas a toda la comunidad del presente frutal. Busca en todo momento fortalecer los principios básicos para mejorar la producción, fito-sanidad, inocuidad y de las buenas prácticas del cultivo. De no contaminación al medio ambiente por el uso de agro-insumos para el combate de plagas y enfermedades. Busca realizar un congreso mexicano del Aguacate cada dos años. Así como diplomados, cursos de actualización y la difusión de novedades científicas nacionales y mundiales del Aguacate.
  </p>
</section>
<!--Seccion-->


<?php
if (isset($_SESSION['correo'])) {
  require_once('includes/funciones/funcionestwo.php');
  $resultado = obtenerFicha($_SESSION['correo']);
  $contacto = $resultado->fetch_assoc();
}
//  var_dump($contacto);

?>
<section class="precios seccion">
  <h2>Precios </h2>
  <p>2° Congreso Mexicano del Aguacate</p>
  <div class="contenedor">
    <ul class="lista-precios clearfix">
      <li>

        <div class="tabla-precios">
          <h2>Público General</h2><br>

          <p class="numero">$2,800 MXN</p>
          <p>Si requiere factura, pregunte contactando al <br> Teléfono: 452 114 66 96 <br> Correo: santacruzulibarry58@hotmail.com <br> Con el M.C. HELADIO SANTACRUZ ULIBARRI </p>
          <ul>
            <li>Acceso al contenido de aprendizaje del diplomado</li>
            <li>Acceso a la sala de reunión en Meet</li>
            <li>Derecho al examen final de conociminto</li>

          </ul>
          <a href="index.php#lugar2" id="irmapa" class="button">Ver Instrucciones</a>

        </div>
      </li>
      <li>

        <div class="tabla-precios">
          <h2>Estudiantes</h2><br>

          <p class="numero">$1,400 MXN</p>
          <p>Si requiere factura, pregunte contactando al <br> Teléfono: 452 114 66 96 <br> Correo: santacruzulibarry58@hotmail.com <br> Con el M.C. HELADIO SANTACRUZ ULIBARRI </p>

          <ul>
            <li>Acceso al contenido de aprendizaje del diplomado</li>
            <li>Acceso a la sala de reunión en Meet</li>
            <li>Derecho al examen final de conociminto</li>

          </ul>
          <a href="index.php#lugar2" id="irmapa" class="button">Ver Instrucciones</a>

        </div>
      </li>
    </ul>
  </div>
</section>

<section class="seccion">
  <h2>Faltan</h2>
  <p>Para que iniciar el 2° Congreso Mexicano del Aguacate</p>
  <div class="cuenta-regresiva contenedor">
    <ul class="clearfix">
      <li>
        <p id="dias" class="numero"></p>Días
      </li>
      <li>
        <p id="horas" class="numero"></p>Horas
      </li>
      <li>
        <p id="minutos" class="numero"></p>Minutos
      </li>
      <li>
        <p id="segundos" class="numero"></p>Segundos
      </li>
    </ul>
  </div>
</section>

<div class="contador parallax">

  <div class="contenedor">

    <ul id="infodiplomado" class="resumen-evento clearfix">

      <li>

        <h3 class="evento_r">Diplomado para Profesionalización Del cultivo del Aguacate
          <br>
          <p style="color:red; font-size :24px;">Contenido en USB</p>
          <a href="#comprarusb" class="button" style="color:yellow;">¿Como comprar?</a>
          <a href="#verusb" class="button">ver USB</a>
        </h3>
      </li>
      <li>
        <p class="numero"></p>Modulos de Aprendizaje
      </li>
      <li>
        <p  class="numero"></p>Conferencias
      </li>
      <li>
        <p class="numero"></p>Horas
      </li>
      <li>
        <p class="numero"></p>Examen de Conocimiento
      </li>
      <li>
        <p class="numero"></p>Ponentes Invitados
      </li>
      <!-- <a href="#" class="button">Ver Detalles</a> -->
    </ul>
    <!--Resumen-Evento-->

  </div>

</div>
<!--contenedorparallax-->


<section class="programa">


  <?php require_once('includes/funciones/funcionestwo.php');
  $resultadoPrograma = obtenerPrograma();
  $contadorids = 0;

  if ($resultadoPrograma->num_rows) {
    foreach ($resultadoPrograma as $programa) {
      date_default_timezone_set('GMT');
      $hoy = date('Y-m-d H:m:s');
      $restadia = $programa['fecha_programa'];
      $dias1 = (strtotime($hoy) - strtotime($restadia)) / 86400;
      $contadorids++;
      $fechasbd[$contadorids] = $programa['dia_programa'];
      $modulo[$contadorids] = $programa['modulo_programa'];
      $fechasactual[$contadorids] = $hoy;
      $diasx = $dias1 * -1;
      $subtemas[$contadorids] = $programa['subtema_programa'];
      $tema[$contadorids] = $programa['tema_programa'];
      $dia[$contadorids] = $programa['dia_programa'];
      $horaI[$contadorids] = $programa['hora_programa'];
      $horaF[$contadorids] = $programa['finhora_programa'];
      $ponente[$contadorids] = $programa['ponente_programa'];

      $contadorlis = $contadorids + 1;
      $auxcontadorlis = 1;
      // echo '<br>'.$diasx;
      $dias[$contadorids] = $diasx;
      $diasdxxx = $dias;
      $diasdyyy = $dias;
      if ($diasx <= 0) {
        $dias[$contadorids] = 9999;
        // echo  '<br>'.$dias[$contadorids];
        // echo 'hola';
      }
    }
  } ?>

  <div  id="comprarusb"  class="inbox_comocomprar">
    <div class="presentacioncompra">
      <div class="forma-compra"></div>
      <div class="marcoimagen">
        <div class="fotodel"></div>

      </div>
      <div class="forma-compra2"></div>
    </div>
    <div class="texto-compra">
      <div class="nombrecontacto">
        <p>Heldio Santacruz Ulibarri</p>
        <p>Experto en Aguacate</p>
        <p>¿Desea comprar este Diplomado? Comunicate al:</p>
        
      </div>
      <div class="datoscontacto">
        <div class="iconos">
          <i class="fas fa-phone-square-alt"></i>

          <i class="fas fa-envelope"></i>
        </div>
        <div class="datos">

          <a href="tel:+524521146696">
            <p>+52(452)114 6696</p>
          </a>
          <a href="mailto:santacruzulibarry58@hotmail.com">santacruzulibarry58@hotmail.com</a>
        </div>
      </div>
    </div>
    <div class="iconos-inbox">
      <a href="https://www.facebook.com/heladio.santacruz.1/"><i class="fab fa-facebook"></i></a>
      <a href="#"><i class="fab fa-youtube"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-linkedin-in"></i></a>

    </div>


  </div>

  <div   class="contenido-programa">
    <div class="contenedorppp">
      <div class="elemtos-programa">
        <ul class="slider">
          <?php
          for ($f = 1; $f <= $contadorids; $f++) {
            $diasdyyy[$f - 1] = 9999;
            $minimo =  min($diasdyyy);
            $contadorlis--;
            if ($diasdyyy[$f] > $minimo) {
              // echo '>'.$minimo.'<-'.$diasdyyy[$f];
              $contadorlis = $contadorids + 1;
            }
            $minimof =  min($diasdyyy);
            // echo '--x'.$contadorlis;

          }
          for ($x = $contadorlis; $x <= 3; $x++) {
            // for ($x = $contadorlis; $x <= $contadorids; $x++) {

          ?>
            <li>

              <div id="contendedor-programa" class="contendedor-programa">

                <div id="blocker<?php echo $x; ?>" class="video">
                  <video id="myVideo<?php echo $x; ?>" draggable="true">
                    <source src="<?php echo "video/edit" . $x . ".mp4"; ?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />

                  </video>
                </div>
                <div class="programa-evento" id="programa-evento<?php echo $x; ?>">

                  <h1>Programa</h1>
                  <h3 style="text-align: center;" class="evento_r">Diplomado para Profesionalización Del cultivo del Aguacate</h3>
                  <div class="contenido-usb">
                    <div class="imagen-usb"></div>
                    <div class="textusb">
                      <p  >El curso se vende en Memoria USB</p>
                      <p>Las carpetas contienen los siguientes modulos</p>
                    </div>
                  </div>

                  <nav class="menu-programa">
                    <?php

                    $diasdxxx[$x - 1] = 9999;
                    $minimo =  min($diasdxxx);
                    // echo '->'.$minimo.'<-';
                    for ($i = $x; $i <= $contadorids; $i++) {
                      if ($diasdxxx[$i] > $minimo) {
                        // echo $contadorlis;
                        $contadorlis++;

                        if ($diasdxxx[$i] == 9999) {
                          $auxcontadorlis = $auxcontadorlis - 1;

                          // echo '->xx'.$diasdxxx[$i].'xx<-';
                        }
                      } else {
                      }
                      if ($minimo == $diasdxxx[$i]) {
                    ?>

                        <p style="font-size: 28px;"><i class="fas fa-user-graduate" aria-hidden="true"></i><?php echo $modulo[$i]; ?></p><?php }
                                                                                                                                      } ?>

                  </nav>
                  <?php

                  for ($i = $x; $i <= $contadorids; $i++) {

                    if ($minimo == $dias[$i]) {
                      // echo '->'.$minimo.'<-' . $dias[$i];
                  ?>
                      <div  class="caja-detalle">

                        <div id="talleres" class="">
                          <div  id="verusb" class="detalle-evento">


                            <h3><?php echo $tema[$i] . '.'; ?></h3>
                            <BR></BR>
                            <p><?php echo $subtemas[$i] . '.' ?></p>
                            <br>
                            <p><?php echo $ponente[$i] ?></p>
                            
                            <button id="reproducir<?php echo $x; ?>" class="button">Ver</button>


                            <div class="contenedor_actividad">
                              <!-- <p>Grupo A  -->
                              <br><?php
                                  // $diasr = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado");
                                  // $mesesr = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
                                  // $fechaextra[$i] = strtotime($fechasbd[$i]);
                                  // $anio[$i] = date("Y", $fechaextra[$i]);
                                  // $diamuestra[$i] = $diasr[date("w", $fechaextra[$i])];
                                  // $diamuestra2[$i] = date("d", $fechaextra[$i]);
                                  // $mes[$i] = $mesesr[date("n", $fechaextra[$i]) - 1];
                                  // echo "Próximamente";
                                  // echo $diamuestra[$i] . ', ' . $diamuestra2[$i] . ' ' . $mes[$i] . ' del ' . $anio[$i] . '<br>' . $horaI[$i] . ' - ' . $horaF[$i] . '<br> Por: ' . $ponente[$i]; 
                                  ?>
                              </h3>
                              </p>
                            </div>



                            <?php
                            ?>



                          </div>
                        </div>
                      </div>

                  <?php
                    }
                  } ?>


                </div>

              </div>

            </li>
          <?php

          } ?>

        </ul>

      </div>
      <div class="elemtos-programa">
        <ol class="paginacion">

        </ol>
      </div>
      <div class="elemtos-programa">
        <div id="right" class="right">
          <div class="posx"> <span><i class="fas fa-angle-right"></i></span></div>

        </div>
        <div class="left">
          <div class="posx"><span><i class="fas fa-angle-left"></i></span></div>
        </div>

      </div>



    </div>
    <!--.contenedor-->
  </div>
  <!--.contenido-programa-->
</section>
<!--Programa-->

<!-- Add your site or application content here -->
<div class="contenedor-mapa">
  <div id="map" class="mapa">


  </div>
  <div id="mapps" class="mapsss">

  </div>
  <div class="contenedorbtn">
    <div id="btonmaps" class="button">Cerrar</a>

    </div>
  </div>











  <?php include_once 'includes/templates/footer.php' ?>