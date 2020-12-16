<div id="lugar2" class="instruccionpago <?php
  if (isset($_SESSION['correo']) && $contacto['inscripcion_usuario'] == 1 && $contacto['banco_usuario'] != '' && $contacto['tiked_usuario'] != '') {
    echo 'verde2';
  } else {
    echo 'blink2Amarillo';
  }
  ?>">
  <h2>Instrucciones de Inscripción</h2>

  <ul>


    <?php if (isset($_SESSION['correo'])) { ?>
      <div class="container">
        <input type="checkbox" id="botonx1" checked="checked" name="Inscripción" value="1">

        <span class="checkmark"></span>
      </div>
    <?php } else { ?>
      <div class="container">
        <input type="checkbox" id="botonx4" checked="checked" name="Inscripción" value="1">

        <span class="checkmark blinkCheck"></span>
      </div>
    <?php } ?>
    <li style="font-weight: 100;">
      <p> 1.- Iniciar sesión con tu Cuenta SIAM (Si no tienes una cuenta SIAM has clic 
      <a href="registro.php#reg">Aquí</a> para crearla)</p>
      <?php if (isset($_SESSION['correo'])) { ?>
        <a class="button" href="login.php#ini">Iniciar Sesión</a>
      <?php } else { ?>
        <a class="button blinkCheckBorder" href="login.php#ini">Iniciar Sesión</a>
      <?php } ?>

    </li>
    <?php if (isset($_SESSION['correo'])) {
      if ($contacto['inscripcion_usuario'] == 1) { ?>
        <div class="container">
          <input type="checkbox" id="botonx2" checked="checked" name="Inscripción" value="1">

          <span class="checkmark"></span>
        </div>
      <?php } else { ?>
        <div class="container">
          <input type="checkbox" id="botonx4" checked="checked" name="Inscripción" value="1">

          <span class="checkmark blinkCheck"></span>
        </div>
      <?php }
    } else { ?>
      <div class="container">
        <input type="checkbox" id="botonx4" checked="checked" name="Inscripción" value="1">

        <span class="checkmark blinkCheck"></span>
      </div>
    <?php } ?>
    <li style="font-weight: 100;">
      <p>2.- Pagar su inscripción a la cuenta: <span style="font-weight: 900; text-decoration: underline;">0218808280201</span> del banco BanBajío
        <br> En caso de Transferencia Bancaria a la clave interbancaria:
        <span style="font-weight: 900; text-decoration: underline;">030528900014403601</span> del banco BanBajío. <br>
        <p style="font-size: 14px; color:#fe4918;">Si requiere factura, pregunte por el precio que genera <br> Telefóno: 452 1146696 <br> Correo:santacruzulibarry58@hotmail.com <br> Con el M.C. HELADIO SANTACRUZ ULIBARRI </p>
        y Llenar el formulario de PRE inscripción.
      </p>
      <?php if (isset($_SESSION['correo'])) {
              if ($contacto['inscripcion_usuario'] == 1) { ?>
                <a class="button " href="bienvenida.php#lugar1">Llenar Formulario</a>
              <?php } else { ?>
                            <a class="button blinkCheckBorder" href="bienvenida.php#lugar1">Llenar Formulario</a>
                        <?php }
                  } else { ?>
                          <a class="button blinkCheckBorder" href="bienvenida.php#lugar1">Llenar Formulario</a>
                      <?php } ?>
    </li>

    <?php if (isset($_SESSION['correo'])) {
      if ($contacto['banco_usuario'] != '' && $contacto['tiked_usuario'] != '') { ?>
        <div class="container">
          <input type="checkbox" id="botonx3" checked="checked" name="Inscripción" value="1">

          <span class="checkmark"></span>
        </div>
      <?php } else { ?>
        <div class="container">
          <input type="checkbox" id="botonx4" checked="checked" name="Inscripción" value="1">

          <span class="checkmark blinkCheck"></span>
        </div>
      <?php }
    } else { ?>
      <div class="container">
        <input type="checkbox" id="boton4" checked="checked" name="Inscripción" value="1">

        <span class="checkmark blinkCheck"></span>
      </div>
    <?php } ?>

    <li style="font-weight: 100;">
      <p>3.- Terminar de llenar la ficha de inscripción con los datos le pida.</p>
      <?php if (isset($_SESSION['correo'])) {
        if ($contacto['banco_usuario'] != '' && $contacto['tiked_usuario'] != '') { ?>
          <a class="button" href="ficha.php#contacto">Llenar datos</a>
        <?php } else { ?>
          <a class="button blinkCheckBorder" href="ficha.php#contacto">Llenar datos</a>
        <?php }
      } else { ?>
        <a class="button blinkCheckBorder" href="ficha.php#contacto">Llenar datos</a>
      <?php } ?>
    </li>


  </ul>
  <?php

  ?> <p id="mensajetramite" class=" <?php
  if (isset($_SESSION['correo']) && $contacto['inscripcion_usuario'] == 1 && $contacto['banco_usuario'] != '' && $contacto['tiked_usuario'] != '') { echo "blinkmensajetramite"; } ?>"><?php
    if (isset($_SESSION['correo']) && $contacto['inscripcion_usuario'] == 1 && $contacto['banco_usuario'] != '' && $contacto['tiked_usuario'] != '') {
      echo ' Tu tramité a finalizado con exito en tu cuenta SIAM, una vez se cumplan las fechas designadas por la administración, será notificado por correo electrónico con instrucciones para tomar la primera sesión del Diplomado.';
    } else {
      echo 'Aún no completas tu tramité';
    } ?>

  </p><?php

      ?>

</div>