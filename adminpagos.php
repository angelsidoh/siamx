<?php 
include_once 'includes/templates/header.php'; 
require_once('includes/funciones/funcionestwo.php');

if(!isset($_SESSION['usuario']) || $_SESSION['tipo'] != '1'){
    
    session_destroy();
  
    // header('location:logout.php');
    ?><META HTTP-EQUIV="REFRESH" CONTENT=".1;URL=https://sociedadintelectualdelaguacatemexicano.com/logout.php"><?php
    }else{
        
?>
<section class="global">
    <div class="contenedor">
    <h2>Pagos</h2>
<div class="contendor-tabla">
            <table id="listado-contacto" class="listado-contacto">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Tipo</th>
                        <th>Correo</th>
                        <th>Teléfono</th>
                       
                        <th>Tiket Voucher</th>
                        
                        <th>Estado de Pago</th>
                        <th>Diplomado</th>
                        <th>Pago por</th>
                        <th>Factura</th>
                        <th>Estado Factura</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
    <?php
                        $contactos = obtenerContactos();
                            //var_dump($contactos); 
                            if($contactos->num_rows){
                                foreach($contactos as $contacto){
                                    if($contacto['tipo_usuario']==0 && $contacto['inscripcion_usuario'] == 1){   
                    ?>  
                    <tr class="<?php
                    if($contacto['estado_usuario']=='0' || $contacto['tiked_usuario']==''){
                        echo 'blinkRojo';
                    }else{
                        if($contacto['estadofactura_usuario']=='0' && $contacto['factura_usuario']=='1'){
                            echo 'blinkAmarillo';
                        }
                    }
                    if(($contacto['estadofactura_usuario']=='0' && $contacto['factura_usuario']=='0' && $contacto['estado_usuario']=='1' && $contacto['tiked_usuario']!='') || ($contacto['estadofactura_usuario']=='1' && $contacto['factura_usuario']=='1' && $contacto['estado_usuario']=='1' && $contacto['tiked_usuario']!='')){
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
                        
                        
                        <td class="<?php 
                                        if($contacto['tiked_usuario'] == ""){
                                        echo "marcaRoja";
                                        }           
                        ?>"><?php echo $contacto['tiked_usuario']; ?></td>
                        <td class="<?php if($contacto['estado_usuario'] == 0)
                                            {echo "marcaRoja";
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
                            echo 'No pagado';
                        } 
                        ?></td>
                        <td>
                            <?php 
                            if($contacto['inscripcion_usuario']=='1'){
                                echo 'Inscrito';
                            }?> 
                        </td>
                        <td>
                            <?php
                            if($contacto['deposito_usuario'] == '1'){
                                echo "Deposito en Ventanilla";
                            }
                            if($contacto['transferencia_usuario'] == '1'){
                                echo "Transferencia Bancaria";
                            }
                            ?>
                        </td>
                        <td class="<?php if($contacto['factura_usuario']==0){
                            echo 'negro';
                            }?>">
                            <?php
                                if($contacto['factura_usuario']==1){
                                    echo 'Solicitada';
                                }else{
                                    echo 'No Solícito';
                                }
                            ?>
                        </td>
                        <td class="<?php if($contacto['estadofactura_usuario'] == 0 && $contacto['factura_usuario'] == 1){
                            echo 'marcaAmarilla';
                        }
                        if($contacto['factura_usuario']==0){
                            echo 'negro';
                            } 
                        
                        ?>">
                            <?php
                                if($contacto['estadofactura_usuario']==1){
                                    echo 'Enviada';
                                }else{
                                    echo 'No Enviada';
                                }
                            ?>
                        </td>
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
                    <?php  }
require_once('includes/templates/footer.php');
?>
