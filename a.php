
<?php
    $str = ("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!#$%&/()=+-~1234567890");
    $pass = "";
    for($i=0; $i < 8 ; $i++ ){
        $pass .= substr($str, rand(0, 74), 1);
    }
    echo $pass;
?>