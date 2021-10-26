

</div>
<footer class="site-footer">
      <div class="containerx">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>SIAM A.C</h6>
            <p class="text-justify">https://sociedadintelectualdelaguacatemexicano.com <i>actualizaciones, cursos y eventos del frutal  del aguacate y otros </i> es una iniciativa de la Sociedad Intelectual de Aguacate, para poner a disposición de todo el público interesado en aprender y mejorar sus cultivos. Con el fin de formar cada vez más expertos en cada área presentada.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Categorías</h6>
            <ul class="footer-links">
              <li><a href="#">2° Congreso Mexicano del Aguacate</a></li>
              <li><a href="#">Diplomado "Profesionalización Del Aguacate"
          </a></li>
              
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Acceso Rápido</h6>
            <ul class="footer-links">
              <li><a href="#sobrenosotros">Sobre Nosotros</a></li>
              <li><a href="#Contacto">Contacto</a></li>
              <li><a href="#Contribuciones/">Contribuciones</a></li>
              <li><a href="#Poltica-Privacidad">Política de Privacidad</a></li>
              <li><a href="#map">Mapa de Ubicación</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="containerx">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by 
         <a href="#">SIAM A.C</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fab fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fab fa-youtube"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fab fa-instagram"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="js/vendor/modernizr-3.7.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  
  <?php 
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php", "", $archivo);
    if($pagina == 'invitados' || $pagina== 'index'){
      echo '<script src="js/jquery.colorbox-min.js"></script>';
    }elseif($pagina == 'conferencia'){
      echo '<script src="js/lightbox.js"></script>';
    }
  ?>

  
  
  <script src="js/jquery.lettering.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  
  
  <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"></script>
  <script src="js/main.js?v=<?php echo time(); ?>"></script>
  <script src="js/secuencia.js?v=<?php echo time(); ?>"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'G-KGRX4HBN4Q', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>


</html>
