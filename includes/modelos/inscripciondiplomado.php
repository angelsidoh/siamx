<?php
session_start();
if ($_POST['accionx'] == 'Inscribirme al diplomado'){
    $inscripcion = filter_var($_POST['inscripcion'],FILTER_SANITIZE_NUMBER_INT);
    $deposito = filter_var($_POST['deposito'],FILTER_SANITIZE_NUMBER_INT);
    $trasnferencia = filter_var($_POST['trasnferencia'],FILTER_SANITIZE_NUMBER_INT);
    $factura = filter_var($_POST['factura'],FILTER_SANITIZE_NUMBER_INT);
    $rfc = filter_var($_POST['rfc'],FILTER_SANITIZE_STRING);
    $cfdi = filter_var($_POST['cfdi'],FILTER_SANITIZE_STRING);
    $domiciliof = filter_var($_POST['domiciliof'],FILTER_SANITIZE_STRING);
    $mail = $_SESSION['correo'];
    try{
        require('../../basedatos/bd.php');
        $stmt = $conn->prepare('SELECT * FROM usuarios WHERE correo_usuario = :correo_usuario LIMIT 1');
        $stmt->execute(array(':correo_usuario' => $mail));
        $resultado = $stmt->fetch();
        if($resultado != false){
            $respuesta = array(
                'estado'=>'correoexiste'
            );
            require('../../basedatos/bdsqli.php');
            $stmt = $connf->prepare('UPDATE usuarios SET inscripcion_usuario = ?, deposito_usuario = ?, transferencia_usuario = ?, factura_usuario = ?, rfc_usuario = ?, cfdi_usuario = ?, domiciliofiscal_usuario = ? WHERE correo_usuario = ?' );
                            $stmt->bind_param('iiiissss', $inscripcion, $deposito,$trasnferencia,$factura,$rfc,$cfdi,$domiciliof, $mail);
                            $stmt->execute();         
            $stmt->close();
            $connf->close();
        }else{
            $respuesta = array(
                'estado'=>'noexiste'
            );
            
            }
            echo json_encode($respuesta); 
        }catch(PDOException $e){
             echo json_encode("Error: " .$e->getMessage());
        }
    
    
    
}
?>