<!-- registro -->

<?php
include_once 'includes/templates/header.php';


if (isset($_SESSION['usuario'])) {

    session_destroy();

    // header('location:logout.php');
?>
    <META HTTP-EQUIV="REFRESH" CONTENT=".1;URL=logout2.php"><?php
                                                                                } else {

                                                                                    ?>
    <section class="global">
        <div id="reg" class="contenedor">
            <h2>registro</h2>
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
                    <form id="registro" action="#">

                        <div class="normal_tarjeta">
                            <div class="contenedorinputs_normaltarjeta">
                                <div class="input_normaltarjeta">
                                    <div class="icono__input1">
                                        <i class="far fa-user"></i>
                                    </div>
                                    <input type="text" id="user" name="user" placeholder="Nombre">
                                </div>
                                <div class="input_normaltarjeta">


                                    <input type="text" id="apellido" name="apellido" placeholder="Apellidos">
                                </div>
                                <div class="input_normaltarjeta">
                                    <div class="icono__input1">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <input type="tel" id="number" name="number" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Teléfono" />

                                </div>
                                <div class="input_normaltarjeta">
                                    <div class="icono__input1">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <input type="text" id="correox12" name="correo" placeholder="Correo electrónico" value="">
                                </div>
                                <div class="recordatorio">
                                    <p>Tu contraseña será generada automáticamente, asegúrate que tengas acceso al correo que Ingreses. </p>
                                    <p>Si aún no has revido un correo con tus datos de registro. Por favor contáctese al correo: <a  href="mailto:info@sociedadintelectualdelaguacatemexicano.com">info@sociedadintelectualdelaguacatemexicano.com</a>
                                </div>
                                <?php if (!empty($errores)) : ?>
                                    <div class="error">
                                        <ul>
                                            <?php echo $errores; ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div> <!-- rnormal__tarjeta -->
                        <div class="contenedornew__boton">
                            <input id="btnform" type="submit" value="Crear cuenta SIAM" class="button">
                        </div>
                    </form>
                </div>
                <svg>
                    <rect></rect>
                </svg>


            </div>

        </div>
    </section>




<?php }
                                                                                include_once 'includes/templates/footer.php' ?>