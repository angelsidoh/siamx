<?php 
 session_start();
     if ($_POST['accion'] == 'iniciar sesion'){
        $mail = filter_var($_POST['correo'],FILTER_SANITIZE_STRING);
        $pass = filter_var($_POST['pass'],FILTER_SANITIZE_STRING);
        try{
            require('../../basedatos/bd.php');
           
            $stmt = $conn->prepare('SELECT * FROM usuarios WHERE correo_usuario = :correo_usuario AND pass_usuario = :pass_usuario');
            $stmt->execute(array(':correo_usuario' => $mail, 'pass_usuario' => $pass));
            $resultado = $stmt->fetch();
            if($resultado != false){
                $respuesta = array(
                    'mails'=> $mail,
                    'pass' => $pass
                );
               
                $respuesta = array(
                    'Estado'=> 'Correcto',
                    'Usuario' => $resultado['nombre_usuario'],
                    'Tipo'=> $resultado['tipo_usuario']
                );
                $_SESSION['usuario'] = $resultado['nombre_usuario'];
                $_SESSION['tipo'] = $resultado['tipo_usuario'];
                $_SESSION['correo'] = $resultado['correo_usuario']; 
            }else{
                $respuesta = array(
                    'Estado'=> 'Incorrecto'
                );
            }
            echo json_encode($respuesta); 
            }catch(PDOException $e){
                 echo json_encode("Error: " .$e->getMessage());
            
        }
    }
?>