<?php
    session_start();
    require '../../send-mail.php';
    if ($_POST['accion'] == 'Crear cuenta SIAM'){
        $usuario = filter_var($_POST['usuario'],FILTER_SANITIZE_STRING);
        $apellido = filter_var($_POST['apellido'],FILTER_SANITIZE_STRING);
        $tel = filter_var($_POST['tel'],FILTER_SANITIZE_STRING);
        $mail = filter_var($_POST['correo'],FILTER_SANITIZE_EMAIL);
        $fecha = date('Y-m-d H:i:s');
        $str = ("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!#$%&/()=+-~1234567890");
        $pass = "";
        for($i=0; $i < 8 ; $i++ ){
            $pass .= substr($str, rand(0, 74), 1);
        }
        $errores ='';
        $imguserdefaut = 'https://sociedadintelectualdelaguacatemexicano.com/img/avatars/avatar3.JPG';
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
                $stmt = $conn->prepare('INSERT INTO usuarios (id_usuario, nombre_usuario, apellido_usuario, pass_usuario, correo_usuario, telefono_usuario, fecha_usuario) VALUES (null, :nombre_usuario, :apellido_usuario, :pass_usuario, :correo_usuario, :telefono_usuario, :fecha_usuario)');
                $stmt->execute(array(   ':nombre_usuario' => $usuario,
                                        ':apellido_usuario'=>$apellido,
                                        ':pass_usuario' => $pass,
                                        ':correo_usuario' => $mail,
                                        ':telefono_usuario' => $tel,
                                        ':fecha_usuario' => $fecha));
                $LAST_ID = $conn->lastInsertId();
                // firstimereglog($mail, $imguserdefaut);
            
            
                $respuesta = array(
                    'estado' => 'disponible',
                    'datos' => $LAST_ID
                );
                $_SESSION['usuario'] = $usuario;
                if($LAST_ID == 0){
                    $respuesta = array(
                        'estado' => 'errorINSERTARenBD'
                        
                    );  
                    session_destroy();
                }
                enviar_correo($usuario,$apellido,$pass,$mail);

                
            }
                echo json_encode($respuesta); 
            }catch(PDOException $e){
                 echo json_encode("Error: " .$e->getMessage());
            }
        }
?>