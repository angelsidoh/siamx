<?php  
include_once 'includes/templates/header.php';
require_once('includes/funciones/funcionestwo.php');


if(!isset($_SESSION['usuario']) || $_SESSION['tipo'] != '2'){
  
    session_destroy();
  
    // header('location:logout.php');
    ?><META HTTP-EQUIV="REFRESH" CONTENT=".1;URL=http://localhost/0SIAM/logout.php"><?php
    }else{
        
?>

<section class="global">
    <div class="contenedor">
        <h1>Ponentes</h1>
    </div>
</section>
    <?php } 
require_once('includes/templates/footer.php');
?>