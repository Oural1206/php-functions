<?php
function sendDiscordWhebhook($url, $data){
    $session = curl_init($url);
    curl_setopt($session, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
    curl_setopt($session, CURLOPT_POSTFIELDS, json_encode($data));
    curl_exec($session);
    curl_close($session);
}
?>