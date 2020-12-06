<?php
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
function enviar_correo($nombre,$apellido,$pass,$correo){
        $nombreutf = utf8_decode($nombre);
        $apellidoutf = utf8_decode($apellido);
        require 'phpmail/Exception.php';
        require 'phpmail/PHPMailer.php';
        require 'phpmail/SMTP.php';
        // Load Composer's autoloader
    require 'vendor/autoload.php';

    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'sociedadintelectualdelaguacatemexicano.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'info@sociedadintelectualdelaguacatemexicano.com';                     // SMTP username
        $mail->Password   = 'hyo2002k5';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('info@sociedadintelectualdelaguacatemexicano.com', 'SIAM AC');
        $mail->addAddress($correo, $nombreutf.$apellidoutf);     // Add a recipient
        $mail->addCC('joseangelruizchavez@gmail.com');
        
        

        // Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $contrasenia = utf8_decode('contraseña');
        $sesion = utf8_decode('sesión');
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Datos de Cuenta SIAM';
        $mail->Body    = '

        
        <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

        <div style="background-color: #56ae4d;
                    width:600px;
                    height:900px;
                    margin:0 auto;
                    box-shadow: -1px -1px 5px rgb(255, 255, 255, 0.1),
                    1px 1px 20px rgba(0,0,0,0.7),
                    inset 1px -1px 5px rgb(255, 255, 255, 0.1),
                    inset 1px 1px 5px rgba(0,0,0,0.7);" class="header">
                    <div style="
                    width:550px;
                    height:280;
                    margin: 0 auto;
                "class="imagen">
                        <img style="
                    width:550px;
                    height:150px;
                    margin: 0 auto;
                "src="https://sociedadintelectualdelaguacatemexicano.com/img/bannercorreo.jpg" alt="imagen">
                    </div>
                    <div
                    style="
                    text-align: center;
                    color:#ffffff;
                    "
                    class="textbienvenida">
                    <h1 style="color:#f5d108; font-size:45px;">Bienvenido(a) <h1>
                    <h2>Tu registro fue exitoso</h2> 
                    <h3>Ahora puedes iniciar '.$sesion.' con los siguientes datos:</h3>
                    
                    <h2>Ingresa tu correo:</h2>
                    <h1 style="color:#000000;">'.$correo.'</h1>
                    <h2>Y tu '.$contrasenia.' :</h2>
                    <h1 style="color:#000000;">'.$pass.'</h1>
                    <a 
                    style="
                    background-color: #fe4918;
                    padding: 1px 40px;
                    color: #ffffff;
                    text-transform: uppercase;
                    font-weight: bold;
                    text-decoration: none;
                    font-size: 20px;
                    border-radius:12px;
                    display: inline-block;
                    transition: all .1s ease;
                    border: 2px solid #fe4918;
                    "href="https://sociedadintelectualdelaguacatemexicano.com/login.php#ini"><p>IR A SIAM A.C</p>
                    </a>
                    
                    </div>
                

        
        </div>
        
                            
    </body>
    </html>
        ';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        // echo 'Message has been sent';
    } catch (Exception $e) {
        // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

?>