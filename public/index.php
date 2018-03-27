<?php
header('Content-Type:text/html; charset=utf-8;');
include_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "/render.php";
include_once TEMPLATES_DIR . "/upload_form.php";



$dir = opendir("img");
while ($file = readdir($dir)){
    if(is_dir($file)){
        echo "<strong>$file</strong><br>";
    } else {
        echo "$file<br>";
    }
};
closedir($dir);



?>

