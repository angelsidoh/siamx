<?php include_once 'includes/templates/header.php' ?>
<section class="seccion contenedor">
  <h2>Sociedad Intelectual del Aguacate Mexicano A.C</h2>
  <p> Es un organismo que conjunta a Ingenieros, Técnicos y Profesionistas que estudian el cultivo del aguacate en la República Mexicana; Y permiten dar a conocer las novedades técnicas científicas a toda la comunidad del presente frutal. Busca en todo momento fortalecer los principios básicos para mejorar la producción, fito-sanidad, inocuidad y de las buenas prácticas del cultivo. De no contaminación al medio ambiente por el uso de agro-insumos para el combate de plagas y enfermedades. Busca realizar un congreso mexicano del Aguacate cada dos años. Así como diplomados, cursos de actualización y la difusión de novedades científicas nacionales y mundiales del Aguacate.
  </p>
</section>
<!--Seccion-->
<div class="contador parallax">
  <div class="contenedor">

    <ul id="infodiplomado" class="resumen-evento clearfix">
      <li>
        <h3 class="evento_r">Diplomado para Profesionalización Del cultivo del Aguacate
          <br>
          <p style="color:red; font-size :24px;">IMPARTIDO EN LINEA</p>
        </h3>
      </li>
      <li>
        <p class="numero"></p>Modulos de Aprendizaje
      </li>
      <li>
        <p class="numero"></p>Conferencias
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
  <div class="contenedor-video">
    <video autoplay muted loop poster="img/books-min.jpg">
      <source id="center" src="video/AthensEdit2.mp4" type="video/mp4">


    </video>
  </div>
  <!--contenedor-video-->
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
  <div class="contenido-programa">
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
        for ($x = $contadorlis; $x <= $contadorids; $x++) {

        ?>
          <li>

            <div class="programa-evento" id="programa-evento">
              <h1>Programa</h1>
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
                ?><p style="font-size: 28px;"><i class="fas fa-user-graduate" aria-hidden="true"></i><?php echo $modulo[$i]; ?></p><?php
                                                                                                                                // echo '->'. $fechasbd[$i] . '->'. $fechasactual[$i] . '->'. $dias[$i]. '<br>';
                                                                                                                              }
                                                                                                                            }

                                                                                                                                ?>

              </nav>
              <?php

              for ($i = $x; $i <= $contadorids; $i++) {

                if ($minimo == $dias[$i]) {
                  // echo '->'.$minimo.'<-' . $dias[$i];
              ?>
                  <div id="talleres" class="">
                    <div class="detalle-evento">

                      <h3><?php echo $tema[$i] . '.'; ?></h3>
                      <p style="color: #FFFFFF;
                        text-shadow: 3px 4px 3px #474747;
                        color: #FFFFFF;
                        "><?php echo $subtemas[$i] . '.' ?></p>
                      <div class="contenedor_actividad">
                        <p>Grupo A <br><?php
                                        $diasr = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado");
                                        $mesesr = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
                                        $fechaextra[$i] = strtotime($fechasbd[$i]);
                                        $anio[$i] = date("Y", $fechaextra[$i]);
                                        $diamuestra[$i] = $diasr[date("w", $fechaextra[$i])];
                                        $diamuestra2[$i] = date("d", $fechaextra[$i]);
                                        $mes[$i] = $mesesr[date("n", $fechaextra[$i]) - 1];
                                        echo "Próximamente";
                                        // echo $diamuestra[$i] . ', ' . $diamuestra2[$i] . ' ' . $mes[$i] . ' del ' . $anio[$i] . '<br>' . $horaI[$i] . ' - ' . $horaF[$i] . '<br> Por: ' . $ponente[$i]; ?></h3>
                        </p>
                      </div>
                      <?php
                      ?>
                    </div>
                  </div>
              <?php
                }
              } ?>


            </div>
          </li>
        <?php

        } ?>

      </ul>

      </div>
      <div class="elemtos-programa"><ol class="paginacion">

</ol>
</div>
      <div class="elemtos-programa">
      <div class="right">
        <span><i class="fas fa-angle-right"></i></span>
      </div>
      <div class="left">
        <span><i class="fas fa-angle-left"></i></span>
      </div>

      </div>
    
      

    </div>
    <!--.contenedor-->
  </div>
  <!--.contenido-programa-->
</section>
<!--Programa-->

<?php
if (isset($_SESSION['correo'])) {
  require_once('includes/funciones/funcionestwo.php');
  $resultado = obtenerFicha($_SESSION['correo']);
  $contacto = $resultado->fetch_assoc();
}
//  var_dump($contacto);

?>
<section class="precios seccion">
  <h2>Precios</h2>
  <div class="contenedor">
    <ul class="lista-precios clearfix">
      <li>

        <div class="tabla-precios">
          <h2>Público General</h2><br>

          <p class="numero">$2,800 MXN</p>
          <p style="font-size: 14px; color:#fe4918;">Si requiere factura, pregunte contactando al <br> Teléfono: 452 114 66 96 <br> Correo:santacruzulibarry58@hotmail.com <br> Con el M.C. HELADIO SANTACRUZ ULIBARRI </p>
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
          <p style="font-size: 14px; color:#fe4918;">Si requiere factura, pregunte contactando al <br> Teléfono: 452 114 66 96 <br> Correo:santacruzulibarry58@hotmail.com <br> Con el M.C. HELADIO SANTACRUZ ULIBARRI </p>
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

<!-- Add your site or application content here -->

<div id="map" class="mapa">

</div>
<div id="mapps" class="mapsss">

</div>
<div class="contenedorbtn">
  <div id="btonmaps" class="salirmapps">
    <a href="#newsletter">Salir del Mapa</a>
  </div>
</div>





<?php include_once 'includes/templates/footer.php' ?>