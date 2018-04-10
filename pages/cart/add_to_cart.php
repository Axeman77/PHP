<?php
$itemId = $_GET['id'];
session_start();
if(isset($_SESSION['cart'][$itemId])){
    $_SESSION['cart'][$itemId]++;
}else{
    $_SESSION['cart'][$itemId] = 1;
}
redirect("/product/index");
