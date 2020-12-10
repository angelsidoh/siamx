<?php
session_start();


if($_POST['accion'] == 'editar'){
   
    require_once('../../basedatos/bdsqli.php');
    // echo json_encode($_POST);
    //validar entradas
    
    $tiket = filter_var($_POST['tiket'], FILTER_SANITIZE_STRING);
    $pago = filter_var($_POST['pago'],FILTER_SANITIZE_NUMBER_INT);
    $id = filter_var($_POST['id'],FILTER_SANITIZE_NUMBER_INT);
    $factura = filter_var($_POST['facturaestado'],FILTER_SANITIZE_NUMBER_INT);
    // echo json_encode($tiket.$pago.$id);
    
    try{
        
        $stmt = $connf->prepare("UPDATE usuarios SET tiked_usuario = ?, estado_usuario = ?, estadofactura_usuario = ? WHERE id_usuario = ?");
        
        $stmt->bind_param("siii", $tiket, $pago, $factura, $id);
        
        $stmt->execute();
        
        if($stmt->affected_rows == 1){
            $respuesta = array(
                'respuesta' => 'correcto'
            );
            
        }
        
        $stmt->close();
        $connf->close();
        

    }catch(Exception $e){
            $respuesta = array(
                'error' => $e->getMessage()
            );
    }

    echo json_encode($respuesta);
}
?>