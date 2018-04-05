<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "/render.php";
require_once ENGINE_DIR . "/db.php";

$id = $_GET['id'];
$model = queryOne("SELECT model FROM products WHERE id = {$id}");
$txt = queryOne("SELECT txt FROM products WHERE id = {$id}");
$item = queryOne("SELECT * FROM products WHERE id = {$id}");
$path = "/images/{$item['path']}";
$model = $model['model'];
$txt = $txt['txt'];

echo render("item", [
    'path' => "/images/{$item['path']}",
    'model' => $model,
    'txt' => $txt
 ]);
?>
