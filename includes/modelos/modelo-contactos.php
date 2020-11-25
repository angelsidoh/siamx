<?php
session_start();
 //echo json_encode($_SESSION['user']);
if($_POST['accion'] == 'crear'){
    require_once('../funciones/bd.php');

    //validar entradas
    $nombre1 = utf8_encode(filter_var($_POST['nombre'], FILTER_SANITIZE_STRING));
    $apellido1 = utf8_encode(filter_var($_POST['apellido'], FILTER_SANITIZE_STRING));
    $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    $apellido = filter_var($_POST['apellido'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $telefono = filter_var($_POST['numerotel'], FILTER_SANITIZE_NUMBER_INT);
    $boleto = filter_var($_POST['boleto'], FILTER_SANITIZE_NUMBER_INT);
    setlocale(LC_TIME, 'spanish');
    date_default_timezone_set("America/Mexico_City");
    $str = ("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!#$%&/()=+-~1234567890");
    $pass = "";
    for($i=0; $i < 8 ; $i++ ){
        $pass .= substr($str, rand(0, 74), 1);
    }
    $pass .=  date("dFYHis",time());
    $pass .= "1";
    $fecha = date('Y-m-d H:i:s');
    $contenido = "<html>
            <center><body>
            <div style='background-color:#ffffff;'>
            <img src='https://congresomexicanodelaguacate2020.com/img/BienvenidoCorreoCompraTrue3.png' href='https://congresomexicanodelaguacate2020.com/' alt='Congreso 2020'/>
            </div>";
            $contenido .= utf8_decode("<pGracias por adquirir un boleto para el próximo curso MANEJO DE PRÁCTICAS FRUTÍCOLA y CULTURALES DEL AGUACATERO
            <span style='color : black ; font-weight : bold; margin: 10px;'>" . "!</span><br><br>
            Por favor copia e ingresa el siguiente código: " . "<br><b><big><big>" . 
            
            $pass . "</big></big><br></b>" . " <a href='https://congresomexicanodelaguacate2020.com/curfecind.php' style = '
                background-color: #fe4918;
                padding: 2px 8px;
                color: #ffffff;
                text-transform: uppercase;
                font-weight: bold;
                text-decoration: none;
                font-size: 1rem;
                border: 2px solid #fe4918;
                margin: 10px 10px 10px 10px;
            '>->Clic Aquí Para Ingresar Código<-</a>" . "<br>" . "Si el botón no funciona copia y pega la siguiente url:" . "<br>" .
            "https://congresomexicanodelaguacate2020.com/curfecind.php" . "<br>" .
            "Tu Nombre completo es: " . $nombre1 . " " . $apellido1 . "<br>" .
            "Tu boleto es: " . $boleto . "<br><br>"  . "<small style='color : #FEC8D6;'>Este email fue enviado desde https://congresomexicanodelaguacate2020.com sitio desarrollado para eventos del aguacate en México por Sociedad Intelectual del Aguacate Mexicano SIAM A.C. </small></p>
            </body></center>
            </html>");  
                    
            $headers = "MIME-Version: 1.0\r\n"; 
            $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
                    
            //dirección del remitente 
            $headers .= "From: Congreso Mexicano del Aguacate <congresoaguacate2020@gmail.com>\r\n"; 
            
            //dirección de respuesta, si queremos que sea distinta que la del remitente 
            //$headers .= "Reply-To: mariano@desarrolloweb.com\r\n"; 
            
            //ruta del mensaje desde origen a destino 
            //$headers .= "Return-path: holahola@desarrolloweb.com\r\n"; 
            
            //direcciones que recibián copia 
            $headers .= "Cc: ibauruapanmichoacan@gmail.com\r\n"; 

            ini_set('display_errors', 1);
            error_reporting( E_ALL);
            
            $mailtouser = mail("$email", "Datos Importantes https//:congresomexicanodelaguacate2020.com", $contenido, $headers);
    try{
        $stmt = $conn->prepare("INSERT INTO eventocursofeb2020 (nombre_usercurfeb, apellido_usercurfeb, correo_usercurfeb, tel_usercurfeb, numbolet_usercurfeb, fecha_usercurfeb, pass_usercurfeb) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssiss", $nombre, $apellido, $email, $telefono, $boleto, $fecha, $pass);
        
        $stmt->execute();
        if($stmt->affected_rows == 1){
            $respuesta = array(
                'respuesta' => 'correcto',
                'datos' => array(
                    'nombre' => $nombre,
                    'apellido' =>$apellido,
                    'email' => $email,
                    'telefono' => $telefono,
                    'boleto' => $boleto,
                    'codigo' => $pass,
                    'fecha' => $fecha,
                    'id_insertado' => $stmt->insert_id
                )

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