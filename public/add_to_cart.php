<?php
header('Content-Type: text/html;charset=utf-8');
include_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "/routing.php";

$itemId = $_GET['id'];
session_start();
if(isset($_SESSION['cart'][$itemId])){
    $_SESSION['cart'][$itemId]++;
}else{
    $_SESSION['cart'][$itemId] = 1;
}

redirect("/catalog.php");
