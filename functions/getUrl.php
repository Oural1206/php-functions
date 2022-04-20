<?php
function getUrl($url){
    $session = curl_init($url); 
    curl_setopt($session, CURLOPT_RETURNTRANSFER, true); 
    $urlResponse = curl_exec($session);
    curl_close($session);
    return $urlResponse;
}
?>