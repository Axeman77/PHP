<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "/render.php";
require_once ENGINE_DIR . "/db.php";

$id = $_GET['id'];
$photo = queryOne("SELECT * FROM images WHERE id = {$id}");
$path = "/img/{$photo['path']}";


$count = $photo['count'] + 1;
execute("UPDATE images SET `count` = `count` + 1 WHERE id = {$id}");
echo render("photo", [
    'path' => "/img/{$photo['path']}",
    'count' => $count
]);
?>


