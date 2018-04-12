<?php
$itemId = $_POST['id'];

if(isset($_SESSION['cart'][$itemId])){
    $_SESSION['cart'][$itemId]++;
}else{
    $_SESSION['cart'][$itemId] = 1;
    echo json_encode(["status" => "ok", "message" => "Товар добавлен"]);
}




