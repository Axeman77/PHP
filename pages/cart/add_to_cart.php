<?php
$itemId = $_POST['id'];
session_start();
if(isset($_SESSION['cart'][$itemId])){
    $_SESSION['cart'][$itemId]++;
}else{
    $_SESSION['cart'][$itemId] = 1;
}

if (isset($_POST['cart_add'])) {
    $id = $_POST['id'];
    session_start();
    $_SESSION['cart'][$itemId]++;
}

echo json_encode(["status" => "ok", "message" => "Товар добавлен"]);


