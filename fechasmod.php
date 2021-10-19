<?php 
// require_once('includes/funciones/funcionestwo.php');

// $contactos = obtenerPrograma();
// if($contactos->num_rows){
//     foreach($contactos as $contacto){
//         $invitado = array(
//             'id'=> $contacto['id_programa'],
//             'modulo' => $contacto['modulo_programa'],
//             'tema' =>  $contacto['tema_programa'],
//             'subtema' =>  $contacto['subtema_programa'],
//             'dia' =>  $contacto['dia_programa'],
//             'hora' =>  $contacto['hora_programa'],
//             'finhora' =>  $contacto['finhora_programa'],
//             'fecha' =>  $contacto['fecha_programa'],
//             'ponente' =>  $contacto['ponente_programa'],
            
//         );
//     //     echo "<PRE>";
//     //   var_dump($invitado);
//     //   echo "</PRE>";
//        $contador++;
     
       
//     }

// }
require_once('basedatos/bdsqli.php');
        try{
            for ($i= 1; $i <= 64; $i++) { 
                # code...
                    
                    date_default_timezone_set('America/Mexico_City');
                $fecha = date('Y-m-d H:i:s');
                $fecha =date('Y-m-d H:i:s', strtotime($fecha."+1 year"));
                $fecha =date('Y-m-d H:i:s', strtotime($fecha."+".$i."day"));
                $fecha1 = date('Y-m-d');
                $fecha1 =date('Y-m-d H:i:s', strtotime($fecha1."+1 year"));
                $fecha1 =date('Y-m-d H:i:s', strtotime($fecha1."+".$i."day"));
                $id = "1";
                        $stmt = $connf->prepare("UPDATE programa SET fecha_programa = ?, dia_programa = ? WHERE id_programa = ?");
                        
                        $stmt->bind_param("ssi", $fecha, $fecha1, $i);
                        
                        $stmt->execute();
                        
                        if($stmt->affected_rows == 1){
                            $respuesta = array(
                                'respuesta' => 'correctousuario'
                            );
                            
                        }
        }
           
            $stmt->close();
$connf->close();

        }catch(Exception $e){
                $respuesta = array(
                    'error' => $e->getMessage()
                );
        }

                            ?>