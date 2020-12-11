<?php
//credenciales  de la base de datos

// define('DB_USUARIO', 'root');
// define('DB_PASSWORD', '');
// define('DB_HOST', 'localhost');
// define('DB_NOMBRE', 'f');

// define('DB_USUARIO', 'uvq976vkwkacr');
// define('DB_PASSWORD', 'josehyo2002k5angelruiz');
// define('DB_HOST', 'sociedadintelectualdelaguacatemexicano.com/');
// define('DB_NOMBRE', 'dbhbg4tq3xud6p');
// $conn = new mysqli(DB_HOST, DB_USUARIO, DB_PASSWORD, DB_NOMBRE);
// echo $conn->ping();

// try{
     // $conn = new PDO('mysql:host=localhost;dbname=trackpc_reg_log1', 'root', '');
     //$conn = new mysqli("localhost", "root", "", "trackpc_reg_log1");
//     echo "OK";
// }catch(PDOException $e){
//     echo "Error: " .$e->getMessage();
// }

// $username="uvq976vkwkacr";
// $password= "oe>m5c1w4:31";
$database="dbkwkacrwe84ac";
// $conn = new mysqli("localhost",$username, $password, $database);
// echo "autenticabd";
$username="root";
$password="";
// $database="dbkwkacrwe84ac";
// $connf = new mysqli("localhost",$username, $password, $database);
$conn = new PDO('mysql:host=localhost;dbname=dbkwkacrwe84ac', $username, $password);
// echo $conn->ping();

?>