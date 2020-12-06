<?php
//credenciales  de la base de datos

// define('DB_USUARIO', 'root');
// define('DB_PASSWORD', '');
// define('DB_HOST', 'localhost');
// define('DB_NOMBRE', 'trackpc_reg_log1');


// define('DB_USUARIO', 'congreso_userANGEL1');
// define('DB_PASSWORD', 'rootcongreso01');
// define('DB_HOST', 'congresomexicanodelaguacate2020.com');
// define('DB_NOMBRE', 'congreso_ANGEL1');

// $conn = new mysqli(DB_HOST, DB_USUARIO, DB_PASSWORD, DB_NOMBRE);

// echo $conn->ping();

// try{
    //  $conn = new PDO('mysql:host=localhost;dbname=trackpc_reg_log1', 'root', '');
    $username="root";
$password="";
//     $username="uvq976vkwkacr";
// $password="josehyo2002k5angelruiz";
    $database="dbkwkacrwe84ac";
    $connf = new mysqli("localhost",$username, $password, $database);
     //echo $connf->ping();
//     echo "OK";
// }catch(PDOException $e){
//     echo "Error: " .$e->getMessage();
// }

?>