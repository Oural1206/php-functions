<?php
function ipToLocation($ip){
    $url = "https://freegeoip.app/json/$ip";
    $apiResponse = getUrl($url);
    return json_decode($apiResponse, true);
}
?>