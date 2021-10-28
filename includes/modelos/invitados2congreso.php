<?php
if ($_POST['accion'] == 'Up SiamGrup') {
    $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    $apellido = filter_var($_POST['apellido'], FILTER_SANITIZE_STRING);
    // $tel = filter_var($_POST['tel'], FILTER_SANITIZE_STRING);
    $profesion = filter_var($_POST['profesion'], FILTER_SANITIZE_STRING);
    $descripcion = filter_var($_POST['descripcion'], FILTER_SANITIZE_STRING);
    $fecha = filter_var($_POST['fecha'], FILTER_SANITIZE_STRING);
    $hora = filter_var($_POST['hora'], FILTER_SANITIZE_STRING);
    $urlfoto = $_POST['urlfoto'];
    // $correo = filter_var($_POST['correo'],FILTER_SANITIZE_EMAIL);
    $tema = filter_var($_POST['tema'], FILTER_SANITIZE_STRING);
    $subtema = $_POST['subtema'];
    $lugar = filter_var($_POST['lugar'], FILTER_SANITIZE_STRING);
    $str = ("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!#$%&/()=+-~1234567890");
    $pass = "";
    for ($i = 0; $i < 16; $i++) {
        $pass .= substr($str, rand(0, 74), 1);
    }
    try {
        require('../../basedatos/bd.php');
        $stmt = $conn->prepare('SELECT * FROM invitados WHERE identi_invitado = :identi_invitado LIMIT 1');
        $stmt->execute(array(':identi_invitado' => $pass));
        $resultado = $stmt->fetch();
        if ($resultado != false) {
            $respuesta = array(
                'estado' => 'correo existe'
            );
        } else {
            $stmt = $conn->prepare('INSERT INTO invitados (id_invitados, nombre_invitado, apellido_invitado, descripcion_invitado,
               
                especialidad_invitado,
                hora_invitado,
                fecha_invitado,
                foto_invitado,
                tema_invitado,
                subtema_invitado,
                lugar_invitado,
                identi_invitado
                ) VALUES (null, :nombre_invitado,
                        :apellido_invitado,
                        :descripcion_invitado,
                        
                        :especialidad_invitado,
                        :hora_invitado,
                        :fecha_invitado,
                        :foto_invitado,
                        :tema_invitado,
                        :subtema_invitado,
                        :lugar_invitado,
                        :identi_invitado
                )');
            $stmt->execute(array(
                ':nombre_invitado' => $nombre,
                ':apellido_invitado' => $apellido,
                ':descripcion_invitado' => $descripcion,
                ':especialidad_invitado' => $profesion,
                ':hora_invitado' => $hora,
                ':fecha_invitado' => $fecha,
                ':foto_invitado' => $urlfoto,
                ':tema_invitado' => $tema,
                ':subtema_invitado' => $subtema,
                ':lugar_invitado' => $lugar,
                ':identi_invitado' => $pass
            ));
            $LAST_ID = $conn->lastInsertId();
            // firstimereglog($mail, $imguserdefaut);


            $respuesta = array(
                'estado' => 'disponible',
                'datos' => $LAST_ID
            );
        }
        echo json_encode($respuesta);
    } catch (PDOException $e) {
        echo json_encode("Error: " . $e->getMessage());
    }
}
