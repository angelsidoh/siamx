<?php function productos_json(&$boletos){
    $tipoboleto = array(0 => 'estudiante', 1 => 'general');
    
    $totalboletos = array_combine($tipoboleto, $boletos);
   
    
    $json = array();
    //echo "->>>" . (int)$boletos['estudiante']['cantidad'];
    //echo "->>>" . (int)$boletos['general']['cantidad'];
    $condition1= ((int)$boletos['estudiante']['cantidad']);
    $condition2= (int)$boletos['general']['cantidad'];
    
    foreach($totalboletos as $key => $boletos):
        echo $key . "condicion= " . $condition1;
        if($condition1 > 0  && $key = 'estudiante'){
            $json[$key] = 1;
            // echo "---" . "<pre>";
            // var_dump($json);
            // echo "</pre>";
                }
        if($condition2 > 0 && $key = 'general'){
            $json[$key] = 1;
            // echo "---" . "<pre>";
            // var_dump($json);
            // echo "</pre>";
        }
           
    endforeach;
    
    return json_encode($json);
}
?>

        <!-- echo "->>>" . (int)$boletos['estudiante']['cantidad'];
            echo "->>>" . (int)$boletos['completo']['cantidad'];
            $condition1= (int)$boletos['estudiante']['cantidad'];
            $condition2= (int)$boletos['completo']['cantidad']; -->