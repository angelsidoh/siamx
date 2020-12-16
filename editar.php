<?php 
   include_once 'includes/templates/header.php';
   require_once('includes/funciones/funcionestwo.php');
    if(!isset($_SESSION['usuario']) || $_SESSION['tipo'] != '1'){
    
        session_destroy();
  
        // header('location:logout.php');
        ?><META HTTP-EQUIV="REFRESH" CONTENT=".1;URL=https://sociedadintelectualdelaguacatemexicano.com/logout.php"><?php
        
die();
    }else{
        

        $id = filter_var($_GET['id'], FILTER_VALIDATE_INT);

        if(!$id){
            die('No es válido');
        }
        $resultado = obtenerContacto($id);
        $contacto = $resultado->fetch_assoc();

        // var_dump($contacto);

?>
<div class="instruccionpago blink2Amarillo">
          <h2>Instrucciones de Inscripción</h2>
          <ul>
            <li style="font-weight: 100;">
              <p> 1.- Pagar su inscripción a la <span style="font-weight: 900;">Cuenta:</span> <span style="text-decoration: underline;">0218808280201</span> del banco BanBajío <br> En caso de transferencia a la <span style="font-weight: 900;"> Clave Interbancaria:</span> <span style="text-decoration: underline;">030528900014403601</span> del banco BanBajío</p>
            </li>
            <li style="font-weight: 100;">
             <p>2.-Llenar el <span style="font-weight: 900;">Formulario de PRE-Inscripción</span>  en tu cuenta SIAM (Si aún no tienes una cuenta SIAM regístrate <a href="registro.php">aquí</a> ) <br> y dar clic en el botón <span style="font-weight: 900;">Inscribirme al diplomado</span>.</p> 
            </li>
            <li style="font-weight: 100;">
              <p>3.- Termine de llenar los datos su ficha. Dando clic en el botón  <span style="font-weight: 900;"> Editar  Mi Ficha</span>.</p>
            </li>
            <li style="font-weight: 100;">
              <p>4.- Completados los datos de clic en el botón <span style="font-weight: 900;">Enviar Notificación de Pago al Sistema</span>. </p>
            </li>

          </ul>
        </div>
<div class="bg-amarillo contenedor1 sombra">
    <form id="contacto" action="#">
        <legend>Cambiar Estado de Pago<span></span></legend>
        <?php include 'includes/layout/formulario.php' ?>
        <br>
        <a class="btn volver" href="adminpagos.php#listado-contacto">Volver</a>
    </form>
</div>
<script src="js/app.js?v=<?php echo time(); ?>"></script>
</body>
</html>




<?php
    }
include_once 'includes/templates/footer.php' ?>