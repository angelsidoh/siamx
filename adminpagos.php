<?php  
require_once('includes/funciones/funcionestwo.php');
require_once('includes/templates/header.php');
if(!isset($_SESSION['usuario'])){
    ?>
    <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=http://localhost/0SIAM/login.php#ini">
    
    <?php
}
if($_SESSION['tipo'] != 99){
    if($_SESSION['tipo'] != 1){
        ?>
        <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=http://localhost/0SIAM/logout.php">
        
        <?php
    }
}
?>
<section class="global">
    <div class="contenedor">
<div class="contendor-tabla">
            <table id="listado-contacto" class="listado-contacto">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Tipo</th>
                        <th>Correo</th>
                        <th>Tel/Cel</th>
                        <th>fecha</th>
                        <th>Tiket/Voucher</th>
                        <th>Estado de Pago</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
    <?php
                        $contactos = obtenerContactos();
                            //var_dump($contactos); 
                            if($contactos->num_rows){
                                foreach($contactos as $contacto){
                                    if($contacto['tipo_usuario']==0){   
                    ?>
                       
                    <tr class="<?php
                    if($contacto['estado_usuario'] == '0' || $contacto['tiked_usuario']==''){
                        echo 'blinkRojo';
                    }elseif($contacto['estado_usuario'] == '2'){
                        echo 'blinkAmarillo';
                    }
                    elseif($contacto['estado_usuario']== '3' && $contacto['tiked_usuario'] != '' || $contacto['estado_usuario'] == '3'){
                        echo 'verde';
                    }else{
                        echo 'verde';
                    }
                    ?>">
                        
                        <td ><?php echo $nombre = ($contacto['nombre_usuario']); ?></td>
                        <td><?php echo $apellido = ($contacto['apellido_usuario']); ?></td>
                        
                        <td><?php if(($contacto['tipo_usuario'])==0){
                            echo "Cliente";
                        } ?></td>
                        <td><?php echo $contacto['correo_usuario']; ?></td>
                        <td><?php echo $contacto['telefono_usuario']; ?></td>
                        <td><?php echo $contacto['fecha_usuario']; ?></td>
                        
                        <td class="<?php 
                                       
                                        if($contacto['tiked_usuario'] == ""){
                                        echo "marcaRoja";
                                        }
                                        
                        ?>"><?php echo $contacto['tiked_usuario']; ?></td>
                        <td class="<?php if($contacto['estado_usuario'] == 0)
                                            {echo "marcaRoja";
                                            }
                                        if($contacto['estado_usuario']==2){
                                            echo "marcaAmarilla";
                                        }
                        ?>"><?php if($contacto['estado_usuario'] == 1){
                            echo 'Pagado';
                        }elseif($contacto['estado_usuario'] == 2){
                            echo 'Pendiente Por Factura';
                        }
                        elseif($contacto['estado_usuario'] == 3){
                            echo 'Factura Enviada';
                        }
                        else{
                            echo 'No hay registro de Pago';
                        } 
                        
                        ?></td>
                  

                        <td>
                            <a class="btn-editar btn" href="editar.php?id=<?php echo $contacto['id_usuario']; ?>#contacto">
                                <i class="fas fa-pen-square"></i>
                            </a>
                           
                            

                        </td>
                    </tr>
                    <?php } }}?>

                    </tbody>
                
                </table>
            </div>
        </div>
                      
</section>
<?php  
require_once('includes/templates/footer.php');
?>
