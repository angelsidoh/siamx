<div class = "camposadmin">
    <div class = "campoadmin">
        <label for="nombre">Nombre</label>
        <input type="text" placeholder = "Nombre" id = "nombre" 
        value = "<?php if(isset($contacto['nombre_usercurfeb'])){
             echo $contacto['nombre_usercurfeb'];
         }
         ?>"
        >
    </div>
    <div class = "campoadmin">
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" placeholder="Apellido"
        value = "<?php if(isset($contacto['apellido_usercurfeb'])){
             echo $contacto['apellido_usercurfeb'];
         }
         ?>">
    </div>
    <div class = "campoadmin"> 
        <label for="numerotel">Numero Telefónico:</label>
        <input type="tel" id="numerotel"  placeholder="Teléfono (ADMITE UNICAMENTE NÚMEROS)"
        value = "<?php if(isset($contacto['tel_usercurfeb'])){
             echo $contacto['tel_usercurfeb'];
         }
         ?>">
    </div>
    <div class = "campoadmin">
        <label for="email">Email:</label>
        <input type="text" id="email" placeholder="Email"
        value = "<?php if(isset($contacto['correo_usercurfeb'])){
             echo $contacto['correo_usercurfeb'];
         }
         ?>">
    </div>
    <div class = "campoadmin">
        <label for="email2">Confirmar Email:</label>
        <input type="email" id="email2" placeholder="Email (Confirmar)"
        value = "<?php if(isset($contacto['correo_usercurfeb'])){
             echo $contacto['correo_usercurfeb'];
         }
         ?>">
    </div>
    <div class = "campoadmin">
        <label for="numboleto">Número de boleto:</label>
        <input type="num" id="numboleto" placeholder="Número de Boleto (SOLO NÚMEROS)"
        value = "<?php if(isset($contacto['numbolet_usercurfeb'])){
             echo $contacto['numbolet_usercurfeb'];
         }
         ?>">
    </div>
    <div class="campoadmin enviar">
         <?php
            
            if(isset($contacto['numbolet_usercurfeb'])){
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
        <?php if(isset($contacto['id_usercurfeb'])){?>
        <input type="hidden" id="id" value="<?php echo $contacto['id_usercurfeb'];?>">
        <?php }?>
        <input class = "button" type="submit" value="<?php echo $textBtn;?>">
        
        
        
    </div>
</div>