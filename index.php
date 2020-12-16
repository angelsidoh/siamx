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
  <div class="contenido-programa">
    <div class="contenedor">
      <div class="programa-evento">
        <h2>Programa</h2>
        <nav class="menu-programa">
          <?php require_once('includes/funciones/funcionestwo.php');
          $resultadoPrograma = obtenerPrograma();
          $contadorids = 0;
          if ($resultadoPrograma->num_rows) {
            foreach ($resultadoPrograma as $programa) {
              date_default_timezone_set('GMT');
              $hoy = date('Y-m-d H:m:s');
              $restadia= $programa['fecha_programa'];
              $dias1 = (strtotime($hoy)-strtotime($restadia))/86400; 
              $contadorids++;
              $fechasbd[$contadorids] = $programa['dia_programa']; 
              $modulo[$contadorids] = $programa['modulo_programa']; 
              $fechasactual[$contadorids] = $hoy;
              $diasx = $dias1*-1;
              $subtemas[$contadorids] = $programa['subtema_programa'];
              $tema[$contadorids] = $programa['tema_programa'];
              $dia[$contadorids]= $programa['dia_programa'];
              $horaI[$contadorids] = $programa['hora_programa'];
              $horaF[$contadorids] = $programa['finhora_programa'];
              $ponente[$contadorids] = $programa['ponente_programa'];
              
              // echo '<br>'.$diasx;
              $dias[$contadorids] = $diasx;
              if($diasx <= -0){
                $dias[$contadorids] = 9999;
                // echo  '<br>'.$dias[$contadorids];
                // echo 'hola';
              }
              
              
            }
          }
          $minimo =  min($dias);
            // echo $minimo;
          for ($i=1; $i <= $contadorids; $i++) { 
            // echo $i;
            if($minimo == $dias[$i]){
              ?><a style="font-size: 28px;" href="#"><i class="fas fa-user-graduate" aria-hidden="true"></i><?php echo $modulo[$i];?></a><?php
            // echo '->'. $fechasbd[$i] . '->'. $fechasactual[$i] . '->'. $dias[$i]. '<br>';
          }
            
          }

          
          ?>
         
        </nav>
        <?php for ($i=1; $i <= $contadorids ; $i++) { 
          if($minimo == $dias[$i]){
            ?>
              <div id="talleres" class="info-curso ocultar clearfix">
              <div class="detalle-evento">

              <h3><?php echo $tema[$i].'.'; ?></h3>
              <p style="color: #FFFFFF;

text-shadow: 3px 4px 3px #474747;
color: #FFFFFF;
"><?php echo $subtemas[$i]. '.'?></p>
              <div class="contenedor_actividad">
                <p>Grupo A <br><?php
                $diasr = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
                $mesesr = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                $fechaextra[$i] = strtotime($fechasbd[$i]);
                $anio[$i] = date("Y", $fechaextra[$i]);
                $diamuestra[$i] = $diasr[date("w", $fechaextra[$i])];
                $diamuestra2[$i] = date("d", $fechaextra[$i]); 
                $mes[$i] = $mesesr[date("n", $fechaextra[$i])-1];
                echo $diamuestra[$i]. ', '. $diamuestra2[$i]. ' '. $mes[$i] . ' del ' . $anio[$i]. '<br>'.$horaI[$i] . ' - ' . $horaF[$i]. '<br> Por: '. $ponente[$i]; ?></h3></p>
              </div>
              <?php
              ?>
              </div>
              </div>
            <?php
          }
        }?>
        <?php

        ?>
        <nav class="menu-programa">

        </nav>

        <?php
        ?>



      </div>
      <!--.programa-evento-->
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
require_once('includes/layout/instrucciones.php');
?>
<section class="precios seccion">
  <h2>Precio</h2>
  <div class="contenedor">
    <ul class="lista-precios clearfix">
      <li>

        <div class="tabla-precios">
          <h2>Público General</h2><br>

          <p class="numero">$5,500 MXN</p>
          <p style="font-size: 14px; color:#fe4918;">Si requiere factura, pregunte por el precio que genera <br> Telefóno: 452 1146696 <br> Correo:santacruzulibarry58@hotmail.com <br> Con el M.C. HELADIO SANTACRUZ ULIBARRI </p>
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


<!-- <section class="seccion">
    <h2>Testimoniales</h2>
    <div class="testimoniales contenedor clearfix">
      <div class="testimonial">
        <blockquote>
          <p>Con estas reuniones nacionales nos permite seguir un acercamiento con los nuevos criterios de diagnosticó en deficiencias nutricionales; su adecuación y rescate para mantener una integración de los minerales en el vegetal, agua y en el suelo.</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="imagen testimonial">
            <cite>Dr. Prometeo Sánchez García <span>Director de los Cursos Pre-Congreso del Manejo Integrado de la Fertilidad de los suelos en aguacate, del Segundo Congreso Mexicano del Aguacate 2020.</span></cite>
          </footer>
        </blockquote>
      </div>
      <div class="testimonial">
        <blockquote>
          <p>Es una gran oportunidad que podamos uniformizar los criterios de nuestras acciones para la prevención de enfermedades y control de plagas, como plantas arvenses. Además de actualizarnos en nuevas estrategias de investigación que permitan la solución de problemas reales</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="imagen testimonial">
            <cite>Dr. Armando Equigua Martinez: <span>Director de los Cursos Pre-congreso del Segundo Congreso Mexicano del Aguacate 2020.</span></cite>
          </footer>
        </blockquote>
      </div>
      <div class="testimonial">
        <blockquote>
          <p>Me parece importante retomar todos estos temas de prácticas de cultivo, porque  ayuda a capacitar muevas generaciones de estudiosos del aguacate; así como mejorar  el rendimiento, calidad y tamaño del fruto aguacate. </p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="imagen testimonial">
            <cite>Dr Alejandro Barrientos Priego <span>Genética del aguacate</span></cite>
          </footer>
        </blockquote>
      </div>
    </div>
  </section> -->
<div id="newslatter" class="newsletter parallax">
  <div class="contenido contenedor">

  </div>
  <!--.contenido-->
</div>



<?php include_once 'includes/templates/footer.php' ?>