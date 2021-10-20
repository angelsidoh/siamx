<?php 
if ($_POST['accion'] == 'Up SiamGrup'){
    $nombre = filter_var($_POST['nombre'],FILTER_SANITIZE_STRING);
    $apellido = filter_var($_POST['apellido'],FILTER_SANITIZE_STRING);
    $tel = filter_var($_POST['tel'],FILTER_SANITIZE_STRING);
    $profesion = filter_var($_POST['profesion'],FILTER_SANITIZE_STRING);
    $descripcion = filter_var($_POST['descripcion'],FILTER_SANITIZE_STRING);
    $fecha = filter_var($_POST['fecha'],FILTER_SANITIZE_STRING);
    $hora = filter_var($_POST['hora'],FILTER_SANITIZE_STRING);
    $urlfoto = $_POST['urlfoto'];
    $correo = filter_var($_POST['correo'],FILTER_SANITIZE_EMAIL);
    $tema = filter_var($_POST['tema'],FILTER_SANITIZE_STRING);
    $subtema = filter_var($_POST['subtema'],FILTER_SANITIZE_STRING);
    $lugar = filter_var($_POST['lugar'],FILTER_SANITIZE_STRING);
    try{
        require('../../basedatos/bd.php');
        $stmt = $conn->prepare('SELECT * FROM invitados WHERE email_invitado = :email_invitado LIMIT 1');
            $stmt->execute(array(':email_invitado' => $correo));
            $resultado = $stmt->fetch();
            if($resultado != false){
                $respuesta = array(
                    'estado'=>'correo existe'
                );
            }else{
                $stmt = $conn->prepare('INSERT INTO invitados (id_invitados, nombre_invitado, apellido_invitado, descripcion_invitado,
                email_invitado,
                tel_invitado,
                especialidad_invitado,
                hora_invitado,
                fecha_invitado,
                foto_invitado,
                tema_invitado,
                subtema_invitado,
                lugar_invitado
                ) VALUES (null, :nombre_invitado,
                        :apellido_invitado,
                        :descripcion_invitado,
                        :email_invitado,
                        :tel_invitado,
                        :especialidad_invitado,
                        :hora_invitado,
                        :fecha_invitado,
                        :foto_invitado,
                        :tema_invitado,
                        :subtema_invitado,
                        :lugar_invitado
                )');
                $stmt->execute(array(   ':nombre_invitado' => $nombre,
                ':apellido_invitado' => $apellido,
                ':descripcion_invitado' => $descripcion,
                ':email_invitado' =>$correo,
                ':tel_invitado' =>$tel,
                ':especialidad_invitado' => $profesion,
                ':hora_invitado' => $hora,
                ':fecha_invitado' => $fecha,
                ':foto_invitado' => $urlfoto,
                ':tema_invitado' => $tema,
                ':subtema_invitado' => $subtema,
                ':lugar_invitado' => $lugar
                                        ));
                $LAST_ID = $conn->lastInsertId();
                // firstimereglog($mail, $imguserdefaut);
            
            
                $respuesta = array(
                    'estado' => 'disponible',
                    'datos' => $LAST_ID
                );
            }
            echo json_encode($respuesta);
    }catch(PDOException $e){
        echo json_encode("Error: " .$e->getMessage());
   }
}

?>