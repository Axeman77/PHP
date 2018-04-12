<?php
$productId = $_GET['id'];
if(isset($_SESSION['cart'][$productId])){
    unset($_SESSION['cart'][$productId]);
}

$itemId = $_POST['id'];
if(isset($_SESSION['cart'][$itemId]) && $_SESSION['cart'][$itemId] > 1) {
    $_SESSION['cart'][$itemId]--;
}

redirect("/cart/index");