<?php
$itemId = $_POST['id'];
if(isset($_SESSION['cart'][$itemId])){
    $_SESSION['cart'][$itemId]++;
    echo json_encode(["status" => "ok", "message" => "Товар добавлен"]);
}else{
    $_SESSION['cart'][$itemId] = 1;
    echo json_encode(["status" => "ok", "message" => "Товар добавлен"]);
}

if (isset($_POST['cart_add'])) {
    $id = $_POST['id'];
    if (isset($_SESSION['cart'][$itemId]))
        $_SESSION['cart'][$itemId]++;
    echo json_encode(["status" => "ok", "message" => "Товар добавлен"]);
}




