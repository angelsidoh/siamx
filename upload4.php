<?php
    session_start();
    $fileName = $_FILES["foto1file"]["name"]; // The file name
$fileTmpLoc = $_FILES["foto1file"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["foto1file"]["type"]; // The type of file it is
$fileSize = $_FILES["foto1file"]["size"]; // File size in bytes
$fileErrorMsg = $_FILES["foto1file"]["error"]; // 0 for false... and 1 for true
$archivo = basename($_FILES["foto1file"]["name"]);
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
        $b = $_SESSION['usuario'];
        $a= "upload/" . $b . "-" . $mod . $fileName;
        if(move_uploaded_file($fileTmpLoc, $a)){
            echo json_encode( "File is valid, and was successfully uploaded.\n");
        }else{
            echo json_encode( "Upload failed");
        }
    }
?>