<?php
header('Content-Type: text/html;charset=utf-8');
include_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "/render.php";
require_once ENGINE_DIR . "/db.php";
require_once ENGINE_DIR . "/products.php";

session_start();
$id = $_GET['id'];
$product = getProductById($id);
$itemArray = array($product[0] => array(
                            'name'=>$product["name"],
                            'model'=>$product["model"],
                            'txt'=>$product["txt"],
                            'path'=>$product["path"],
                            'price'=>$product["price"])
                            );

$_SESSION['cart'] = [];
//$_SESSION ['cart'] = array_merge($_SESSION['cart_item'],$itemArray);
array_push($_SESSION['cart'], $itemArray);

echo render("add_to_cart", ['itemArray' => $_SESSION ['cart']]);

// не получается вывести несколько товаров
