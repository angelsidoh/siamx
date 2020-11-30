<!-- registro -->
<?php include_once 'includes/templates/header.php' ?>
<section class="global">
    <div id="reg45821" class="contenedor">
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

                <div class="redes_tarjeta">
                    <div class="iconosredes_tarjeta">
                        <i class="fab fa-google"></i>
                        <i class="fab fa-facebook-square"></i>
                    </div>
                </div>
                <br>
                <br>
                <div class="hr">
                    <span><i class="fas fa-sort"></i></span>
                </div>
                
                    <form id="registro" action="#">
                        <div class="normal_tarjeta">
                           
                            <div class="contenedorinputs_normaltarjeta">
                                <div class="input_normaltarjeta">
                                    <div class="icono__input1">
                                        <i class="far fa-user"></i>
                                    </div>
                                    <input type="text" id="user" name="user" placeholder="Usuario">
                                </div>
                                <div class="input_normaltarjeta">
                                    <div class="icono__input1">
                                        <i class="fas fa-unlock-alt"></i>
                                    </div>
                                    <input type="text" id="correo" name="correo" placeholder="Correo">
                                </div>
                                <div class="input_normaltarjeta">
                                    <div class="icono__input1">
                                        <i class="fas fa-unlock-alt"></i>
                                    </div>
                                    <input type="text" id="correo1" name="correo1" placeholder="Repite tu Correo">
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



<?php include_once 'includes/templates/footer.php' ?>