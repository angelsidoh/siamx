<footer class="site-footer">
    <div class="contenedor clearfix">
      <div class="footer-informacion">
        <h3>Sobre <span>Sociedad Intelectual del Aguacate Mexicano</span></h3>
        <p>Reunimos a los expertos, para así brindar su conocimiento y experiencia en el cuidado y mejora de la salud del árbol de aguacate.</p>
      </div>
      <div class="ultimos-tweets">
        <h3>Últimos <span>Tweets</span></h3>
        <ul>
          <li>.</li>
          <li>.</li>
          <li>.</li>
        </ul>
      </div>
      <div class="menu">
        <h3>Redes <span>Sociales</span></h3>
        <nav class="redes-sociales">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </nav>
      </div>
    </div>
   
    <p class="copyright">Todos los derechos Reservados Sociedad Intelectual del Aguacate Mexicano SIAM A.C. &copy;</p>
  </body> 
   
    
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

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'G-KGRX4HBN4Q', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>


</html>
