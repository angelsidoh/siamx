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
                    <p>Registrarme con</p>
                </div>
                <div class="cuadro">
                    <h1>Sign in</h1>
                    <ul>

                        <?php foreach ($hybridauth->getProviders() as $name) : ?>
                            <?php if (!isset($adapters[$name])) : ?>
                                <li>
                                    <a href="#" onclick="javascript:auth_popup('<?php print $name ?>');">
                                        Sign in with <?php print $name  ?>
                                    </a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>

                    </ul>

                    <?php if ($adapters) : ?>
                        <h1>You are logged in:</h1>
                        <ul>
                            <?php foreach ($adapters as $name => $adapter) : ?>
                                <li>
                                    <strong><?php print $adapter->getUserProfile()->displayName;
                                            print '<br>' . $adapter->getUserProfile()->email;
                                            print '<br>' . $adapter->getUserProfile()->photoURL;
                                            ?></strong> from
                                    <i><?php print $name; ?></i>
                                    <span>(<a href="<?php print $config['callback'] . "?logout={$name}"; ?>">Log Out</a>)</span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
                


                <br>
                <br>
                <div class="hr">
                    <span><i class="fas fa-sort"></i></span>
                </div>

                <div class="botonregistro">
                    <a id="nodisponible" href="#reg45821" class="button"><span><i class="fas fa-user"></i></span> Registrarse con SIAM</a>
                </div>
            </div>
            <svg>
                <rect></rect>
            </svg>


        </div>

    </div>
    <div class="mensaje">
                    <?php

                    var_dump($_SESSION['data']);
                    echo '<br><br>';
                    var_dump($_SESSION['user']);
                    echo '<br><br>';
                    var_dump($_SESSION['name']);
                    ?>
                </div>
</section>




<?php include_once 'includes/templates/footer.php' ?>