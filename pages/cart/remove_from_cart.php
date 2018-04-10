<?php
$productId = $_GET['id'];
session_start();
if(isset($_SESSION['cart'][$productId])){
    unset($_SESSION['cart'][$productId]);
}
redirect("/cart/index");