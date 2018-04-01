<?php
header('Content-Type:text/html; charset=utf-8;');
include_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "/render.php";
require_once ENGINE_DIR . "/uploads.php";

if($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_FILES['file'])) {
        $tmp = $_FILES['file']['tmp_name'];
        $filePaht = PUBLIC_DIR . "/img/" . $_FILES['file']['name'];
        move_uploaded_file($tmp, $filePaht);
    }
}

$files = getGallery();

echo render ( 'gallery', ['files' => $files] );

?>

<a href="/photo.php?id=1">photo</a>

