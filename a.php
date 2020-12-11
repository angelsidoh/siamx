
<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "angel._ruiz@hotmail.com
    .com";
    $to = "angelsidohpubg@gmail.com
    ";
    $subject = "Datos inportantes de cuenta SIAM";
    $message = "Tus datos serán generados automaticamente podras verlos desde la tu acceso";
    $headers = "From:" . $from;
    
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";
?>