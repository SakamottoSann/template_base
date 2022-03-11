<?php
function sendMessage($number, $message){
    $_url = 'http://localhost/Controle_Interno/controle_modulos/index.php/Welcome/sendTelegram';
    
    $postData = ['number' => $number, 'message' => $message];
   
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, false); 
    curl_setopt($ch, CURLOPT_POST, count($postData));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);    

    $output=curl_exec($ch);

    curl_close($ch);

    return $output;
}