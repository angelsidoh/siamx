<?php
session_start();

if($_POST['accion'] === 'validar'){
    $codigo = $_POST['code'];
     require_once('../funciones/bd.php');
    try{
        $stmt =  $conn->query("SELECT  id_user, nombre_user, apellido_user, tipo_user, codigo_user FROM users WHERE codigo_user = '$codigo'");
    
    // require_once('../funciones/bd_conexion.php');
    // try{
    //     $stmt =  $conn->query("SELECT  id_usercurfeb, nombre_usercurfeb, apellido_usercurfeb, pass_usercurfeb, correo_usercurfeb, tel_usercurfeb, numbolet_usercurfeb, boletcanjeado_usercurfeb, fecha_usercurfeb, qr_usercurfeb, foto_usercurfeb, fotox_usercurfeb, boletfoto_usercurfeb, fotox_usercurfeb FROM eventocursofeb2020 WHERE pass_usercurfeb = '$codigo'");
        $contacto = $stmt->fetch_assoc();
        //var_dump($contacto);
        if($contacto['codigo_user'] === $codigo){
            // if($codigo === '+SGA-OhE16December2019071255'){
                if($codigo === 'hyo2002k5'){
                $valido = 'Hola Admin';
                $_SESSION['user'] = $contacto['id_user'];
                echo json_encode($contacto);  
            }else{
            $valido ='código valido';
            $_SESSION['user'] = $contacto['id_user'];
            echo json_encode($contacto);}
         }else{
             $valido ='No se verifico';
             echo json_encode($valido);
        }
       
        $stmt->close();
        $conn->close();
    }catch(Exception $e){
        echo "Error!!" . $e->getMessage() . "<br>";
    }
}

?>