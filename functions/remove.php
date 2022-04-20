<?php
function remove($path) {
    if (is_dir($path)) {
        foreach (scandir($path) as $element) {
            if ($element != "." && $element != "..") {
                remove("$path/$element");
            }
        }
        rmdir($path);
    } else {
        unlink($path);
    }
}
?>
