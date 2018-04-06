<?php
header('Content-Type: text/html;charset=utf-8');
include_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "/render.php";
require_once ENGINE_DIR . "/db.php";
require_once ENGINE_DIR . "/products.php";

$id = $_GET['id'];
$product = getProductById($id);
echo render("card", ['product' => $product]);
?>
