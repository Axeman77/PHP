<?php
header('Content-Type:text/html; charset=utf-8;');
include_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "/render.php";
include_once TEMPLATES_DIR . "/upload_form.php";


$dir = opendir('img/'); // Папка с изображениями
readdir($dir); // читаем содержимое директории
while ( $file = readdir ($dir)){
    if (($file != ".") && ($file != "..")) {
        $files[] = $file;
    }
}
closedir ($dir);

//Подготовили данные, теперь надо переддатть их в шаблон. Самый простой вариант - сделать include:

include_once TEMPLATES_DIR . "/gallery.php";

?>