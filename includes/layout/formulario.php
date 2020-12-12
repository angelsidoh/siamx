<div class = "camposadmin">
    <div class = "campoadmin">
        <label for="nombre">Nombre</label>
        <input type="text" placeholder = "Nombre" id = "nombre" 
        value = "<?php if(isset($contacto['nombre_usuario'])){
             echo $contacto['nombre_usuario'];
         }
         ?>"readonly
        >
    </div>
    <div class = "campoadmin">
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" placeholder="Apellido"
        value = "<?php if(isset($contacto['apellido_usuario'])){
             echo $contacto['apellido_usuario'];
         }
         ?>" readonly>
    </div>
    <div class = "campoadmin"> 
        <label for="telefono">Número Telefónico:</label>
        <input type="tel" id="telefono"  placeholder="Telefóno"
        value = "<?php if(isset($contacto['telefono_usuario'])){
             echo $contacto['telefono_usuario'];
         }
         ?>"readonly>
    </div>
    <div class = "campoadmin">
        <label for="email">Email:</label>
        <input type="text" id="email" placeholder="Email"
        value = "<?php if(isset($contacto['correo_usuario'])){
             echo $contacto['correo_usuario'];
         }
         ?>"readonly>
    </div>
    <div class = "campoadmin">
        <label  class = "<?php  if($contacto['banco'] == ''){
                        echo 'blinkVerde';
                    }else{
                        echo 'sin'.$_SESSION['tipo'];
                    }?>" for="banco">Banco:</label>
        <input class = "<?php  if($contacto['banco'] == ''){
                        echo 'blink2Verde';
                    }else{
                        echo 'sin'.$_SESSION['tipo'];
                    }?>" type="text" id="banco" placeholder="Banco"
        value = "<?php if($contacto['banco_usuario'] != ''){
            echo $contacto['banco_usuario'];} ?>" <?php if($contacto['tiked_usuario'] != ''){?> 
        readonly <?php } ?> >
    </div>

    <?php if($contacto['deposito_usuario'] == 1){ ?>
    <div class = "campoadmin">
        <label 
        class = "<?php  if($_SESSION['tipo'] == '1'){
                        echo 'blinkVerde';
                    }else{
                        echo 'sin'.$_SESSION['tipo'];
                    }?>"
        for="tiket">FOLIO:Tiket/Voucher:</label>
        <input class = "<?php  if($_SESSION['tipo'] == '1' || $_SESSION['tipo'] == '0'){
                        echo 'blinkVerde';
                    }else{
                        echo 'sin'.$_SESSION['tipo'];
                    }?>"type="num" id="tiket" placeholder="Tiket/Voucher"
        value = "<?php if(isset($contacto['tiked_usuario'])){
             echo $contacto['tiked_usuario'];
         }
         ?>">
    </div>
        <?php }if($contacto['transferencia_usuario'] == 1){?>
            <div class = "campoadmin">
                <label 
                class = "<?php  if($_SESSION['tipo'] == '1'){
                echo 'blinkVerde';
                }else{
                echo 'sin'.$_SESSION['tipo'];
                }?>"
                for="tiket">Número de transferencia Bancaria</label>
                <input class = "<?php  if($_SESSION['tipo'] == '1' || $_SESSION['tipo'] == '0'){
                echo 'blink2Verde';
                }else{
                echo 'sin'.$_SESSION['tipo'];
                }?>"type="num" id="tiket" placeholder="Tiket/Voucher"
                value = "<?php if(isset($contacto['tiked_usuario'])){
                echo $contacto['tiked_usuario'];
                }
                ?>">
            </div>
        <?php }?>
    <div class="datosfactura">
    <div class="menufacturax">
                  <!-- <div class="nombrefactura">
                    <p>Nombre</p>
                  </div>
                  <div class="inputnombre">
                    <input type="text" id="nombre" name="nombre" placeholder="Nombre">
                  </div> -->
                  <div class="partext">
                    <p>RFC <i class="fas fa-arrow-right"></i></p>
                  </div>
                  <div class="partinput">
                    <input type="text" id="rfc" name="rfc" placeholder="RFC" readonly value="<?php if($contacto['rfc_usuario']!=''){
                            echo $contacto['rfc_usuario'];
                        }?>">
                  </div>
                  <div class="partext">
                    <p>CFDI <i class="fas fa-arrow-right"></i></p>
                  </div>
                  <div class="partinput">
                    <input type="text" id="cfdi" name="cfdi" placeholder="CFDI" readonly value="<?php if($contacto['cfdi_usuario']!=''){
                            echo $contacto['cfdi_usuario'];
                        }?>">
                  </div>
                  <div class="partext">
                    <p>Domicilio Fiscal <i class="fas fa-arrow-right"></i></p>
                  </div>
                  <div class="partinput">
                    <input type="text" id="domiciliof" name="domiciliof" placeholder="Domicilio Fiscal" readonly value="<?php if($contacto['domiciliofiscal_usuario']!=''){
                            echo $contacto['domiciliofiscal_usuario'];
                        }?>">
                  </div>
                </div>
         </div>
         <?php if($_SESSION['tipo'] == 1){ ?>
    <div class = "campoadminx">
        <label 
        class = "<?php  if($_SESSION['tipo'] == '1'){
                        echo 'blinkVerde';
                    }else{
                        echo 'sin'.$_SESSION['tipo'];
                    }?>"for="pago">Estado de Pago:&nbsp;</label>
       
         <select name="pago" id="pago" 
         class="<?php
                if($contacto['estado_usuario']=='1'||$contacto['estado_usuario']=='3'){
                    echo 'verde';
                }
                elseif($contacto['estado_usuario']=='2'){
                    echo 'amarillo';
                }else{
                    echo 'rojo';
                }
         ?>">
         
         <!-- <option value="opciones"selected disabled>Selecciona el estado de Pago</option>  -->
        <option value="0" >No a Pagado</option>
        <option value="1" <?php if($contacto['estado_usuario']== 1){
                            ?> selected <?php }
                            ?>>Pagado</option>
 

         </select>
         <label  class = "<?php  if($_SESSION['tipo'] == '1'){
                        echo 'blinkVerde';
                    }
                   
                    ?>" for="facturaestado" >&nbsp;&nbsp;Estado de factura: &nbsp;</label>
         <select name="facturaestado" id="facturaestado" 
         class="<?php
                if($contacto['estadofactura_usuario']=='1'){
                    echo 'verde';
                }
                else{
                    echo 'rojo';
                }
         ?>">
         
         <!-- <option value="opciones"selected disabled>Selecciona el estado de Pago</option>  -->
        <option value="0" >No enviada</option>
        <option value="1" <?php if($contacto['estadofactura_usuario']== 1){
                            ?> selected <?php }
                            ?>>Enviada</option>
 

         </select>
         
         
    </div>
        <?php }
        ?>

    <div class="campoadmin enviar">
         <?php
            
            if(isset($contacto['estado_usuario']) && $_SESSION['tipo']== 1){
                $textBtn = 'Guardar';
                $accion =  'editar';
            }
            
            if($_SESSION['tipo'] == 0 && isset($_SESSION['correo'])){
                $textBtn = 'Enviar Notificación de Pago al Sistema';
                $accion =   'pago';
            }
            // $textBtn = ($contacto['telefono']) ? 'Guardar' : 'Añadir';
            //echo $textBtn;
         ?>
        <input type="hidden" id="accion" value="<?php echo $accion;?>">
        <?php if(isset($contacto['id_usuario'])){?>
        <input type="hidden" id="id" value="<?php echo $contacto['id_usuario'];?>">
        <?php }?>
        <input class = "button" type="submit" value="<?php echo $textBtn;?>">
        
        
        
    </div>
</div>