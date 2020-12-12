<?php

function obtenerContacto($id){
    include 'basedatos/bdsqli.php';
    try{
        return $connf->query("SELECT id_usuario, nombre_usuario, apellido_usuario, correo_usuario, telefono_usuario, tipo_usuario, fecha_usuario, tiked_usuario, estado_usuario, inscripcion_usuario, deposito_usuario, transferencia_usuario, factura_usuario, rfc_usuario, cfdi_usuario, domiciliofiscal_usuario, estadofactura_usuario, banco_usuario  FROM usuarios WHERE id_usuario = '$id'");
    }catch(Exception $e){
        echo "Error!!" . $e->getMessage() . "<br>";
        return false;
    }
}
function obtenerFicha($correo){
    include 'basedatos/bdsqli.php';
    try{
        return $connf->query("SELECT id_usuario, nombre_usuario, apellido_usuario, correo_usuario, telefono_usuario, tipo_usuario, fecha_usuario, tiked_usuario, estado_usuario, inscripcion_usuario, deposito_usuario, transferencia_usuario, factura_usuario, rfc_usuario, cfdi_usuario, domiciliofiscal_usuario, estadofactura_usuario, banco_usuario   FROM usuarios WHERE correo_usuario = '$correo'");
    }catch(Exception $e){
        echo "Error!!" . $e->getMessage() . "<br>";
        return false;
    }
}

    function obtenerContactos(){
    
        try{
            require('basedatos/bdsqli.php');
               
               
                return $connf->query("SELECT id_usuario, nombre_usuario, apellido_usuario, correo_usuario, telefono_usuario, tipo_usuario, fecha_usuario, tiked_usuario, estado_usuario, inscripcion_usuario, deposito_usuario, transferencia_usuario, factura_usuario, rfc_usuario, cfdi_usuario, domiciliofiscal_usuario, estadofactura_usuario, banco_usuario  FROM usuarios");
                
        }catch(Exception $e){
            echo "Error!!" . $e->getMessage() . "<br>";
            return false;
        }
    }
?>
