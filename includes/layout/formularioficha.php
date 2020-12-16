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
    <div  class = "campoadmin">
        <label for="email">Email:</label>
        <input type="text" id="email" placeholder="Email"
        value = "<?php if(isset($contacto['correo_usuario'])){
             echo $contacto['correo_usuario'];
         }
         ?>"readonly>
    </div>
    <div class = "campoadmin">
        <label for="banco">Banco:</label>
        <input  type="text" id="banco" placeholder="Banco"
        value = "<?php if($contacto['banco_usuario'] != ''){
            echo $contacto['banco_usuario'];} ?>" 
        readonly >
    </div>

    <?php if($contacto['deposito_usuario'] == 1){ ?>
    <div class = "campoadmin">
        <label 
        for="tiket">FOLIO:Tiket/Voucher:</label>
        <input type="num" id="tiket" placeholder="Tiket/Voucher"
        value = "<?php if(isset($contacto['tiked_usuario'])){
             echo $contacto['tiked_usuario'];
         }
         ?>"  readonly>
    </div>
        <?php }if($contacto['transferencia_usuario'] == 1){?>
            <div class = "campoadmin">
                <label 
                
                for="tiket">Número de transferencia Bancaria</label>
                <input type="num" id="tiket" placeholder="Número de transferencia Bancaria"
                value = "<?php if(isset($contacto['tiked_usuario'])){
                echo $contacto['tiked_usuario'];
                }
                ?>"  readonly>
            </div>
        <?php }?>
    <div  class="datosfactura">
        <div class="menufacturax" style="<?php if($contacto['factura_usuario']==0){ echo "display: none;";}?>">
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
        <div   class = "fotoficha">
            <img src="<?php if(isset($_SESSION['usuario'])){
                    echo $contacto['foto_usuario'];
                }?>" alt="">
        </div>
         

    
</div>