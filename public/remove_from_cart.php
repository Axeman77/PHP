<?php
header('Content-Type: text/html;charset=utf-8');
include_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "/routing.php";

$productId = $_GET['id'];
session_start();
if(isset($_SESSION['cart'][$productId])){
    unset($_SESSION['cart'][$productId]);
}

redirect("/cart.php");