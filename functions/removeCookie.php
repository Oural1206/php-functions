<?php
function removeCookie($cookieName){
    setcookie(
        $cookieName,
        null,
        -1,
        "/"
    );
}
?>