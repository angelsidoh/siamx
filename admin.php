<?php  
include_once 'includes/templates/header.php';
require_once('includes/funciones/funcionestwo.php');


if(!isset($_SESSION['usuario']) || $_SESSION['tipo'] != '99'){
    
    session_destroy();
  
    // header('location:logout.php');
    ?><META HTTP-EQUIV="REFRESH" CONTENT=".1;URL=https://sociedadintelectualdelaguacatemexicano.com/logout.php"><?php
    }else{
        
?>

<section class="global">
    <div class="contenedor">
    
<div style="display: none;" class="contendor-tabla">
            <table id="listado-contacto" class="listado-contacto">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        
                        <th>Tipo</th>
                        <th>Correo</th>
                        <th>Tel/Cel</th>
                        <th>fecha</th>
                        <th>Boucher/Tiked</th>
                        <th>Estado de Pago</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
    <?php
                        $contactos = obtenerContactos();
                            //var_dump($contactos); 
                            if($contactos->num_rows){
                                foreach($contactos as $contacto){
                                      
                    ?>
                       
                    <tr class="<?php
                    if($contacto['estado_usuario'] == '0'){
                        echo 'blinkRojo';
                    }elseif($contacto['estado_usuario'] == '2'){
                        echo 'blinkAmarillo';
                    }
                    else{
                        echo 'verde';
                    }
                    ?>">
                        
                        <td ><?php echo $nombre = ($contacto['nombre_usuario']); ?></td>
                        <td><?php echo $apellido = ($contacto['apellido_usuario']); ?></td>
                        
                        <td><?php 
                        if(($contacto['tipo_usuario'])==0){
                            echo "Cliente";
                        } 
                        if(($contacto['tipo_usuario'])==99){
                            echo "Admin";
                        } 
                        if(($contacto['tipo_usuario'])==1){
                            echo "Contador";
                        } 
                        if(($contacto['tipo_usuario'])==2){
                            echo "Ponente";
                        } 
                        
                        ?></td>
                        <td><?php echo $contacto['correo_usuario']; ?></td>
                        <td><?php echo $contacto['telefono_usuario']; ?></td>
                        <td><?php echo $contacto['fecha_usuario']; ?></td>
                        
                        <td><?php echo $contacto['tiked_usuario']; ?></td>
                        <td><?php if($contacto['estado_usuario'] == 1){
                            echo 'Pagado';
                        }elseif($contacto['estado_usuario'] == 2){
                            echo 'Pendidiente Por Factura';
                        }else{
                            echo 'No hay registro de Pago';
                        } 
                        
                        ?></td>
                  

                        <td>
                            <a class="btn-editar btn" href="editar.php?id=<?php echo $contacto['id_usuario']; ?>">
                                <i class="fas fa-pen-square"></i>
                            </a>
                           
                            <button data-id="<?php echo $contacto['id_user']; ?>" class="btn-borrar btn" type="button">
                                <i class="fas fa-trash"></i>
                            </button>

                        </td>
                    </tr>
                    <?php }}?>

                    </tbody>
                
                </table>
            </div>
        </div>
    </div>
</section>
<div class="contenedor">
        <div class="programaevento">
          <h3>Programa</h3>
          <?php
                $titles = [
                    '',
                    'Manejo de viveros y sistemas de Producción',
                    'Fertilización, uso de agua y suelo; y agricultura de precisión',
                    'Práctica de campo a la huerta de aguacate “HUERTA SANTA MARÍA 1” en Toreo El Alto Mich, Municipio de Uruapan, Michoacán.',
                    'Práctica de campo a la huerta de aguacate “HUERTA VIEJO CUCHATÁCUARO” en Tiamba, Mich, Municipio de Uruapan, Michoacán.',
                    'Fertilización, uso de agua y suelo; y agricultura de precisión.',
                    'Podas; manejo de estrés y floración.',
                    'Control de plagas enfermedades y malezas.',
                    'Cosecha y comercialización.',
                    'Inocuidad y producción sostenible en el rendimiento del aguacate.',
                    'Inocuidad y producción sostenible en el rendimiento del aguacate.',
                    'La tesis profesional y titulación en la Facultad de Agrobiologia.',
                    'Examen general  de conocimientos del primer diplomado para la profesionalización del cultivo del aguacate. Y Clausura del diplomado'

                  ];



                  for ($i = 1; $i < 13; $i++) {
          ?><img src="img/programacompleto/modulo<?php echo $i; ?>-min.jpg" alt="<?php echo $titles[$i]; ?>"><?php
                                                                                                            } ?>
        </div>
      </div>
      <div class="contenedor">
          <?php require 'agregarmiembroshe.php';?>
      </div>
                    <?php  }
                    
require_once('includes/templates/footer.php');
?>