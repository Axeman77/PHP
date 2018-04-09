<?php
header('Content-Type: text/html;charset=utf-8');
include_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "/autoload.php";


session_start();

$products = getAllProducts();
echo render('catalog', ['products' => $products]);
?>
