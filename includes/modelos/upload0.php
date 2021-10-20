<?php
if(isset($_FILES['filesx'])){
        $fileName = $_FILES["filesx"]["name"]; // The file name
        $fileTmpLoc = $_FILES["filesx"]["tmp_name"]; // File in the PHP tmp folder
        $fileType = $_FILES["filesx"]["type"]; // The type of file it is
        $fileSize = $_FILES["filesx"]["size"]; // File size in bytes
        $fileErrorMsg = $_FILES["filesx"]["error"]; // 0 for false... and 1 for true
        $archivo = basename($_FILES["filesx"]["name"]);
        $tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
        
        if (!$fileTmpLoc) { // if file not chosen
            echo "ERROR: Please browse for a file before clicking the upload button.";
            exit();
        }
        if($tipoArchivo == "jpg" || $tipoArchivo == "jpeg" || $tipoArchivo == 'png'){
        
            date_default_timezone_set("America/Mexico_City");
            $str = ("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890");
            $mod = "";
            for($i=0; $i < 3 ; $i++ ){
                $mod .= substr($str, rand(0, 62), 1);
            }
            $mod .=  date("dFYHis",time());
            $c = $_SESSION['usuario'];
            $a= "../../upload/" . $c . "-" . $mod . $fileName;
            $b = "https://sociedadintelectualdelaguacatemexicano.com/upload/" . $c . "-" . $mod . $fileName;
            if(move_uploaded_file($fileTmpLoc, $a)){
             
                $respuesta = array(
                    'estado'=>'uploadsuccess',
                    'url'=> $b
                );

            }else{
                $respuesta = array(
                    'estado'=>'uploaderror'
                );
            }
            echo json_encode($respuesta);
        }else{
            $respuesta = array(
                'estado'=>'fotoformatoerror'
            );
            echo json_encode($respuesta);
        }
    }else{
        $respuesta = array(
            'estado'=>'errorfotonoselect'
        );
        echo json_encode($respuesta);
    }