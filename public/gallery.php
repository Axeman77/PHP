<?php
header('Content-Type:text/html; charset=utf-8;');
include_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "/render.php";
require_once ENGINE_DIR . "/uploads.php";

if($_SERVER['REQUEST_METHOD'] == "POST") {
   uploadImg();
}

$files = getGallery();
echo render ( 'gallery', ['images' => $files] );

?>



