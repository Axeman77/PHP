<?php
header('Content-Type: text/html;charset=utf-8');
include_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "/render.php";
require_once ENGINE_DIR . "/db.php";
require_once ENGINE_DIR . "/products.php";

session_start();
if(!isset($_SESSION['login'])) {
    echo "Пошел вон!";
    exit;
}
/*session_start();
if(!isset($_SESSION['login'])){
    echo "Пошел вон!"; exit;
}*/

$products = getAllProducts();
echo render('catalog', ['products' => $products]);
?>
