<?php
    session_start();


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
              
                    $stmt = $conn->prepare('INSERT INTO usuarios (id_usuario, nombre_usuario, apellido_usuario, pass_usuario, correo_usuario, telefono_usuario, fecha_usuario) VALUES (null, :nombre_usuario, :apellido_usuario, :pass_usuario, :correo_usuario, :telefono_usuario, :fecha_usuario)');
                    $stmt->execute(array(':nombre_usuario' => $usuario,
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
                    
                        $contenido = "<html>
                        <center><body>
                        <div style='background-color:#ffffff;'>
                        <img src='https://sociedadintelectualdelaguacatemexicano.com/img/IMG_4635mod002reducida-min.jpg' href='https://sociedadintelectualdelaguacatemexicano.com/' alt='SIAM'/>
                        </div>";
                        $contenido .= utf8_decode("<pTe doy la bienvenida a SIAM te has registrado y queremos compartir contigo tu contraseña, guárdala en un lugar seguro, así tendrás acceso a la plataforma y poder ver las ventajas que están listas para ti.
                        <span style='color : black ; font-weight : bold; margin: 10px;'>" . "!</span><br><br>
                        Tu contraseña es: " . "<br><b><big><big>" . 
                        
                        $pass . "</big></big><br></b>" . " <a href='https://sociedadintelectualdelaguacatemexicano.com/login.php#ini' style = '
                            background-color: #fe4918;
                            padding: 2px 8px;
                            color: #ffffff;
                            text-transform: uppercase;
                            font-weight: bold;
                            text-decoration: none;
                            font-size: 1rem;
                            border: 2px solid #fe4918;
                            margin: 10px 10px 10px 10px;
                        '>->Clic Aquí Para Inicar sesión<-</a>" . "<br>" . "Si el botón no funciona copia y pega la siguiente url:" . "<br>" .
                        "https://sociedadintelectualdelaguacatemexicano.com/login.php#ini" . "<br>" .
                        "Tu Nombre completo es: " . $nombre . " " . $apellido . "<br><br>"  . 
                        "<small style='color : #FEC8D6; font-size: 14px;'>Este email fue enviado desde https://sociedadintelectualdelaguacatemexicano.com/ sitio desarrollado para eventos del aguacate en México por Sociedad Intelectual del Aguacate Mexicano SIAM A.C. </small></p>
                        </body></center>
                        </html>");  
                                
                        $headers = "MIME-Version: 1.0\r\n"; 
                        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
                                
                        //dirección del remitente 
                        $headers .= "From: SIAM AC.<congresoaguacate2020@gmail.com>\r\n"; 
                        
                        //dirección de respuesta, si queremos que sea distinta que la del remitente 
                        //$headers .= "Reply-To: mariano@desarrolloweb.com\r\n"; 
                        
                        //ruta del mensaje desde origen a destino 
                        //$headers .= "Return-path: holahola@desarrolloweb.com\r\n"; 
                        
                        //direcciones que recibián copia 
                        $headers .= "Cc: ibauruapanmichoacan@gmail.com\r\n"; 

                        ini_set('display_errors', 1);
                        error_reporting( E_ALL);
                    //    Activar para enviar correos IMPORTANTE
                        $mailtouser = mail("joseangelruizchavez@gmail.com", "DATOS DE CUENTA SIAM https://sociedadintelectualdelaguacatemexicano.com/", $contenido, $headers);
                    
                
            }
                echo json_encode($respuesta); 
            }catch(PDOException $e){
                 echo json_encode("Error: " .$e->getMessage());
            }
        }
?>