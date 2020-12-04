<?php  
require_once('includes/templates/header.php');
if(!isset($_SESSION['usuario'])){
    ?>
    <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=http://localhost/0SIAM/login.php#ini">
    
    <?php
}
?>
<section class="global">
    <div class="contenedor">
        <h1>hola</h1>
    </div>
</section>
<?php  
require_once('includes/templates/footer.php');
?>