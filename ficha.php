<?php

    include_once 'includes/templates/header.php';
    
    
    if (!isset($_SESSION['usuario']) || $_SESSION['tipo'] != '0') {
     
    
      session_destroy();
      
      // header('location:logout.php');
      ?><META HTTP-EQUIV="REFRESH" CONTENT=".1;URL=https://sociedadintelectualdelaguacatemexicano.com/logout.php"><?php
    
      
    } else {
        ?>
        <section class="global">
        <?php
        require_once('includes/templates/footer.php');
    }
?>