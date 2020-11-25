<?php include_once 'includes/templates/header.php' ?>
  <section class="seccion contenedor">
    <h2>El Mejor Congreso del Aguacate del Mundo</h2>
    <p>La Facultad de Agrobiología “Presidente Juárez” UMSNH, El Colegio de Postgraduados, Instituto Mexicano de Investigaciones Forestales, Agrícolas y Pecuarias INIFAP y La Fundación Sánchez Colín CICTAMEX. Tienen el gusto de celebrar el Segundo Congreso Mexicano del Aguacate 2020 en la Facultad de Agrobiología “Presidente Juárez” UMSNH. Y  de ésta manera reunir a los expertos del aguacate de la República Mexicana; a través de la Comunidad Científica, Medios Oficiales, Organizaciones Tecnológicos, Industriales, Empresariales, Área Estudiantil y Prestadores de Servicios; para exponer y compartir conocimientos innovadores de mejoras en los procesos productivos del frutal aguacate de nuestro país, durante los días 29, 30 y 31 de Octubre del 2020.   
    </p>
  </section><!--Seccion-->
  <section class="programa">
    <div class="contenedor-video">
      <video autoplay loop poster="img/bg-talleres.jpg">
        <source src="video/video.mp4" type="video/mp4">
        <source src="video/video.webm" type="video/webm">
        <source src="video/video.ogv" type="video/ogv">
      </video>
    </div><!--contenedor-video-->
    <div class="contenido-programa">
      <div class="contenedor">
        <div class="programa-evento">
          <h2>Programa de Congreso</h2>
          <?php
            
          ?>
           <nav class="menu-programa">
             
          </nav>

          <?php
            ?>
 
        
        
        </div><!--.programa-evento-->
      </div><!--.contenedor-->
    </div><!--.contenido-programa-->
  </section><!--Programa-->

 
  
  <div class="contador parallax">
    <div class="contenedor">
      <ul class="resumen-evento clearfix">
        <li><p class="numero"></p>Invitados</li>
        <li><p class="numero"></p>Conferencias</li>
        <!-- <li><p class="numero"></p>Simposios</li> -->
        <li><p class="numero"></p>Practica de Campo</li>
        <li><p class="numero"></p>Días</li>
      </ul><!--Resumen-Evento-->
    </div>
  </div><!--contenedorparallax-->

  <section class="precios seccion">
    <h2>Precios</h2>
    <div class="contenedor">
      <ul class="lista-precios clearfix">
        <li>
          <div class="tabla-precios">
            <h3>Estudiantes</h3>
            <p class="numero">$2,600 pesos MXN</p>
            <ul>
              <li>Entrada a la Practica de Campo</li>
              <li>Entrada a todas las Conferencias</li>
              <li>Entrada a todos los Simposios</li>
            </ul>
            <a href="registro.php#hola" class="button hollow">Comprar</a>
          </div>
        </li>
        <li>
          <div class="tabla-precios">
            <h3>General</h3>
            <p class="numero">$3,600 pesos MXN</p>
            <ul>
              <li>Entrada a la Practica de Campo</li>
              <li>Entrada a todas las Conferencias</li>
              <li>Entrada a todos los Simposios</li>
            </ul>
            <a href="#" class="button">Comprar</a>
           
          </div>
        </li>
      </ul>
    </div>
  </section>

  <!-- Add your site or application content here -->
  
  <div id="map" class="mapa">

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
  <div class="newsletter parallax">
    <div class="contenido contenedor">
      <p>Regístrate al newsletter:</p>
      <h3>2° Congreso Méxicano del Aguacate</h3>
      <a href="#mc_embed_signup" class="btn_newletter button transparente">Registro</a>
    </div><!--.contenido-->
  </div>

  <section class="seccion">
    <h2>Faltan</h2>
    <div class="cuenta-regresiva contenedor">
      <ul class="clearfix">
        <li><p id="dias" class="numero"></p>Días</li>
        <li><p id="horas" class="numero"></p>Horas</li>
        <li><p id="minutos" class="numero"></p>Minutos</li>
        <li><p id="segundos" class="numero"></p>Segundos</li>
      </ul>
    </div>
  </section>

  <?php include_once 'includes/templates/footer.php' ?>