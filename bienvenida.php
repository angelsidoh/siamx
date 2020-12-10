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
        <div class="tarjeta_registrox">
          <div class="sub_tarjetaregistroxx">
            <div class="botoncliente">
              <h2>Formulario de Inscripción <br>
                <h3> Diplomado para Profesionalización Del cultivo del Aguacate</h3>
              </h2>
              <form id="inscripcion" action="#">
                <ul>
                  <h4>Instrucciones:</h4>
                  <li>1.- Llene las casillas siguientes dando clic en el botón indicado.</li>
                  <li>2.- Asegúrese, que los datos estén correctos antes de enviar el formulario.</li>
                  <li>3.- Puede marcar la casilla de pago por transferencia o depósito en ventanilla, en automático se desmarca la opción si decides cambiar a la otra.</li>
                </ul>
                <div class="recuadro">
                  <div class="a">¡Quiero <span>inscribirme</span>  al Diplomado!</div>
                 
                  <div class="c">
                    <div class="boton1x">
                      
                      <label  for="boton1" class="container button">Clic Aqui
                      <!-- <input type="checkbox" checked="checked">
                      <span class="checkmark"></span> -->
                      </label>
                    </div>
                  </div>
                  <div class="b"><i class="fas fa-arrow-right"></i></div>
                  <div class="container">
                    <input type="checkbox" id="boton1" checked="checked" name="Inscripción" value = "1">
                    
                    <span class="checkmark"></span>
                  </div>
                  <input type="text" name="boton11" class="form-control" id="boton11" value="1" style="display: none;">
                  <div class="a">¡Quiero hacer mi pago por: <br><span>Depósito en ventanilla Bancaria!</span> </div>
                 
                  <div class="c">
                    <div class="boton1x">
                      
                      <label  for="boton3" class="container button">Clic Aqui
                      <!-- <input type="checkbox" checked="checked">
                      <span class="checkmark"></span> -->
                      </label>
                    </div>
                  </div>
                  <div class="b"><i class="fas fa-arrow-right"></i></div>
                  <div class="container">
                    <input  type="checkbox" id="boton3" checked="checked" name="Depocito" value = "1">
                    <span class="checkmark"></span>
                   
                  </div>
                  <input type="text" name="boton33" class="form-control" id="boton33" value="1" style="display: none;">
                  <div class="a">¡Quiero hacer mi pago por: <br> <span> Transferencia Bancaria!</span></div>
                 
                  <div class="c">
                    <div class="boton1x">
                      
                       <label  for="boton2" class="container button">Clic Aqui
                      <!-- <input type="checkbox" checked="checked">
                      <span class="checkmark"></span> -->
                      </label>
                    </div>
                  </div>
                  <div class="b"><i class="fas fa-arrow-right"></i></div>
                  <div class="container">
                  <input  type="checkbox" id="boton2" name="Transferencia" value = "1" checked="checked">
                    <span class="checkmark"></span>
                  </div>
                  <input type="text" name="boton22" class="form-control" id="boton22" value="0" style="display: none;">
                  <div class="a">¡Quiero <span>Factura</span> de mi pago!</div>
                  
                  <div class="c">
                    <div class="boton1x">
                      
                      <label  for="boton4" class="container button">Clic Aqui
                      <!-- <input type="checkbox" checked="checked">
                      <span class="checkmark"></span> -->
                      </label>
                    </div>
                  </div>
                  <div class="b"><i class="fas fa-arrow-right"></i></div>
                  <div class="container">
                  <input type="checkbox" id="boton4" name="factura" value="1">
                    <span class="checkmark"></span>
                  </div>
                  <input type="text" name="boton44" class="form-control" id="boton44" value="0" style="display: none;">
                </div>
                <div class="menufactura">
                  <!-- <div class="nombrefactura">
                    <p>Nombre</p>
                  </div>
                  <div class="inputnombre">
                    <input type="text" id="nombre" name="nombre" placeholder="Nombre">
                  </div> -->
                  <div class="partext">
                    <p>RFC <i class="fas fa-arrow-right"></i></p>
                  </div>
                  <div class="partinput">
                    <input type="text" id="rfc" name="rfc" placeholder="RFC">
                  </div>
                  <div class="partext">
                    <p>CFDI <i class="fas fa-arrow-right"></i></p>
                  </div>
                  <div class="partinput">
                    <input type="text" id="cfdi" name="cfdi" placeholder="CFDI">
                  </div>
                  <div class="partext">
                    <p>Domicilio Fiscal <i class="fas fa-arrow-right"></i></p>
                  </div>
                  <div class="partinput">
                    <input type="text" id="domiciliof" name="domiciliof" placeholder="Domicilio Fiscal">
                  </div>
                </div>
                <div class="upload">
                  <label for="">Sube una foto <br>
                  Requisito: ¡Foto formal tamaño infantil!, escaneada con impresora/escáner o telefono inteligente.   
                  </label>
                  <input class="button"  type="file" id="foto1file" name= "foto1file">
                  <progress id="progressBar" value="0" max="100"></progress>
                  <h3 id="status" style="display: none;"></h3>
	                <p id="loaded_n_total"></p>
                </div>
                <div class="contenedornew__boton">
                  <input id="btninscripcion" type="submit" value="Inscribirme al diplomado" class="button">
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