<?php
session_start();


if($_POST['accion'] == 'editar'){
    require_once('../funciones/bd.php');

    //validar entradas
    $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    $apellido = filter_var($_POST['apellido'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $telefono = filter_var($_POST['numerotel'], FILTER_SANITIZE_NUMBER_INT);
    $boleto = filter_var($_POST['boleto'], FILTER_SANITIZE_NUMBER_INT);
    $id = filter_var($_POST['id'],FILTER_SANITIZE_NUMBER_INT);
    
    try{
        $stmt = $conn->prepare("UPDATE eventocursofeb2020 SET nombre_usercurfeb = ?, apellido_usercurfeb = ?, correo_usercurfeb = ?, tel_usercurfeb = ?, numbolet_usercurfeb = ? WHERE id_usercurfeb = ?");

        $stmt->bind_param("ssssii", $nombre, $apellido, $email, $telefono, $boleto, $id);
        
        $stmt->execute();

        if($stmt->affected_rows == 1){
            $respuesta = array(
                'respuesta' => 'correcto'
            );
            
        }else{
            $respuesta = array(
                'respuesta' => 'error'
            );
            
        }
        $stmt->close();
        $conn->close();

    }catch(Exception $e){
            $respuesta = array(
                'error' => $e->getMessage()
            );
    }

    echo json_encode($respuesta);
}
?>