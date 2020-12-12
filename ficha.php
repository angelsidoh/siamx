<?php

    include_once 'includes/templates/header.php';
    require_once('includes/funciones/funcionestwo.php');
    
    
    if (!isset($_SESSION['usuario']) || $_SESSION['tipo'] != '0') {
     
    
      session_destroy();
      
      // header('location:logout.php');
      ?><META HTTP-EQUIV="REFRESH" CONTENT=".1;URL=https://sociedadintelectualdelaguacatemexicano.com/logout.php"><?php
    
      
    } else {
        ?>
      <section class="global">


      <?php 
       $resultado = obtenerFicha($_SESSION['correo']);
       $contacto = $resultado->fetch_assoc();

       var_dump($contacto);
      
      ?>  
        <div class="bg-amarillo contenedor1 sombra">
    <form id="contacto" action="#">
        <legend>Ficha de Inscripción<span>Diplomado para Profesionalización Del cultivo del Aguacate</span></legend>
        <?php include 'includes/layout/formulario.php' ?>
        <br>
        <a class="btn volver" href="adminpagos.php#listado-contacto">Volver</a>
    </form>
</div>
      </section>
      <script src="js/app.js?v=<?php echo time(); ?>"></script>
        <?php
        require_once('includes/templates/footer.php');
    }
?>