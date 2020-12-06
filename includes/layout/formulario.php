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
        <label 
        class = "<?php  if($_SESSION['tipo'] == '1'){
                        echo 'blinkVerde';
                    }else{
                        echo 'sin'.$_SESSION['tipo'];
                    }?>"
        for="tiket">FOLIO:Tiket/Voucher:</label>
        <input class = "<?php  if($_SESSION['tipo'] == '1'){
                        echo 'blink2Verde';
                    }else{
                        echo 'sin'.$_SESSION['tipo'];
                    }?>"type="num" id="tiket" placeholder="Tiket/Voucher"
        value = "<?php if(isset($contacto['tiked_usuario'])){
             echo $contacto['tiked_usuario'];
         }
         ?>">
    </div>
    <div class = "campoadmin">
        <label 
        class = "<?php  if($_SESSION['tipo'] == '1'){
                        echo 'blinkVerde';
                    }else{
                        echo 'sin'.$_SESSION['tipo'];
                    }?>"for="pago">Estado de Pago:</label>
       
         <select name="pago" id="pago" 
         class="<?php
                if($contacto['estado_usuario']==1||$contacto['estado_usuario']==3){
                    echo 'verde';
                }
                elseif($contacto['estado_usuario']==2){
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
  <option value="2"<?php if($contacto['estado_usuario']== 2){
                            ?> selected <?php }
                            ?>>Requiere Factura</option>
                            <option value="3"<?php if($contacto['estado_usuario']== 3){
                            ?> selected <?php }
                            ?>>Factura Enviada</option>

         </select>
    </div>
    <div class="campoadmin enviar">
         <?php
            
            if(isset($contacto['estado_usuario'])){
                $textBtn = 'Guardar';
                $accion =  'editar';
            }else{
                $textBtn = 'Añadir';
                $accion =   'crear';
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