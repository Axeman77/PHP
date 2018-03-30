<?php
header('Content-Type:text/html; charset=utf-8;');
include_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "/render.php";


if($_SERVER['REQUEST_METHOD'] == "POST"){
    uploadFile (PUBLIC_DIR . "/img/");
  }

$files = getGallery();

?>

<div class = gallery>
    <?php foreach ($files as $file): ?>
        <div>
            <a href="/img/<?=$file?>" target="_blank">
                <img alt='' width='100' src="/img/<?=$file?>">
            </a>
        </div>
    <?php endforeach; ?>
</div>

<form action="" enctype="multipart/form-data" method="post">
    <input type="file" name = 'file'>
    <input type="submit">
</form>
