<?php

function obtenerContactos(){
    include 'includes/funciones/bd.php';
    try{
        return $conn->query("SELECT  id_user, nombre_user, apellido_user, codigo_user, tipo_user, correo_user, tel_user, fecha_user, profesion_user, idboleto_user FROM users");
    }catch(Exception $e){
        echo "Error!!" . $e->getMessage() . "<br>";
        return false;
    }
}

function obtenerContacto($id){
    include 'includes/funciones/bd.php';
    try{
        return $conn->query("SELECT  id_user, nombre_user, apellido_user, codigo_user, tipo_user, correo_user, tel_user, fecha_user, profesion_user, idboleto_user, imgfa_user, imgba_user, curriculo FROM users WHERE id_user = '$id'");
    }catch(Exception $e){
        echo "Error!!" . $e->getMessage() . "<br>";
        return false;
    }
}




// function obtenerContactos(){
//     include 'includes/funciones/bd.php';
//     try{
//         return $conn->query("SELECT  id_usercurfeb, nombre_usercurfeb, apellido_usercurfeb, pass_usercurfeb, correo_usercurfeb, tel_usercurfeb, numbolet_usercurfeb, boletcanjeado_usercurfeb, fecha_usercurfeb, qr_usercurfeb, foto_usercurfeb, fotox_usercurfeb, boletfoto_usercurfeb, fotox_usercurfeb FROM eventocursofeb2020");
//     }catch(Exception $e){
//         echo "Error!!" . $e->getMessage() . "<br>";
//         return false;
//     }
// }

// function obtenerContacto($id){
//     include 'includes/funciones/bd.php';
//     try{
//         return $conn->query("SELECT  id_usercurfeb, nombre_usercurfeb, apellido_usercurfeb, pass_usercurfeb, correo_usercurfeb, tel_usercurfeb, numbolet_usercurfeb, boletcanjeado_usercurfeb, fecha_usercurfeb, qr_usercurfeb, foto_usercurfeb, fotox_usercurfeb, boletfoto_usercurfeb, fotox_usercurfeb FROM eventocursofeb2020 WHERE id_usercurfeb = '$id'");
//     }catch(Exception $e){
//         echo "Error!!" . $e->getMessage() . "<br>";
//         return false;
//     }
// }

// function obtenerCode($codigo){
    //echo $codigo;
    // include 'includes/funciones/bd.php';
    // try{
    //     return $conn->query("SELECT  id_mm, nombre_mm, apellido_mm, email_mm, telefono_mm, boleto_mm, codigo_mm FROM upcase WHERE codigo_mm = '$codigo'");
    // }catch(Exception $e){
    //     echo "Error!!" . $e->getMessage() . "<br>";
    //     return false;
    // }
// }
// function obtenerContactos(){
//     include 'bd.php';
//     try{
//         return $conn->query("SELECT id_mm, nombre_mm, apellido_mm, email_mm, telefono_mm, boleto_mm, codigo_mm  FROM upcase");
//     }catch(Exception $e){
//         echo "Error!!" . $e->getMessage() . "<br>";
//         return false;
//     }
// }

// function obtenerContacto($id){
//     include 'bd.php';
//     try{
//         return $conn->query("SELECT  id_mm, nombre_mm, apellido_mm, email_mm, telefono_mm, boleto_mm, codigo_mm, imgf_mm, imgb_mm FROM upcase WHERE id_mm = $id");
//     }catch(Exception $e){
//         echo "Error!!" . $e->getMessage() . "<br>";
//         return false;
//     }
// }

// function obtenerCode($codigo){
//     //echo $codigo;
//     include 'bd.php';
//     try{
//         return $conn->query("SELECT  id_mm, nombre_mm, apellido_mm, email_mm, telefono_mm, boleto_mm, codigo_mm FROM upcase WHERE codigo_mm = '$codigo'");
//     }catch(Exception $e){
//         echo "Error!!" . $e->getMessage() . "<br>";
//         return false;
//     }
// }