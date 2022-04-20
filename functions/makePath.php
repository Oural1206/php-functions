<?php
function makePath($array) {
    $path = "";
    foreach($array as $element) {
        if ($element) {
            if ($path) {
                $path = "$path/$element";
            } else {
                $path = $element;
            }
        }
    }
    return $path;
}
?>