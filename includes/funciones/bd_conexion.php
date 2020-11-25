<?php
    // $conn = new mysqli('congresomexicanodelaguacate2020.com','congreso_userANGEL1','rootcongreso01','congreso_ANGEL1');
    $conn = new mysqli('localhost','root','','congresomex');
    if($conn->connect_error){
        echo $error -> $conn->conect_error;
    } 
?>
