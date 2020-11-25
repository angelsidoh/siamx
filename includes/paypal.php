<?php 
    require 'paypal/autoload.php';
    define('URL_SITIO', 'https://congresomexicanodelaguacate2020.com');
    $apiContext = new \PayPal\Rest\ApiContext(
        new \PayPal\Auth\OAuthTokenCredential(
            'AVsn_c6DlelAn02dUuEMVgGrT0AovEAQigaA7nGIOmAoa2Hu0M-aUAKm-JeuIu5uyK9oUS06XgKUMJW9',
            'EHlmjr_jTyifoA8uC8WF3UWzFvterM56mon_bLbc8GRmgxu_bpZ2-bAYTr9gwmFhtGdj_cLAqVmjZh-g'
        //    'ASBKf49fHophmNzZSMquorq49eR3VuUfRrsVo8D_e9RKyFMj991sc0Xf2iowGTO5icRl_z-WQBrp88-y', //Cliente ID
        //    'ENQyXRkVh9yrpXHzo2GCSnGPt4rV57MZkd7bN65_-SbE2mwv_2R9Mlg1fjwJLfJN1Uln0nBTOAsfeLK0' //Secret 
           )
        
       );
    // $apiContext->setConfig(
    //     array(
    //         'mode'=>'live'
    //     )
    //     );
       //echo "->>>>>>>>><<<<<<<<-";
?>