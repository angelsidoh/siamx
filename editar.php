<?php 
   include_once 'includes/templates/header.php';
   require_once('includes/funciones/funcionestwo.php');
    if(!isset($_SESSION['usuario']) || $_SESSION['tipo'] != '1'){
    
        session_destroy();
  
        // header('location:logout.php');
        ?><META HTTP-EQUIV="REFRESH" CONTENT=".1;URL=http://localhost/0SIAM/logout.php"><?php
        
die();
    }else{
        

        $id = filter_var($_GET['id'], FILTER_VALIDATE_INT);

        if(!$id){
            die('No es válido');
        }
        $resultado = obtenerContacto($id);
        $contacto = $resultado->fetch_assoc();

        var_dump($contacto);

?>
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