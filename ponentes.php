<?php  
require_once('includes/funciones/funcionestwo.php');

session_start();
if(!isset($_SESSION['usuario']) || $_SESSION['tipo'] != '2'){
  
        header('location: logout.php');
        
   die();
    }else{
        include_once 'includes/templates/header.php'
?>

<section class="global">
    <div class="contenedor">
        <h1>Ponentes</h1>
    </div>
</section>
    <?php } 
require_once('includes/templates/footer.php');
?>