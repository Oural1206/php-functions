<?php
$repositoryName = "php-functions";

$link = "https://github.com/Oural1206/$repositoryName/archive/refs/heads/main.zip";
$file = file_put_contents("repository.zip", file_get_contents($link));
$zip = new ZipArchive;
$zip -> open("repository.zip");
$zip -> extractTo(".");
$zip -> close();
unlink("repository.zip");

$repository = "$repositoryName-main";
$functionsDir = "$repository/functions";

foreach (scandir($functionsDir) as $function) {
    if ($function != "." && $function != "..") {
        $path = "$functionsDir/$function";
        include($path);
    }
}

remove($repository);
?>
