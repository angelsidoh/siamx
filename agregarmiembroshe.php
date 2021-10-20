<div class="form">
    <form id="up-invitados" action="#">

        <div class="normal_tarjeta">
            <div class="contenedorinputs_normaltarjeta">
                <div class="input_normaltarjeta">
                    <div class="icono__input1">
                        <i class="far fa-user"></i>
                    </div>
                    <input type="text" id="nombre" name="nombre" placeholder="Nombre(s)">
                </div>
                <div class="input_normaltarjeta">
                    <div class="icono__input1">
                        <i class="far fa-user"></i>
                    </div>

                    <input type="text" id="apellido" name="apellido" placeholder="Apellidos">
                </div>
                <div class="input_normaltarjeta">
                    <div class="icono__input1">
                        <i class="far fa-user"></i>
                    </div>

                    <input type="text" id="profesion" name="profesion" placeholder="Profesión">
                </div>
                <div class="input_normaltarjeta">
                    <div class="icono__input1">
                        <i class="far fa-user"></i>
                    </div>

                    <input type="date" id="fecha" name="fecha" placeholder="">
                </div>
                <div class="input_normaltarjeta">
                    <div class="icono__input1">
                        <i class="far fa-user"></i>
                    </div>

                    <input type="time" id="hora" name="hora" placeholder="">
                </div>
                <div class="input_normaltarjeta">
                    <div class="icono__input1">
                        <i class="far fa-user"></i>
                    </div>

                    <textarea style="height: 300px;" type="text" id="descripcion" name="descripcion" placeholder=""></textarea>
                </div>
                <div style="margin-top: 300px; " class="input_normaltarjeta">
                    <div class="icono__input1">
                        <i class="far fa-user"></i>
                    </div>

                    <input type="file" id="filesx" name="filesx" placeholder="">

                </div>
               
                <div  class="input_normaltarjeta">
                    <div  class="progrss">
                        <div  class="progressbarr">
                            <progress style="width: 300px; margin:0 auto;
                            margin-left: 150px;" id="progressBar" value="0" max="100"></progress>

                            <div class="text-progrss">
                                <p style = "width: 300px;padding: 0 0; margin: 0 auto; margin-left: 150px;
                                margin-top: -8px; color:#9b9b9b; font-size: small;" id="loaded_n_total"></p>
                                <h3 style = "width: 300px;padding: 0 0; margin: 0 auto; margin-left: 150px; color:#9b9b9b; font-size: small;" id="status"></h3>
                            </div>
                        </div>


                    </div>
                </div>
                <div style="display:none;" class="input_normaltarjeta">
                    <div class="icono__input1">
                        <i class="far fa-user"></i>
                    </div>
                    <input type="text" id="urlfoto" name="urlfoto" placeholder="" disabled>
                </div>
                <div class="input_normaltarjeta">
                    <div class="icono__input1">
                        <i class="far fa-user"></i>
                    </div>

                    <input type="text" id="tema" name="tema" placeholder="Tema">
                </div>
                <div class="input_normaltarjeta">
                    <div class="icono__input1">
                        <i class="far fa-user"></i>
                    </div>

                    <input type="text" id="subtema" name="subtema" placeholder="Sub-Tema">
                </div>
                <div class="input_normaltarjeta">
                    <div class="icono__input1">
                        <i class="far fa-user"></i>
                    </div>

                    <input type="text" id="lugar" name="lugar" placeholder="Lugar de donde viene">
                </div>
                <div class="input_normaltarjeta">
                    <div class="icono__input1">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <input type="tel" id="number" name="number" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Ingresa tu Teléfono" />

                </div>
                <div class="input_normaltarjeta">
                    <div class="icono__input1">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <input type="text" id="correo" name="correo" placeholder="Ingresa tu Correo">
                </div>
                <div class="recordatorio">
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
            <input id="btnform" type="submit" value="Up SiamGrup" class="button">
        </div>
    </form>
</div>