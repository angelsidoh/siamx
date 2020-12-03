<?php
    if ($_POST['accion'] == 'Crear cuenta SIAM'){
        $usuario = filter_var($_POST['usuario'],FILTER_SANITIZE_STRING);
        $mail = filter_var($_POST['correo'],FILTER_SANITIZE_EMAIL);
        $fecha = date('Y-m-d H:i:s');
        $str = ("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!#$%&/()=+-~1234567890");
        $pass = "";
        for($i=0; $i < 8 ; $i++ ){
            $pass .= substr($str, rand(0, 74), 1);
        }
        $errores ='';
        $imguserdefaut = 'http://localhost/0SIAM/img/Avatars/avatar3.jpg';
        try{
            require('../../basedatos/bd.php');
            $stmt = $conn->prepare('SELECT * FROM usuarios WHERE correo_usuario = :correo_usuario LIMIT 1');
            $stmt->execute(array(':correo_usuario' => $mail));
            $resultado = $stmt->fetch();
            if($resultado != false){
              
                $respuesta = array(
                    'estado'=>'correoexiste'
                );
            }else{
                $respuesta = array(
                    'estado' => 'correcto',
                    'correo' => $mail
                );
            }
                echo json_encode($respuesta); 
            }catch(PDOException $e){
                 echo json_encode("Error: " .$e->getMessage());
            }
        }
?>