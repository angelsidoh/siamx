<?php

if ($_POST['accionx'] == 'Inscribirme al diplomado'){
    $inscripcion = filter_var($_POST['inscripcion'],FILTER_SANITIZE_STRING);
    $deposito = filter_var($_POST['deposito'],FILTER_SANITIZE_STRING);
    $trasnferencia = filter_var($_POST['trasnferencia'],FILTER_SANITIZE_STRING);
    $factura = filter_var($_POST['factura'],FILTER_SANITIZE_STRING);
    $rfc = filter_var($_POST['rfc'],FILTER_SANITIZE_STRING);
    $cfdi = filter_var($_POST['cfdi'],FILTER_SANITIZE_STRING);
    $domiciliof = filter_var($_POST['domiciliof'],FILTER_SANITIZE_STRING);

    
    
    echo json_encode($_POST);
}
?>