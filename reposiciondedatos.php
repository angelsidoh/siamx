<?php require_once('includes/funciones/funcionestwo.php');
$contador = 0;
$contactos = vistasusuarios();
if($contactos->num_rows){
    foreach($contactos as $contacto){
        $invitado = array(
            'nombre'=> $contacto['nombre_invitado'],
            'apellidos' => $contacto['apellido_invitado'],
            'email' =>  $contacto['email_invitado'],
            'tel' =>  $contacto['tel_invitado'],
            'tipo' =>  $contacto['tipo_invitado'],
            'foto' =>  $contacto['foto_invitado'],
            'descripcion' =>  $contacto['descripcion_invitado'],
            'especialidad' =>  $contacto['especialidad_invitado'],
            'fecha' =>  $contacto['fecha_invitado'],
            'hora' =>  $contacto['hora_invitado'],
            'tema' =>  $contacto['tema_invitado'],
            'subtema' =>  $contacto['subtema_invitado'],
            'lugar'=> $contacto['lugar_invitado']
            
        );
        $vector["factor".$contador] = $invitado;
        $contador++;
        
   
    }

}
// $vector = array(
//                 'estado'=> 'traducido'
               
                
//             );
echo json_encode($vector);
                            ?>