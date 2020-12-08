<?php
include_once 'includes/templates/header.php';


if (!isset($_SESSION['usuario']) || $_SESSION['tipo'] != '0') {
 

  session_destroy();
  
  // header('location:logout.php');
  ?><META HTTP-EQUIV="REFRESH" CONTENT=".1;URL=https://sociedadintelectualdelaguacatemexicano.com/logout.php"><?php

  
} else {
  


?>
  <section class="global">
    <section class="seccion ">
      <h2>Sociedad Intelectual del Aguacate Mexicano A.C</h2>
      <div class="contador parallax">
        <div class="contenedor">

          <ul id="infodiplomado" class="resumen-evento clearfix">
            <li>
              <h3 class="evento_r">Diplomado para Profesionalización Del cultivo del Aguacate <br>
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
      <div id="verenmicuenta" class="text_inicia">
        <h2>Fecha de inicio del Diplomado</h2>
        <h1 class="fecha"> &nbsp;<i class="fas fa-calendar-alt"></i>&nbsp;Inicio 8 de Enero del 2021</h1>
      </div>
      <section class="precios seccion">
        <h2>Precio</h2>
        <div class="contenedor">
          <ul class="lista-precios clearfix">
            <li>

              <div class="tabla-precios">
                <h2>Público General</h2><br>

                <p class="numero">$5,500 MXN</p>
                <ul>
                  <li>Acceso al contenido de aprendizaje del diplomado</li>
                  <li>Acceso a la sala de reunión en Meet</li>
                  <li>Derecho al examen final de conociminto</li>

                </ul>


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
      <div class="tarjeta">
        <div class="tarjeta_registro">
          <div class="sub_tarjetaregistro">
            <div class="botoncliente">
              <h2>Formulario de Inscripción <br>
                <h3> Diplomado para Profesionalización Del cultivo del Aguacate</h3>
              </h2>
              <form id="inscripcion" action="#">
                <ul>
                  <h4>Instrucciones:</h4>
                  <li>1.- Llena las casillas siguientes dando clic en el botón indicado.</li>
                  <li>2.- Asegúrese, que los datos estén correctos antes de enviar el formulario.</li>
                </ul>
                <div class="recuadro">
                  <div class="a">Deseo inscribirme al Diplomado</div>
                  <div class="b"><i class="fas fa-arrow-right"></i></div>
                  <div class="c">
                    <div class="boton1">
                      
                      <label for="boton1">
                      <i class="fas fa-flushed"></i>
                      </label>
                    </div>
                  </div>
                  <div class="d">
                  <input type="checkbox" id="boton1" name="menuadsasd">
                  </div>
                  <div class="a">Deseo hacer una transferencia Bancaria</div>
                  <div class="b"><i class="fas fa-arrow-right"></i></div>
                  <div class="c">
                    <div class="boton1">
                      
                      <label for="boton2">
                      <i class="fas fa-flushed"></i>
                      </label>
                    </div>
                  </div>
                  <div class="d">
                  <input type="checkbox" id="boton2" name="menuadsasd">
                  </div>
                  <div class="a">Deseo hacer un depocito en Ventanilla Bancaria</div>
                  <div class="b"><i class="fas fa-arrow-right"></i></div>
                  <div class="c">
                    <div class="boton1">
                      
                      <label for="boton3">
                      <i class="fas fa-flushed"></i>
                      </label>
                    </div>
                  </div>
                  <div class="d">
                  <input type="checkbox" id="boton3" name="menuadsasd">
                  </div>
                  <div class="a">Deseo factura de mi pago</div>
                  <div class="b"><i class="fas fa-arrow-right"></i></div>
                  <div class="c">
                    <div class="boton1">
                      
                      <label for="boton4">
                      <i class="fas fa-flushed"></i>
                      </label>
                    </div>
                  </div>
                  <div class="d">
                  <input type="checkbox" id="boton4" name="menuadsasd">
                  </div>
                </div>
                <div class="contenedornew__boton">
                  <input id="btninscripcio" type="submit" value="Inscribirme al Diplomado" class="button">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="contenedor">
        <div class="programaevento">
          <h3>Programa</h3>
          <?php
          $titles = [
            '',
            'Manejo de viveros y sistemas de Producción',
            'Fertilización, uso de agua y suelo; y agricultura de precisión',
            'Práctica de campo a la huerta de aguacate “HUERTA SANTA MARÍA 1” en Toreo El Alto Mich, Municipio de Uruapan, Michoacán.',
            'Práctica de campo a la huerta de aguacate “HUERTA VIEJO CUCHATÁCUARO” en Tiamba, Mich, Municipio de Uruapan, Michoacán.',
            'Fertilización, uso de agua y suelo; y agricultura de precisión.',
            'Podas; manejo de estrés y floración.',
            'Control de plagas enfermedades y malezas.',
            'Cosecha y comercialización.',
            'Inocuidad y producción sostenible en el rendimiento del aguacate.',
            'Inocuidad y producción sostenible en el rendimiento del aguacate.',
            'La tesis profesional y titulación en la Facultad de Agrobiologia.',
            'Examen general  de conocimientos del primer diplomado para la profesionalización del cultivo del aguacate. Y Clausura del diplomado'

          ];



          for ($i = 1; $i < 13; $i++) {
          ?><img src="img/programacompleto/modulo<?php echo $i; ?>-min.jpg" alt="<?php echo $titles[$i]; ?>"><?php
                                                                                                            } ?>
        </div>
      </div>
    </section>
  </section>
<?php
}
require_once('includes/templates/footer.php');
?>