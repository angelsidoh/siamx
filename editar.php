<?php include 'includes/templates/header.php'; ?>
<?php include 'includes/funciones/funcionestwo.php'; ?>
<?php 


if($_SESSION['tipo'] != 99){
    if($_SESSION['tipo'] != 1){
        ?>
        <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=http://localhost/0SIAM/logout.php">
        
        <?php
    }
}
if(isset($_SESSION['usuario'])){
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
<?php }else{  header('Location: logout.php');
    }?>
<?php include 'includes/templates/footer.php'; ?>