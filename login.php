<?php
    include_once 'includes/templates/header.php';
   
    
    if(isset($_SESSION['usuario'])){
    
        session_destroy();
  
        // header('location:logout.php');
        ?><META HTTP-EQUIV="REFRESH" CONTENT="1;URL=https://sociedadintelectualdelaguacatemexicano.com/logout.php"><?php
    }else{
         
?>
<section class="global">
    <div id="ini" class="contenedor">
        <h2>Iniciar Sesión</h2>
    </div>
    <div class="tarjeta">
        <div class="tarjeta_registro">
            <div class="sub_tarjetaregistro">
                <div class="icono">
                    <i class="fas fa-users"></i>
                </div>
                <div class="text_tarjeta">
                    <h1>Bienvenido</h1> 
                </div>
                    <form id="login" action="#">
                        <div class="normal_tarjeta">
                            <div class="contenedorinputs_normaltarjeta">
                                
                                <div class="input_normaltarjeta">
                                    <div class="icono__input1">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <input type="text" id="correo" name="correo" placeholder="Ingresa tu Correo">
                                </div>
                                <div class="input_normaltarjeta">
                                    <div class="icono__input1">
                                        <i class="fas fa-unlock"></i>
                                    </div>
                                    <input type="password" id="pass" name="pass" placeholder="Contraseña">
                                </div>
                                <?php if (!empty($errores)) : ?>
                                    <div class="error">
                                        <ul>
                                            <?php echo $errores; ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <div class="recordatorio">
                            <p>Te recordamos que la contraseña se envió al correo electrónico que ingresaste en tu registro</p>
                            <p>Si aún no has revido un correo con tus datos de registro. Por favor contáctese al correo: <a href="mailto:siam.profordivs@gmail.com">siam.profordivs@gmail.com</a>

</p>
                        </div>
                        </div> <!-- rnormal__tarjeta -->
                            <div class="contenedornew__boton">
                                <input id="btnlogin" type="submit" value="Iniciar Sesión" class="button">
                        </div>
                        <div class="recordatorio">
                            
                            <p>¿Aún no tienes una cuenta SIAM?</p> <a href="registro.php#reg">Registrate</a>
                        </div>
                    </form>
            </div>
            <svg>
                <rect></rect>
            </svg>


        </div>

    </div>
</section>




<?php
    }
include_once 'includes/templates/footer.php' ?>